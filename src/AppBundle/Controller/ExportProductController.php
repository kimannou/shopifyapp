<?php

namespace AppBundle\Controller;

use AppBundle\Entity\ExportProduct;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

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

        $exportProducts = $em->getRepository('AppBundle:ExportProduct')->findAll();

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

        $exportProducts = $em->getRepository('AppBundle:ExportProduct')->findAll();

        $shop = "testshop";
        $json = '{
            "products": [
            {
                "id": 632910392,
                "title": "IPod Nano - 8GB",
                "body_html": "<p>It s the small iPod with one very big idea: Video. Now the worlds most popular music player, available in 4GB and 8GB models, lets you enjoy TV shows, movies, video podcasts, and more. The larger, brighter display means amazing picture quality. In six eye-catching colors, iPod nano is stunning all around. And with models starting at just $149, little speaks volumes.<\/p>",
                "vendor": "Apple",
                "product_type": "Cult Products",
                "created_at": "2017-07-24T19:09:43-04:00",
                "handle": "ipod-nano",
                "updated_at": "2017-07-24T19:09:43-04:00",
                "published_at": "2007-12-31T19:00:00-05:00",
                "template_suffix": null,
                "published_scope": "web",
                "tags": "Emotive, Flash Memory, MP3, Music",
                "variants": [
                {
                    "id": 808950810,
                    "product_id": 632910392,
                    "title": "Pink",
                    "price": "199.00",
                    "sku": "IPOD2008PINK",
                    "position": 1,
                    "grams": 567,
                    "inventory_policy": "continue",
                    "compare_at_price": null,
                    "fulfillment_service": "manual",
                    "inventory_management": "shopify",
                    "option1": "Pink",
                    "option2": null,
                    "option3": null,
                    "created_at": "2017-07-24T19:09:43-04:00",
                    "updated_at": "2017-07-24T19:09:43-04:00",
                    "taxable": true,
                    "barcode": "1234_pink",
                    "image_id": 562641783,
                    "inventory_quantity": 10,
                    "weight": 1.25,
                    "weight_unit": "lb",
                    "old_inventory_quantity": 10,
                    "requires_shipping": true
                },
                {
                    "id": 49148385,
                    "product_id": 632910392,
                    "title": "Red",
                    "price": "199.00",
                    "sku": "IPOD2008RED",
                    "position": 2,
                    "grams": 567,
                    "inventory_policy": "continue",
                    "compare_at_price": null,
                    "fulfillment_service": "manual",
                    "inventory_management": "shopify",
                    "option1": "Red",
                    "option2": null,
                    "option3": null,
                    "created_at": "2017-07-24T19:09:43-04:00",
                    "updated_at": "2017-07-24T19:09:43-04:00",
                    "taxable": true,
                    "barcode": "1234_red",
                    "image_id": null,
                    "inventory_quantity": 20,
                    "weight": 1.25,
                    "weight_unit": "lb",
                    "old_inventory_quantity": 20,
                    "requires_shipping": true
                },
                {
                    "id": 39072856,
                    "product_id": 632910392,
                    "title": "Green",
                    "price": "199.00",
                    "sku": "IPOD2008GREEN",
                    "position": 3,
                    "grams": 567,
                    "inventory_policy": "continue",
                    "compare_at_price": null,
                    "fulfillment_service": "manual",
                    "inventory_management": "shopify",
                    "option1": "Green",
                    "option2": null,
                    "option3": null,
                    "created_at": "2017-07-24T19:09:43-04:00",
                    "updated_at": "2017-07-24T19:09:43-04:00",
                    "taxable": true,
                    "barcode": "1234_green",
                    "image_id": null,
                    "inventory_quantity": 30,
                    "weight": 1.25,
                    "weight_unit": "lb",
                    "old_inventory_quantity": 30,
                    "requires_shipping": true
                },
                {
                    "id": 457924702,
                    "product_id": 632910392,
                    "title": "Black",
                    "price": "199.00",
                    "sku": "IPOD2008BLACK",
                    "position": 4,
                    "grams": 567,
                    "inventory_policy": "continue",
                    "compare_at_price": null,
                    "fulfillment_service": "manual",
                    "inventory_management": "shopify",
                    "option1": "Black",
                    "option2": null,
                    "option3": null,
                    "created_at": "2017-07-24T19:09:43-04:00",
                    "updated_at": "2017-07-24T19:09:43-04:00",
                    "taxable": true,
                    "barcode": "1234_black",
                    "image_id": null,
                    "inventory_quantity": 40,
                    "weight": 1.25,
                    "weight_unit": "lb",
                    "old_inventory_quantity": 40,
                    "requires_shipping": true
                }
                ],
                "options": [
                {
                    "id": 594680422,
                    "product_id": 632910392,
                    "name": "Color",
                    "position": 1,
                    "values": [
                    "Pink",
                    "Red",
                    "Green",
                    "Black"
                    ]
                }
                ],
                "images": [
                {
                    "id": 850703190,
                    "product_id": 632910392,
                    "position": 1,
                    "created_at": "2017-07-24T19:09:43-04:00",
                    "updated_at": "2017-07-24T19:09:43-04:00",
                    "width": 123,
                    "height": 456,
                    "src": "https:\/\/cdn.shopify.com\/s\/files\/1\/0006\/9093\/3842\/products\/ipod-nano.png?v=1500937783",
                    "variant_ids": [
                    ]
                },
                {
                    "id": 562641783,
                    "product_id": 632910392,
                    "position": 2,
                    "created_at": "2017-07-24T19:09:43-04:00",
                    "updated_at": "2017-07-24T19:09:43-04:00",
                    "width": 123,
                    "height": 456,
                    "src": "https:\/\/cdn.shopify.com\/s\/files\/1\/0006\/9093\/3842\/products\/ipod-nano-2.png?v=1500937783",
                    "variant_ids": [
                    808950810
                    ]
                }
                ],
                "image": {
                    "id": 850703190,
                    "product_id": 632910392,
                    "position": 1,
                    "created_at": "2017-07-24T19:09:43-04:00",
                    "updated_at": "2017-07-24T19:09:43-04:00",
                    "width": 123,
                    "height": 456,
                    "src": "https:\/\/cdn.shopify.com\/s\/files\/1\/0006\/9093\/3842\/products\/ipod-nano.png?v=1500937783",
                    "variant_ids": [
                    ]
                }
            },
            {
                "id": 921728736,
                "title": "IPod Touch 8GB",
                "body_html": "<p>The iPod Touch has the iPhones multi-touch interface, with a physical home button off the touch screen. The home screen has a list of buttons for the available applications.<\/p>",
                "vendor": "Apple",
                "product_type": "Cult Products",
                "created_at": "2017-07-24T19:09:43-04:00",
                "handle": "ipod-touch",
                "updated_at": "2017-07-24T19:09:43-04:00",
                "published_at": "2008-09-25T20:00:00-04:00",
                "template_suffix": null,
                "published_scope": "global",
                "tags": "",
                "variants": [
                {
                    "id": 447654529,
                    "product_id": 921728736,
                    "title": "Black",
                    "price": "199.00",
                    "sku": "IPOD2009BLACK",
                    "position": 1,
                    "grams": 567,
                    "inventory_policy": "continue",
                    "compare_at_price": null,
                    "fulfillment_service": "manual",
                    "inventory_management": "shopify",
                    "option1": "Black",
                    "option2": null,
                    "option3": null,
                    "created_at": "2017-07-24T19:09:43-04:00",
                    "updated_at": "2017-07-24T19:09:43-04:00",
                    "taxable": true,
                    "barcode": "1234_black",
                    "image_id": null,
                    "inventory_quantity": 13,
                    "weight": 1.25,
                    "weight_unit": "lb",
                    "old_inventory_quantity": 13,
                    "requires_shipping": true
                }
                ],
                "options": [
                {
                    "id": 891236591,
                    "product_id": 921728736,
                    "name": "Title",
                    "position": 1,
                    "values": [
                    "Black"
                    ]
                }
                ],
                "images": [
                ],
                "image": null
            }
            ]
        }'
        ;
        $data = json_decode($json, true);

        $date = new \DateTime();
        $csvFileName = 'files/exports/products/'.$shop.'-products-'.date('Y-m-d H.i.s').'.csv';

        $fp = fopen($csvFileName, 'w');



        foreach($data['products'] as $product)
        {


            foreach($product['variants'] as $variant)

             foreach($product['images'] as $image)
             {

                $line = array();
                $line['product_id'] = $product['id'];
                $line['porduct_title'] = $product['title'];
                $line['variant_title'] = $variant['title'];
                $line['porduct_sku'] = $variant['sku'];
                $line['image-id'] = $image['id'];
                $line['src-image'] = $image['src'];

                echo '<pre>';
                print_r(($line));

                echo '</pre>';



                fputcsv($fp , $line, "|");

            }
        }
        fclose($fp);

        $exportProduct = new Exportproduct();
        $exportProduct->setCreatedAt($date);
        $exportProduct->setFile($csvFileName);

        $em->persist($exportProduct);
        $em->flush();
        die('-----------------');

        /*return $this->render('exportproduct/index.html.twig', array(
            'exportProducts' => $exportProducts,
            ));*/
    }
}
