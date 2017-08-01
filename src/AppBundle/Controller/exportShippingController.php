<?php

namespace AppBundle\Controller;

use AppBundle\Entity\exportShipping;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

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

        $exportShipping = $em->getRepository('AppBundle:exportShipping')->findAll();

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

        $exportShippings = $em->getRepository('AppBundle:exportShipping')->findAll();

        $shop = "testshop";
        $json = '{ 
            "orders": [
            {
                "id": 450789469,
                "email": "bob.norman@hostmail.com",
                "closed_at": null,
                "created_at": "2008-01-10T11:00:00-05:00",
                "updated_at": "2008-01-10T11:00:00-05:00",
                "number": 1,
                "note": null,
                "token": "b1946ac92492d2347c6235b4d2611184",
                "gateway": "authorize_net",
                "test": false,
                "total_price": "409.94",
                "subtotal_price": "398.00",
                "total_weight": 0,
                "total_tax": "11.94",
                "taxes_included": false,
                "currency": "USD",
                "financial_status": "authorized",
                "confirmed": false,
                "total_discounts": "0.00",
                "total_line_items_price": "398.00",
                "cart_token": "68778783ad298f1c80c3bafcddeea02f",
                "buyer_accepts_marketing": false,
                "name": "#1001",
                "referring_site": "http:\/\/www.otherexample.com",
                "landing_site": "http:\/\/www.example.com?source=abc",
                "cancelled_at": null,
                "cancel_reason": null,
                "total_price_usd": "409.94",
                "checkout_token": "bd5a8aa1ecd019dd3520ff791ee3a24c",
                "reference": "fhwdgads",
                "user_id": null,
                "location_id": null,
                "source_identifier": "fhwdgads",
                "source_url": null,
                "processed_at": "2008-01-10T11:00:00-05:00",
                "device_id": null,
                "phone": "+557734881234",
                "customer_locale": null,
                "browser_ip": null,
                "landing_site_ref": "abc",
                "order_number": 1001,
                "discount_codes": [
                {
                    "code": "TENOFF",
                    "amount": "10.00",
                    "type": "percentage"
                }
                ],
                "note_attributes": [
                {
                    "name": "custom engraving",
                    "value": "Happy Birthday"
                },
                {
                    "name": "colour",
                    "value": "green"
                }
                ],
                "payment_gateway_names": [
                "bogus"
                ],
                "processing_method": "direct",
                "checkout_id": 901414060,
                "source_name": "web",
                "fulfillment_status": null,
                "tax_lines": [
                {
                    "title": "State Tax",
                    "price": "11.94",
                    "rate": 0.06
                }
                ],
                "tags": "",
                "contact_email": "bob.norman@hostmail.com",
                "order_status_url": "https:\/\/checkout.local\/690933842\/checkouts\/bd5a8aa1ecd019dd3520ff791ee3a24c\/thank_you_token",
                "line_items": [
                {
                    "id": 466157049,
                    "variant_id": 39072856,
                    "title": "IPod Nano - 8gb",
                    "quantity": 1,
                    "price": "199.00",
                    "grams": 200,
                    "sku": "IPOD2008GREEN",
                    "variant_title": "green",
                    "vendor": null,
                    "fulfillment_service": "manual",
                    "product_id": 632910392,
                    "requires_shipping": true,
                    "taxable": true,
                    "gift_card": false,
                    "name": "IPod Nano - 8gb - green",
                    "variant_inventory_management": "shopify",
                    "properties": [
                    {
                        "name": "Custom Engraving Front",
                        "value": "Happy Birthday"
                    },
                    {
                        "name": "Custom Engraving Back",
                        "value": "Merry Christmas"
                    }
                    ],
                    "product_exists": true,
                    "fulfillable_quantity": 1,
                    "total_discount": "0.00",
                    "fulfillment_status": null,
                    "tax_lines": [
                    {
                        "title": "State Tax",
                        "price": "3.98",
                        "rate": 0.06
                    }
                    ]
                },
                {
                    "id": 518995019,
                    "variant_id": 49148385,
                    "title": "IPod Nano - 8gb",
                    "quantity": 1,
                    "price": "199.00",
                    "grams": 200,
                    "sku": "IPOD2008RED",
                    "variant_title": "red",
                    "vendor": null,
                    "fulfillment_service": "manual",
                    "product_id": 632910392,
                    "requires_shipping": true,
                    "taxable": true,
                    "gift_card": false,
                    "name": "IPod Nano - 8gb - red",
                    "variant_inventory_management": "shopify",
                    "properties": [
                    ],
                    "product_exists": true,
                    "fulfillable_quantity": 1,
                    "total_discount": "0.00",
                    "fulfillment_status": null,
                    "tax_lines": [
                    {
                        "title": "State Tax",
                        "price": "3.98",
                        "rate": 0.06
                    }
                    ]
                },
                {
                    "id": 703073504,
                    "variant_id": 457924702,
                    "title": "IPod Nano - 8gb",
                    "quantity": 1,
                    "price": "199.00",
                    "grams": 200,
                    "sku": "IPOD2008BLACK",
                    "variant_title": "black",
                    "vendor": null,
                    "fulfillment_service": "manual",
                    "product_id": 632910392,
                    "requires_shipping": true,
                    "taxable": true,
                    "gift_card": false,
                    "name": "IPod Nano - 8gb - black",
                    "variant_inventory_management": "shopify",
                    "properties": [
                    ],
                    "product_exists": true,
                    "fulfillable_quantity": 1,
                    "total_discount": "0.00",
                    "fulfillment_status": null,
                    "tax_lines": [
                    {
                        "title": "State Tax",
                        "price": "3.98",
                        "rate": 0.06
                    }
                    ]
                }
                ],
                "shipping_lines": [
                {
                    "id": 369256396,
                    "title": "Free Shipping",
                    "price": "0.00",
                    "code": "Free Shipping",
                    "source": "shopify",
                    "phone": null,
                    "requested_fulfillment_service_id": null,
                    "delivery_category": null,
                    "carrier_identifier": null,
                    "tax_lines": [
                    ]
                }
                ],
                "billing_address": {
                    "first_name": "Bob",
                    "address1": "Chestnut Street 92",
                    "phone": "555-625-1199",
                    "city": "Louisville",
                    "zip": "40202",
                    "province": "Kentucky",
                    "country": "United States",
                    "last_name": "Norman",
                    "address2": "",
                    "company": null,
                    "latitude": 45.41634,
                    "longitude": -75.6868,
                    "name": "Bob Norman",
                    "country_code": "US",
                    "province_code": "KY"
                },
                "shipping_address": {
                    "first_name": "Bob",
                    "address1": "Chestnut Street 92",
                    "phone": "555-625-1199",
                    "city": "Louisville",
                    "zip": "40202",
                    "province": "Kentucky",
                    "country": "United States",
                    "last_name": "Norman",
                    "address2": "",
                    "company": null,
                    "latitude": 45.41634,
                    "longitude": -75.6868,
                    "name": "Bob Norman",
                    "country_code": "US",
                    "province_code": "KY"
                },
                "fulfillments": [
                {
                    "id": 255858046,
                    "order_id": 450789469,
                    "status": "failure",
                    "created_at": "2017-07-22T11:53:09-04:00",
                    "service": "manual",
                    "updated_at": "2017-07-22T11:53:09-04:00",
                    "tracking_company": null,
                    "shipment_status": null,
                    "tracking_number": "1Z2345",
                    "tracking_numbers": [
                    "1Z2345"
                    ],
                    "tracking_url": "http:\/\/wwwapps.ups.com\/etracking\/tracking.cgi?InquiryNumber1=1Z2345&TypeOfInquiryNumber=T&AcceptUPSLicenseAgreement=yes&submit=Track",
                    "tracking_urls": [
                    "http:\/\/wwwapps.ups.com\/etracking\/tracking.cgi?InquiryNumber1=1Z2345&TypeOfInquiryNumber=T&AcceptUPSLicenseAgreement=yes&submit=Track"
                    ],
                    "receipt": {
                        "testcase": true,
                        "authorization": "123456"
                    },
                    "line_items": [
                    {
                        "id": 466157049,
                        "variant_id": 39072856,
                        "title": "IPod Nano - 8gb",
                        "quantity": 1,
                        "price": "199.00",
                        "grams": 200,
                        "sku": "IPOD2008GREEN",
                        "variant_title": "green",
                        "vendor": null,
                        "fulfillment_service": "manual",
                        "product_id": 632910392,
                        "requires_shipping": true,
                        "taxable": true,
                        "gift_card": false,
                        "name": "IPod Nano - 8gb - green",
                        "variant_inventory_management": "shopify",
                        "properties": [
                        {
                            "name": "Custom Engraving Front",
                            "value": "Happy Birthday"
                        },
                        {
                            "name": "Custom Engraving Back",
                            "value": "Merry Christmas"
                        }
                        ],
                        "product_exists": true,
                        "fulfillable_quantity": 1,
                        "total_discount": "0.00",
                        "fulfillment_status": null,
                        "tax_lines": [
                        {
                            "title": "State Tax",
                            "price": "3.98",
                            "rate": 0.06
                        }
                        ]
                    }
                    ]
                }
                ],
                "client_details": {
                    "browser_ip": "0.0.0.0",
                    "accept_language": null,
                    "user_agent": null,
                    "session_hash": null,
                    "browser_width": null,
                    "browser_height": null
                },
                "refunds": [
                {
                    "id": 509562969,
                    "order_id": 450789469,
                    "created_at": "2017-07-22T11:53:09-04:00",
                    "note": "it broke during shipping",
                    "restock": true,
                    "user_id": 799407056,
                    "processed_at": "2017-07-22T11:53:09-04:00",
                    "refund_line_items": [
                    {
                        "id": 104689539,
                        "quantity": 1,
                        "line_item_id": 703073504,
                        "subtotal": 195.67,
                        "total_tax": 3.98,
                        "line_item": {
                            "id": 703073504,
                            "variant_id": 457924702,
                            "title": "IPod Nano - 8gb",
                            "quantity": 1,
                            "price": "199.00",
                            "grams": 200,
                            "sku": "IPOD2008BLACK",
                            "variant_title": "black",
                            "vendor": null,
                            "fulfillment_service": "manual",
                            "product_id": 632910392,
                            "requires_shipping": true,
                            "taxable": true,
                            "gift_card": false,
                            "name": "IPod Nano - 8gb - black",
                            "variant_inventory_management": "shopify",
                            "properties": [
                            ],
                            "product_exists": true,
                            "fulfillable_quantity": 1,
                            "total_discount": "0.00",
                            "fulfillment_status": null,
                            "tax_lines": [
                            {
                                "title": "State Tax",
                                "price": "3.98",
                                "rate": 0.06
                            }
                            ]
                        }
                    },
                    {
                        "id": 709875399,
                        "quantity": 1,
                        "line_item_id": 466157049,
                        "subtotal": 195.66,
                        "total_tax": 3.98,
                        "line_item": {
                            "id": 466157049,
                            "variant_id": 39072856,
                            "title": "IPod Nano - 8gb",
                            "quantity": 1,
                            "price": "199.00",
                            "grams": 200,
                            "sku": "IPOD2008GREEN",
                            "variant_title": "green",
                            "vendor": null,
                            "fulfillment_service": "manual",
                            "product_id": 632910392,
                            "requires_shipping": true,
                            "taxable": true,
                            "gift_card": false,
                            "name": "IPod Nano - 8gb - green",
                            "variant_inventory_management": "shopify",
                            "properties": [
                            {
                                "name": "Custom Engraving Front",
                                "value": "Happy Birthday"
                            },
                            {
                                "name": "Custom Engraving Back",
                                "value": "Merry Christmas"
                            }
                            ],
                            "product_exists": true,
                            "fulfillable_quantity": 1,
                            "total_discount": "0.00",
                            "fulfillment_status": null,
                            "tax_lines": [
                            {
                                "title": "State Tax",
                                "price": "3.98",
                                "rate": 0.06
                            }
                            ]
                        }
                    }
                    ],
                    "transactions": [
                    {
                        "id": 179259969,
                        "order_id": 450789469,
                        "amount": "209.00",
                        "kind": "refund",
                        "gateway": "bogus",
                        "status": "success",
                        "message": null,
                        "created_at": "2005-08-05T12:59:12-04:00",
                        "test": false,
                        "authorization": "authorization-key",
                        "currency": "USD",
                        "location_id": null,
                        "user_id": null,
                        "parent_id": 801038806,
                        "device_id": null,
                        "receipt": {},
                        "error_code": null,
                        "source_name": "web"
                    }
                    ],
                    "order_adjustments": [
                    ]
                }
                ],
                "payment_details": {
                    "credit_card_bin": null,
                    "avs_result_code": null


                }
            }
            ]
        }'
        ;
        $data = json_decode($json, true);

        $date = new \DateTime();
        $csvFileName = 'files/exports/shippings/'.$shop.'-shippings-'.date('Y-m-d H.i.s').'.csv';

        $fp = fopen($csvFileName, 'w');
        $header = array ("Numero de commande","Numero du produit","Reference produit market place","Numero de transaction","Market place","Date expedition","Nom transporteur","Numero dexpédition","Note","Url de suivi","Telephone transporteur","Quantite");

        fputcsv($fp,$header,"|");

        foreach($data['orders'] as $order)




         foreach($order['shipping_lines'] as $shipping_line)

            foreach ($order['refunds'] as $refunds)
                foreach ($refunds['refund_line_items'] as $refund_line_items)
                    foreach($refunds['transactions'] as $transaction)
                       foreach($order['line_items'] as $line_item)
                        foreach($order['fulfillments'] as $fulfillment)



                           // foreach($order['billing_address'] as $billing_addres)

                        {






  //  foreach($data['fulfillments'] as $fulfillment)

   // {

       //$datafile = file_get_contents($csvFileName);
       //file_put_contents($csvFileName, $header.$datafile); 

       //foreach($fulfillment['line_items'] as $line_item){


       // foreach($line_item['properties'] as $propertie)

           //foreach($line_item['tax_lines'] as $tax_line)



                          $line = array();

                          $line['order_id'] = $order['id'];
                          $line['product_id'] = $line_item['id'];
                          $line['Reference produit market place'] = '';
                          $line['Numero de transaction'] = $transaction['id'];
                          $line['Market place'] = '';
                          $line['Date expédition'] = $fulfillment['created_at'];
                          $line['Nom transporteur'] = '';
                          $line['Numéro d’expédition'] = $fulfillment['id'];  
                          $line['Note'] = $order['note'];  
                          $line['tracking_url'] = $fulfillment['tracking_url'];
                          $line['Téléphone transporteur'] =  $order['phone'];  
                          $line['quantity']=$line_item['quantity'];





                          echo '<pre>';
                          print_r(($line));

                          echo '</pre>';


                          fputcsv($fp , $line, "|");

                      }
                      

                      
                      fclose($fp);





                      $exportShipping = new exportShipping();
                      $exportShipping->setCreatedAt($date);
                      $exportShipping->setFile($csvFileName);

                      $em->persist($exportShipping);
                      $em->flush();
                      die('-----------------');





                  }


              }




   /* public function newAction(Request $request)
    {
        $exportShipping = new Exportshipping();
        $form = $this->createForm('AppBundle\Form\exportShippingType', $exportShipping);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($exportShipping);
            $em->flush();

            return $this->redirectToRoute('exportshipping_show', array('id' => $exportShipping->getId()));
        }

        return $this->render('exportshipping/new.html.twig', array(
            'exportShipping' => $exportShipping,
            'form' => $form->createView(),
        ));
    }/*

    /**
     * Finds and displays a exportShipping entity.
     *
     * @Route("/{id}", name="exportshipping_show")
     * @Method("GET")
     */
 /*   public function showAction(exportShipping $exportShipping)
    {
        $deleteForm = $this->createDeleteForm($exportShipping);

        return $this->render('exportshipping/show.html.twig', array(
            'exportShipping' => $exportShipping,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /*
     * Displays a form to edit an existing exportShipping entity.
     *
     * @Route("/{id}/edit", name="exportshipping_edit")
     * @Method({"GET", "POST"})
 /*  
   *
    public function editAction(Request $request, exportShipping $exportShipping)
    {
        $deleteForm = $this->createDeleteForm($exportShipping);
        $editForm = $this->createForm('AppBundle\Form\exportShippingType', $exportShipping);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('exportshipping_edit', array('id' => $exportShipping->getId()));
        }

        return $this->render('exportshipping/edit.html.twig', array(
            'exportShipping' => $exportShipping,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }*/

    /**
     * Deletes a exportShipping entity.
     *
     * @Route("/{id}", name="exportshipping_delete")
     * @Method("DELETE")
     */
 /*   public function deleteAction(Request $request, exportShipping $exportShipping)
    {
        $form = $this->createDeleteForm($exportShipping);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($exportShipping);
            $em->flush();
        }

        return $this->redirectToRoute('exportshipping_index');
    }*/

    /*
     * Creates a form to delete a exportShipping entity.
     *
     * @param exportShipping $exportShipping The exportShipping entity
     *
     * @return \Symfony\Component\Form\Form The form
     */



/*   private function createDeleteForm(exportShipping $exportShipping)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('exportshipping_delete', array('id' => $exportShipping->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
*/