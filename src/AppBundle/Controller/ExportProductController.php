<?php

namespace AppBundle\Controller;

use AppBundle\Entity\ExportProduct;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

use phpish\shopify;
/**
 * Exportproduct controller.
 *
 * @Route("products")
 */
class ExportProductController extends Controller
{
    /**
     * Lists all exportProduct entities.
     *
     * @Route("/", name="products_index")
     * @Method("GET")
     */
    public function indexAction()
    {
		
        $em = $this->getDoctrine()->getManager();

        $exportProducts = $em->getRepository('AppBundle:ExportProduct')->findBy(
			 array(),
			 array('createdAt' => 'DESC')
		);

        return $this->render('exportproduct/index.html.twig', array(
            'exportProducts' => $exportProducts,
            ));
    }

    /**
     * Lists all exportProduct entities.
     *
     * @Route("/export", name="products_export")
     * @Method("GET")
     */
    public function exportAction()
    {
        $em = $this->getDoctrine()->getManager();
		$shop = $this->get('session')->get('shop');
		$shopify = shopify\client(
			$shop['domain'],
			$this->container->getParameter('SHOPIFY_APP_API_KEY'),
			$shop['oauth_token']
		);
		$products = $shopify('GET /admin/products.json', array('published_status'=>'published'));
        
        $data = $products;

        $date = new \DateTime();
        $csvFileName = 'files/exports/products/'.$shop['name'].'-products-'.date('Y-m-d_H.i.s').'.csv';

        $fp = fopen($csvFileName, 'w');

        $header = array("id-produit","code-ean","denomination-concise","denomination-subjective","description-concise","description-complète","url-article","url-photo1","url-photo2","url-photo3","url-photo4","url-photo5","marque","genre","classification","id-reference","disponibilite","statut-de-disponibilite","prix-ttc","ecotaxe","retractation","quantite","delai-de-reappro","delai-de-livraison","unite-delai-de-livraison","delai-d-expedition","unite-delai-d-expedition","frais-de-port","description-livraison","prix-public-generalement-constate","mots-clefs","date-heure-de-debut-promotion","date-heure-de-fin-promotion","prix-ttc-avant-promotion","promotion","pourcentage-de-la-remise","prix-remise","type-de-promotion","garantie","message-promotionnel","couleur","taille","matiere");

		fputcsv($fp, $header, "|");

        foreach($data as $product)
        {
            foreach($product['variants'] as $variant)
             {
             // foreach($product['images'] as $image)
             // {

                $line = array();
                

                $line['id_produit'] = $product['id'];
                $line['code_ean'] = $variant['barcode'];
                $line['denomination-concise'] = $product['title'];
                $line['denomination-subjective'] = '';
                $line['description-concise'] = '';
                $line['description-complète'] = $product['body_html'];
                $line['url-article'] = '';
                // $line['url-photo'] = $image['src'];
                $line['marque'] = '';
                $line['genre'] = $product['product_type'];
                $line['classification'] = '';
                $line['id-reference'] = '';
                $line['disponibilite'] = '';
                $line['statut-de-disponibilite'] = '';
                $line['prix-ttc'] = $variant['price'];
                $line['ecotaxe'] = $variant['taxable'];
                $line['retractation'] = '';
                $line['quantite'] = $variant['inventory_quantity'];
                $line['delai-de-reappro'] = '';
                $line['delai-de-livraison'] = '';
                $line['unite-delai-de-livraison'] = 'H';
                $line['delai-d-expedition'] = '';
                $line['unite-delai-d-expedition'] = 'H';
                $line['frais-de-port'] = '';
                $line['description-livraison'] = '';
                $line['prix-public-generalement-constate'] = '';
                $line['mots-clefs'] = $product['tags'];
                $line['date-heure-de-debut-promotion'] = '';
                $line['date-heure-de-fin-promotion'] = '';
                $line['prix-ttc-avant-promotion'] = $variant['price'];
                $line['promotion'] = '';
                $line['pourcentage-de-la-remise'] = '';
                $line['prix-remise'] = $variant['compare_at_price'];
                $line['type-de-promotion'] = '';
                $line['garantie'] = '';
                $line['message-promotionnel'] = '';
                $line['couleur'] = $variant['option2'];
                $line['taille'] = $variant['option1'];
                $line['matiere'] = $variant['option3'];
                //$line[''] = '';
                fputcsv($fp ,$line, "|");

            // }
            }
        }
        fclose($fp);

        $exportProduct = new Exportproduct();
        $exportProduct->setCreatedAt($date);
        $exportProduct->setFile($csvFileName);

        $em->persist($exportProduct);
        $em->flush();
        die('End export successfully');

        /*return $this->render('exportproduct/index.html.twig', array(
            'exportProducts' => $exportProducts,
            ));*/
    }
}
