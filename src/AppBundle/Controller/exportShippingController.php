<?php

namespace AppBundle\Controller;

use AppBundle\Entity\exportShipping;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

use phpish\shopify;
/**
 * Exportshipping controller.
 *
 * @Route("exportshipping")
 */
class exportShippingController extends Controller
{
    /**
     * Lists all exportShipping entities.
     *
     * @Route("/", name="exportshipping_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $exportShipping = $em->getRepository('AppBundle:exportShipping')->findBy(
			 array(),
			 array('createdAt' => 'DESC')
		);
        return $this->render('exportshipping/index.html.twig', array(
            'exportShippings' => $exportShipping,
            ));
    }

    /**
     * Creates a new exportShipping entity.
     *
     * @Route("/export", name="exportshipping_new")
     * @Method({"GET", "POST"})
     */

    public function exportshipAction()
    {
        $em = $this->getDoctrine()->getManager();

		$shop = $this->get('session')->get('shop');
		$shopify = shopify\client(
			$shop['domain'],
			$this->container->getParameter('SHOPIFY_APP_API_KEY'),
			$shop['oauth_token']
		);
		$orders = $shopify('GET /admin/orders.json'/*, array('published_status'=>'published')*/);
                
        $data = $orders;

        $date = new \DateTime();
        $csvFileName = 'files/exports/shippings/'.$shop['name'].'-shipping-'.date('Y-m-d_H.i.s').'.csv';

        $fp = fopen($csvFileName, 'w');
        $header = array ("Numero de commande","Numero du produit","Reference produit market place","Numero de transaction","Market place","Date expedition","Nom transporteur","Numero dexpédition","Note","Url de suivi","Telephone transporteur","Quantite");

        fputcsv($fp,$header,"|");

        foreach($data as $order)
		{
		
			foreach($order['line_items'] as $line_item)
			{
			
				$line = array(
					'order_id'=> '',
					'product_id'=> '',
					'reference_produit_market_place'=> '',
					'numero_de_transaction'=> '',
					'market_place'=> '',
					'date_expedition'=> '',
					'nom_transporteur'=> '',
					'numero_expedition'=> '',
					'note'=> '',
					'tracking_url'=> '',
					'tel_transporteur'=> '',
					'quantity'=> '',
				);
				$line['order_id'] = $order['id']; 
				$line['product_id'] = $line_item['variant_id'];  
				$line['note'] = $order['note'];  
				$line['quantity']=$line_item['quantity'];
			
				foreach($order['shipping_lines'] as $shipping_line)
				{
					$line['tel_transporteur'] .= $shipping_line['phone'];
				}	
				
				foreach($order['fulfillments'] as $fulfillment)
				{
					if(isset($fulfillment['order_id']) && $fulfillment['order_id'] == $order['id'] )
					{
						$line['date_expedition'] = $fulfillment['created_at'];
						$line['numero_expedition'] = $fulfillment['id'];  
						$line['tracking_url'] = $fulfillment['tracking_url'];
					}
				}
				fputcsv($fp , $line, "|");
			}
		}
		fclose($fp);
				
		$exportShipping = new exportShipping();
		$exportShipping->setCreatedAt($date);
		$exportShipping->setFile($csvFileName);
		$em->persist($exportShipping);
		$em->flush();
		
        die('End export successfully'); 
	}
}