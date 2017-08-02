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
   "products":[
      {
         "id":8553140997,
         "title":"Adaptive Awesome Steel Mouse - Concrete white",
         "body_html":"Autem quidem dolores maiores. Quos quaerat illum omnis eos est nam maiores. Consequuntur sit totam sit explicabo delectus. Sit aut mollitia facilis qui aliquam ea accusantium eaque ratione. Enim ab est est veritatis deserunt. Quidem et quae aut eveniet.",
         "vendor":"Feil - Jaskolski",
         "product_type":"Books",
         "created_at":"2017-07-19T06:46:50-04:00",
         "handle":"adaptive-awesome-steel-mouse-concrete-white",
         "updated_at":"2017-07-19T06:46:50-04:00",
         "published_at":"2017-07-19T06:46:50-04:00",
         "template_suffix":null,
         "published_scope":"global",
         "tags":"data-generator",
         "variants":[
            {
               "id":35723045061,
               "product_id":8553140997,
               "title":"Rubber mint green - i2g-7zk",
               "price":"79.00",
               "sku":"",
               "position":1,
               "grams":468,
               "inventory_policy":"deny",
               "compare_at_price":null,
               "fulfillment_service":"manual",
               "inventory_management":"shopify",
               "option1":"Rubber mint green - i2g-7zk",
               "option2":null,
               "option3":null,
               "created_at":"2017-07-19T06:46:50-04:00",
               "updated_at":"2017-07-19T06:46:50-04:00",
               "taxable":true,
               "barcode":null,
               "image_id":null,
               "inventory_quantity":5,
               "weight":468,
               "weight_unit":"g",
               "old_inventory_quantity":5,
               "requires_shipping":true
            }
         ],
         "options":[
            {
               "id":10451194949,
               "product_id":8553140997,
               "name":"Title",
               "position":1,
               "values":[
                  "Rubber mint green - i2g-7zk"
               ]
            }
         ],
         "images":[

         ],
         "image":null
      },
      {
         "id":8553167365,
         "title":"Centralized Small Metal Pants - Rubber yellow",
         "body_html":"Ducimus et tenetur. Ea hic perspiciatis soluta quae. Asperiores fuga iste. Ab accusamus nemo. Expedita nihil quisquam ad. Et dolores quaerat ut ipsum saepe magnam aut quaerat maxime.",
         "vendor":"Johns, Jast and Koepp",
         "product_type":"Computers",
         "created_at":"2017-07-19T06:48:14-04:00",
         "handle":"centralized-small-metal-pants-rubber-yellow",
         "updated_at":"2017-07-19T06:48:14-04:00",
         "published_at":"2017-07-19T06:48:14-04:00",
         "template_suffix":null,
         "published_scope":"global",
         "tags":"data-generator",
         "variants":[
            {
               "id":35723256133,
               "product_id":8553167365,
               "title":"Plastic violet - bka-tio",
               "price":"116.00",
               "sku":"",
               "position":1,
               "grams":31,
               "inventory_policy":"deny",
               "compare_at_price":null,
               "fulfillment_service":"manual",
               "inventory_management":"shopify",
               "option1":"Plastic violet - bka-tio",
               "option2":null,
               "option3":null,
               "created_at":"2017-07-19T06:48:14-04:00",
               "updated_at":"2017-07-19T06:48:14-04:00",
               "taxable":true,
               "barcode":null,
               "image_id":null,
               "inventory_quantity":4,
               "weight":31,
               "weight_unit":"g",
               "old_inventory_quantity":4,
               "requires_shipping":true
            }
         ],
         "options":[
            {
               "id":10451226117,
               "product_id":8553167365,
               "name":"Title",
               "position":1,
               "values":[
                  "Plastic violet - bka-tio"
               ]
            }
         ],
         "images":[

         ],
         "image":null
      },
      {
         "id":8553144901,
         "title":"Cloned Generic Soft Tuna",
         "body_html":"Ducimus modi quaerat. Sed rerum quae quibusdam possimus officia blanditiis non. Qui consequatur dolore quae officia quas mollitia dolores.",
         "vendor":"Heller - Kuvalis",
         "product_type":"Clothing",
         "created_at":"2017-07-19T06:47:02-04:00",
         "handle":"cloned-generic-soft-tuna",
         "updated_at":"2017-07-19T06:47:02-04:00",
         "published_at":"2017-07-19T06:47:02-04:00",
         "template_suffix":null,
         "published_scope":"global",
         "tags":"data-generator",
         "variants":[
            {
               "id":35723075205,
               "product_id":8553144901,
               "title":"Default Title",
               "price":"0.00",
               "sku":"",
               "position":1,
               "grams":0,
               "inventory_policy":"deny",
               "compare_at_price":null,
               "fulfillment_service":"manual",
               "inventory_management":null,
               "option1":"Default Title",
               "option2":null,
               "option3":null,
               "created_at":"2017-07-19T06:47:02-04:00",
               "updated_at":"2017-07-19T06:47:02-04:00",
               "taxable":true,
               "barcode":null,
               "image_id":null,
               "inventory_quantity":1,
               "weight":0.0,
               "weight_unit":"kg",
               "old_inventory_quantity":1,
               "requires_shipping":true
            }
         ],
         "options":[
            {
               "id":10451199749,
               "product_id":8553144901,
               "name":"Title",
               "position":1,
               "values":[
                  "Default Title"
               ]
            }
         ],
         "images":[

         ],
         "image":null
      },
      {
         "id":8553143749,
         "title":"Cross-platform Gorgeous Frozen Chips - Wooden tan",
         "body_html":"Non accusamus amet qui reprehenderit autem ullam esse eum nam. Aut molestias delectus eveniet occaecati. Eum occaecati enim iure dolores possimus. Non corporis quae inventore numquam. At est corrupti deleniti in. Quaerat nihil omnis assumenda rem provident deleniti.",
         "vendor":"Brekke, Toy and Reilly",
         "product_type":"Automotive",
         "created_at":"2017-07-19T06:46:58-04:00",
         "handle":"cross-platform-gorgeous-frozen-chips-wooden-tan",
         "updated_at":"2017-07-19T06:46:58-04:00",
         "published_at":"2017-07-19T06:46:58-04:00",
         "template_suffix":null,
         "published_scope":"global",
         "tags":"data-generator",
         "variants":[
            {
               "id":35723066629,
               "product_id":8553143749,
               "title":"Concrete green - 0yk-lcd",
               "price":"221.00",
               "sku":"",
               "position":1,
               "grams":0,
               "inventory_policy":"deny",
               "compare_at_price":null,
               "fulfillment_service":"manual",
               "inventory_management":"shopify",
               "option1":"Concrete green - 0yk-lcd",
               "option2":null,
               "option3":null,
               "created_at":"2017-07-19T06:46:58-04:00",
               "updated_at":"2017-07-19T06:46:58-04:00",
               "taxable":true,
               "barcode":null,
               "image_id":null,
               "inventory_quantity":30,
               "weight":0,
               "weight_unit":"g",
               "old_inventory_quantity":30,
               "requires_shipping":false
            },
            {
               "id":35723066757,
               "product_id":8553143749,
               "title":"Metal yellow - jgd-eyf",
               "price":"99.00",
               "sku":"",
               "position":2,
               "grams":0,
               "inventory_policy":"deny",
               "compare_at_price":null,
               "fulfillment_service":"manual",
               "inventory_management":"shopify",
               "option1":"Metal yellow - jgd-eyf",
               "option2":null,
               "option3":null,
               "created_at":"2017-07-19T06:46:58-04:00",
               "updated_at":"2017-07-19T06:46:58-04:00",
               "taxable":true,
               "barcode":null,
               "image_id":null,
               "inventory_quantity":10,
               "weight":0,
               "weight_unit":"g",
               "old_inventory_quantity":10,
               "requires_shipping":false
            }
         ],
         "options":[
            {
               "id":10451198341,
               "product_id":8553143749,
               "name":"Title",
               "position":1,
               "values":[
                  "Concrete green - 0yk-lcd",
                  "Metal yellow - jgd-eyf"
               ]
            }
         ],
         "images":[
            {
               "id":23262297669,
               "product_id":8553143749,
               "position":1,
               "created_at":"2017-07-19T06:46:58-04:00",
               "updated_at":"2017-07-19T06:46:58-04:00",
               "width":4096,
               "height":2731,
               "src":"https:\/\/cdn.shopify.com\/s\/files\/1\/2199\/5191\/products\/dog-costume.jpg?v=1500461218",
               "variant_ids":[

               ]
            }
         ],
         "image":{
            "id":23262297669,
            "product_id":8553143749,
            "position":1,
            "created_at":"2017-07-19T06:46:58-04:00",
            "updated_at":"2017-07-19T06:46:58-04:00",
            "width":4096,
            "height":2731,
            "src":"https:\/\/cdn.shopify.com\/s\/files\/1\/2199\/5191\/products\/dog-costume.jpg?v=1500461218",
            "variant_ids":[

            ]
         }
      },
      {
         "id":8553161093,
         "title":"Cross-platform Incredible Cotton Salad",
         "body_html":"Praesentium molestiae inventore cumque repellat quia sed qui inventore omnis. Eligendi blanditiis numquam dolor ipsum. Ex voluptatem eum. Voluptate beatae aut nihil nobis omnis.",
         "vendor":"Krajcik and Sons",
         "product_type":"Games",
         "created_at":"2017-07-19T06:47:56-04:00",
         "handle":"cross-platform-incredible-cotton-salad",
         "updated_at":"2017-07-19T06:47:56-04:00",
         "published_at":"2017-07-19T06:47:56-04:00",
         "template_suffix":null,
         "published_scope":"global",
         "tags":"data-generator",
         "variants":[
            {
               "id":35723203269,
               "product_id":8553161093,
               "title":"Default Title",
               "price":"0.00",
               "sku":"",
               "position":1,
               "grams":0,
               "inventory_policy":"deny",
               "compare_at_price":null,
               "fulfillment_service":"manual",
               "inventory_management":null,
               "option1":"Default Title",
               "option2":null,
               "option3":null,
               "created_at":"2017-07-19T06:47:56-04:00",
               "updated_at":"2017-07-19T06:47:56-04:00",
               "taxable":true,
               "barcode":null,
               "image_id":null,
               "inventory_quantity":1,
               "weight":0.0,
               "weight_unit":"kg",
               "old_inventory_quantity":1,
               "requires_shipping":true
            }
         ],
         "options":[
            {
               "id":10451218757,
               "product_id":8553161093,
               "name":"Title",
               "position":1,
               "values":[
                  "Default Title"
               ]
            }
         ],
         "images":[
            {
               "id":23262313541,
               "product_id":8553161093,
               "position":1,
               "created_at":"2017-07-19T06:47:56-04:00",
               "updated_at":"2017-07-19T06:47:56-04:00",
               "width":4096,
               "height":2731,
               "src":"https:\/\/cdn.shopify.com\/s\/files\/1\/2199\/5191\/products\/vertigo-fire-escape.jpg?v=1500461276",
               "variant_ids":[

               ]
            }
         ],
         "image":{
            "id":23262313541,
            "product_id":8553161093,
            "position":1,
            "created_at":"2017-07-19T06:47:56-04:00",
            "updated_at":"2017-07-19T06:47:56-04:00",
            "width":4096,
            "height":2731,
            "src":"https:\/\/cdn.shopify.com\/s\/files\/1\/2199\/5191\/products\/vertigo-fire-escape.jpg?v=1500461276",
            "variant_ids":[

            ]
         }
      },
      {
         "id":8553158725,
         "title":"Decentralized Incredible Plastic Chips - Soft indigo",
         "body_html":"Dolorem nam voluptas error. Et quis incidunt illum aut officiis ut saepe cupiditate. Vel omnis voluptatem fugit sint impedit reiciendis saepe quia sit. Ut velit voluptas qui dolore maxime quibusdam. Tenetur velit repellendus praesentium. Rerum atque dolorem accusantium vel aut.",
         "vendor":"VonRueden LLC",
         "product_type":"Health",
         "created_at":"2017-07-19T06:47:47-04:00",
         "handle":"decentralized-incredible-plastic-chips-soft-indigo",
         "updated_at":"2017-07-19T06:47:47-04:00",
         "published_at":"2017-07-19T06:47:47-04:00",
         "template_suffix":null,
         "published_scope":"global",
         "tags":"data-generator",
         "variants":[
            {
               "id":35723167621,
               "product_id":8553158725,
               "title":"Soft azure - nd9-gg8",
               "price":"37.00",
               "sku":"",
               "position":1,
               "grams":276,
               "inventory_policy":"deny",
               "compare_at_price":null,
               "fulfillment_service":"manual",
               "inventory_management":"shopify",
               "option1":"Soft azure - nd9-gg8",
               "option2":null,
               "option3":null,
               "created_at":"2017-07-19T06:47:47-04:00",
               "updated_at":"2017-07-19T06:47:47-04:00",
               "taxable":true,
               "barcode":null,
               "image_id":null,
               "inventory_quantity":49,
               "weight":276,
               "weight_unit":"g",
               "old_inventory_quantity":49,
               "requires_shipping":true
            }
         ],
         "options":[
            {
               "id":10451215621,
               "product_id":8553158725,
               "name":"Title",
               "position":1,
               "values":[
                  "Soft azure - nd9-gg8"
               ]
            }
         ],
         "images":[

         ],
         "image":null
      },
      {
         "id":8553151045,
         "title":"Devolved Self-enabling Ergonomic Metal Pizza",
         "body_html":"Id vel molestias rerum quibusdam ut qui commodi. Nihil ipsum maxime id. Alias magni dolor ex. Soluta quod qui.",
         "vendor":"Johns Group",
         "product_type":"Industrial",
         "created_at":"2017-07-19T06:47:21-04:00",
         "handle":"devolved-self-enabling-ergonomic-metal-pizza",
         "updated_at":"2017-07-19T06:47:21-04:00",
         "published_at":"2017-07-19T06:47:21-04:00",
         "template_suffix":null,
         "published_scope":"global",
         "tags":"data-generator",
         "variants":[
            {
               "id":35723130053,
               "product_id":8553151045,
               "title":"Rubber ivory - 42n-lqo",
               "price":"156.00",
               "sku":"",
               "position":1,
               "grams":69,
               "inventory_policy":"deny",
               "compare_at_price":null,
               "fulfillment_service":"manual",
               "inventory_management":"shopify",
               "option1":"Rubber ivory - 42n-lqo",
               "option2":null,
               "option3":null,
               "created_at":"2017-07-19T06:47:21-04:00",
               "updated_at":"2017-07-19T06:47:21-04:00",
               "taxable":true,
               "barcode":null,
               "image_id":null,
               "inventory_quantity":27,
               "weight":69,
               "weight_unit":"g",
               "old_inventory_quantity":27,
               "requires_shipping":true
            },
            {
               "id":35723130181,
               "product_id":8553151045,
               "title":"Wooden mint green - 0je-u4j",
               "price":"273.00",
               "sku":"",
               "position":2,
               "grams":157,
               "inventory_policy":"deny",
               "compare_at_price":null,
               "fulfillment_service":"manual",
               "inventory_management":"shopify",
               "option1":"Wooden mint green - 0je-u4j",
               "option2":null,
               "option3":null,
               "created_at":"2017-07-19T06:47:21-04:00",
               "updated_at":"2017-07-19T06:47:21-04:00",
               "taxable":true,
               "barcode":null,
               "image_id":null,
               "inventory_quantity":0,
               "weight":157,
               "weight_unit":"g",
               "old_inventory_quantity":0,
               "requires_shipping":true
            },
            {
               "id":35723130373,
               "product_id":8553151045,
               "title":"Steel indigo - 0hn-o8b",
               "price":"248.00",
               "sku":"",
               "position":3,
               "grams":36,
               "inventory_policy":"deny",
               "compare_at_price":null,
               "fulfillment_service":"manual",
               "inventory_management":"shopify",
               "option1":"Steel indigo - 0hn-o8b",
               "option2":null,
               "option3":null,
               "created_at":"2017-07-19T06:47:21-04:00",
               "updated_at":"2017-07-19T06:47:21-04:00",
               "taxable":true,
               "barcode":null,
               "image_id":null,
               "inventory_quantity":12,
               "weight":36,
               "weight_unit":"g",
               "old_inventory_quantity":12,
               "requires_shipping":true
            }
         ],
         "options":[
            {
               "id":10451207109,
               "product_id":8553151045,
               "name":"Title",
               "position":1,
               "values":[
                  "Rubber ivory - 42n-lqo",
                  "Wooden mint green - 0je-u4j",
                  "Steel indigo - 0hn-o8b"
               ]
            }
         ],
         "images":[
            {
               "id":23262304261,
               "product_id":8553151045,
               "position":1,
               "created_at":"2017-07-19T06:47:21-04:00",
               "updated_at":"2017-07-19T06:47:21-04:00",
               "width":4096,
               "height":2731,
               "src":"https:\/\/cdn.shopify.com\/s\/files\/1\/2199\/5191\/products\/patterned-iphone-7-case.jpg?v=1500461241",
               "variant_ids":[

               ]
            }
         ],
         "image":{
            "id":23262304261,
            "product_id":8553151045,
            "position":1,
            "created_at":"2017-07-19T06:47:21-04:00",
            "updated_at":"2017-07-19T06:47:21-04:00",
            "width":4096,
            "height":2731,
            "src":"https:\/\/cdn.shopify.com\/s\/files\/1\/2199\/5191\/products\/patterned-iphone-7-case.jpg?v=1500461241",
            "variant_ids":[

            ]
         }
      },
      {
         "id":8553141701,
         "title":"Distributed Rustic Fresh Salad - Steel orange",
         "body_html":"Qui rem delectus. Nesciunt aut ratione velit. Ut magnam ipsum sed minus eius non nulla.",
         "vendor":"Kohler, Bailey and Ebert",
         "product_type":"Clothing",
         "created_at":"2017-07-19T06:46:52-04:00",
         "handle":"distributed-rustic-fresh-salad-steel-orange",
         "updated_at":"2017-07-19T06:46:52-04:00",
         "published_at":"2017-07-19T06:46:52-04:00",
         "template_suffix":null,
         "published_scope":"global",
         "tags":"data-generator",
         "variants":[
            {
               "id":35723053509,
               "product_id":8553141701,
               "title":"Wooden maroon - oen-5hv",
               "price":"51.00",
               "sku":"",
               "position":1,
               "grams":220,
               "inventory_policy":"deny",
               "compare_at_price":null,
               "fulfillment_service":"manual",
               "inventory_management":"shopify",
               "option1":"Wooden maroon - oen-5hv",
               "option2":null,
               "option3":null,
               "created_at":"2017-07-19T06:46:52-04:00",
               "updated_at":"2017-07-19T06:46:52-04:00",
               "taxable":true,
               "barcode":null,
               "image_id":null,
               "inventory_quantity":28,
               "weight":220,
               "weight_unit":"g",
               "old_inventory_quantity":28,
               "requires_shipping":true
            }
         ],
         "options":[
            {
               "id":10451195973,
               "product_id":8553141701,
               "name":"Title",
               "position":1,
               "values":[
                  "Wooden maroon - oen-5hv"
               ]
            }
         ],
         "images":[

         ],
         "image":null
      },
      {
         "id":8553166853,
         "title":"Enhanced Incredible Soft Chips - Rubber lime",
         "body_html":"Ut iusto consequatur debitis ad voluptate facere velit. Voluptatem dignissimos ipsam odio in adipisci. Quibusdam est consequatur ab. Cumque tempora illo similique recusandae quo tempora et iusto.",
         "vendor":"Goyette, Gutmann and Stanton",
         "product_type":"Health",
         "created_at":"2017-07-19T06:48:13-04:00",
         "handle":"enhanced-incredible-soft-chips-rubber-lime",
         "updated_at":"2017-07-19T06:48:13-04:00",
         "published_at":"2017-07-19T06:48:13-04:00",
         "template_suffix":null,
         "published_scope":"global",
         "tags":"data-generator",
         "variants":[
            {
               "id":35723251909,
               "product_id":8553166853,
               "title":"Steel orange - 3bn-g3x",
               "price":"136.00",
               "sku":"",
               "position":1,
               "grams":378,
               "inventory_policy":"deny",
               "compare_at_price":null,
               "fulfillment_service":"manual",
               "inventory_management":"shopify",
               "option1":"Steel orange - 3bn-g3x",
               "option2":null,
               "option3":null,
               "created_at":"2017-07-19T06:48:13-04:00",
               "updated_at":"2017-07-19T06:48:13-04:00",
               "taxable":true,
               "barcode":null,
               "image_id":null,
               "inventory_quantity":32,
               "weight":378,
               "weight_unit":"g",
               "old_inventory_quantity":32,
               "requires_shipping":true
            },
            {
               "id":35723252101,
               "product_id":8553166853,
               "title":"Steel lime - r0b-b42",
               "price":"140.00",
               "sku":"",
               "position":2,
               "grams":0,
               "inventory_policy":"deny",
               "compare_at_price":null,
               "fulfillment_service":"manual",
               "inventory_management":"shopify",
               "option1":"Steel lime - r0b-b42",
               "option2":null,
               "option3":null,
               "created_at":"2017-07-19T06:48:13-04:00",
               "updated_at":"2017-07-19T06:48:13-04:00",
               "taxable":true,
               "barcode":null,
               "image_id":null,
               "inventory_quantity":4,
               "weight":0,
               "weight_unit":"g",
               "old_inventory_quantity":4,
               "requires_shipping":false
            },
            {
               "id":35723252229,
               "product_id":8553166853,
               "title":"Plastic salmon - dfw-izh",
               "price":"24.00",
               "sku":"",
               "position":3,
               "grams":0,
               "inventory_policy":"deny",
               "compare_at_price":null,
               "fulfillment_service":"manual",
               "inventory_management":"shopify",
               "option1":"Plastic salmon - dfw-izh",
               "option2":null,
               "option3":null,
               "created_at":"2017-07-19T06:48:13-04:00",
               "updated_at":"2017-07-19T06:48:13-04:00",
               "taxable":true,
               "barcode":null,
               "image_id":null,
               "inventory_quantity":44,
               "weight":0,
               "weight_unit":"g",
               "old_inventory_quantity":44,
               "requires_shipping":false
            }
         ],
         "options":[
            {
               "id":10451225477,
               "product_id":8553166853,
               "name":"Title",
               "position":1,
               "values":[
                  "Steel orange - 3bn-g3x",
                  "Steel lime - r0b-b42",
                  "Plastic salmon - dfw-izh"
               ]
            }
         ],
         "images":[
            {
               "id":23262319557,
               "product_id":8553166853,
               "position":1,
               "created_at":"2017-07-19T06:48:13-04:00",
               "updated_at":"2017-07-19T06:48:13-04:00",
               "width":2500,
               "height":2500,
               "src":"https:\/\/cdn.shopify.com\/s\/files\/1\/2199\/5191\/products\/back-of-bomb-pin.jpg?v=1500461293",
               "variant_ids":[

               ]
            }
         ],
         "image":{
            "id":23262319557,
            "product_id":8553166853,
            "position":1,
            "created_at":"2017-07-19T06:48:13-04:00",
            "updated_at":"2017-07-19T06:48:13-04:00",
            "width":2500,
            "height":2500,
            "src":"https:\/\/cdn.shopify.com\/s\/files\/1\/2199\/5191\/products\/back-of-bomb-pin.jpg?v=1500461293",
            "variant_ids":[

            ]
         }
      },
      {
         "id":8553163845,
         "title":"Enterprise-wide Cloned Generic Plastic Soap",
         "body_html":"Dicta suscipit voluptas dolor reprehenderit et tempore. Aut voluptatum voluptates quam et. Rerum suscipit est enim.",
         "vendor":"Bartoletti - Kunde",
         "product_type":"Industrial",
         "created_at":"2017-07-19T06:48:04-04:00",
         "handle":"enterprise-wide-cloned-generic-plastic-soap",
         "updated_at":"2017-07-19T06:48:04-04:00",
         "published_at":"2017-07-19T06:48:04-04:00",
         "template_suffix":null,
         "published_scope":"global",
         "tags":"data-generator",
         "variants":[
            {
               "id":35723225413,
               "product_id":8553163845,
               "title":"Plastic magenta - 14b-40y",
               "price":"223.00",
               "sku":"",
               "position":1,
               "grams":0,
               "inventory_policy":"deny",
               "compare_at_price":null,
               "fulfillment_service":"manual",
               "inventory_management":"shopify",
               "option1":"Plastic magenta - 14b-40y",
               "option2":null,
               "option3":null,
               "created_at":"2017-07-19T06:48:04-04:00",
               "updated_at":"2017-07-19T06:48:04-04:00",
               "taxable":true,
               "barcode":null,
               "image_id":null,
               "inventory_quantity":37,
               "weight":0,
               "weight_unit":"g",
               "old_inventory_quantity":37,
               "requires_shipping":false
            },
            {
               "id":35723225541,
               "product_id":8553163845,
               "title":"Steel blue - 6c6-92p",
               "price":"281.00",
               "sku":"",
               "position":2,
               "grams":120,
               "inventory_policy":"deny",
               "compare_at_price":null,
               "fulfillment_service":"manual",
               "inventory_management":"shopify",
               "option1":"Steel blue - 6c6-92p",
               "option2":null,
               "option3":null,
               "created_at":"2017-07-19T06:48:04-04:00",
               "updated_at":"2017-07-19T06:48:04-04:00",
               "taxable":true,
               "barcode":null,
               "image_id":null,
               "inventory_quantity":16,
               "weight":120,
               "weight_unit":"g",
               "old_inventory_quantity":16,
               "requires_shipping":true
            }
         ],
         "options":[
            {
               "id":10451222021,
               "product_id":8553163845,
               "name":"Title",
               "position":1,
               "values":[
                  "Plastic magenta - 14b-40y",
                  "Steel blue - 6c6-92p"
               ]
            }
         ],
         "images":[

         ],
         "image":null
      },
      {
         "id":8553167813,
         "title":"Enterprise-wide Persistent Incredible Concrete Keyboard",
         "body_html":"Totam minus est saepe corporis. Et sunt ipsa laudantium corrupti laboriosam vero. Consequatur voluptatibus occaecati natus aut labore neque. Laborum eos magnam expedita omnis ipsam voluptatem aut veniam accusamus.",
         "vendor":"O\'Kon - Christiansen",
         "product_type":"Electronics",
         "created_at":"2017-07-19T06:48:16-04:00",
         "handle":"enterprise-wide-persistent-incredible-concrete-keyboard",
         "updated_at":"2017-07-19T06:48:16-04:00",
         "published_at":"2017-07-19T06:48:16-04:00",
         "template_suffix":null,
         "published_scope":"global",
         "tags":"data-generator",
         "variants":[
            {
               "id":35723260293,
               "product_id":8553167813,
               "title":"Wooden orchid - 4hn-hpu",
               "price":"144.00",
               "sku":"",
               "position":1,
               "grams":113,
               "inventory_policy":"deny",
               "compare_at_price":null,
               "fulfillment_service":"manual",
               "inventory_management":"shopify",
               "option1":"Wooden orchid - 4hn-hpu",
               "option2":null,
               "option3":null,
               "created_at":"2017-07-19T06:48:16-04:00",
               "updated_at":"2017-07-19T06:48:16-04:00",
               "taxable":true,
               "barcode":null,
               "image_id":null,
               "inventory_quantity":33,
               "weight":113,
               "weight_unit":"g",
               "old_inventory_quantity":33,
               "requires_shipping":true
            }
         ],
         "options":[
            {
               "id":10451226565,
               "product_id":8553167813,
               "name":"Title",
               "position":1,
               "values":[
                  "Wooden orchid - 4hn-hpu"
               ]
            }
         ],
         "images":[

         ],
         "image":null
      },
      {
         "id":8553146757,
         "title":"Focused Re-contextualized Handmade Granite Soap - Steel purple",
         "body_html":"Eveniet molestias fuga labore vel alias debitis. Quae repellendus odit magnam fuga. Quis nihil laborum ut est. Deserunt voluptas eaque. Eaque qui quae non placeat deserunt delectus dolor.",
         "vendor":"Kuphal LLC",
         "product_type":"Jewelery",
         "created_at":"2017-07-19T06:47:07-04:00",
         "handle":"focused-re-contextualized-handmade-granite-soap-steel-purple",
         "updated_at":"2017-07-19T06:47:07-04:00",
         "published_at":"2017-07-19T06:47:07-04:00",
         "template_suffix":null,
         "published_scope":"global",
         "tags":"data-generator",
         "variants":[
            {
               "id":35723095045,
               "product_id":8553146757,
               "title":"Rubber magenta - z3h-m9i",
               "price":"261.00",
               "sku":"",
               "position":1,
               "grams":104,
               "inventory_policy":"deny",
               "compare_at_price":null,
               "fulfillment_service":"manual",
               "inventory_management":"shopify",
               "option1":"Rubber magenta - z3h-m9i",
               "option2":null,
               "option3":null,
               "created_at":"2017-07-19T06:47:07-04:00",
               "updated_at":"2017-07-19T06:47:07-04:00",
               "taxable":true,
               "barcode":null,
               "image_id":null,
               "inventory_quantity":48,
               "weight":104,
               "weight_unit":"g",
               "old_inventory_quantity":48,
               "requires_shipping":true
            },
            {
               "id":35723095173,
               "product_id":8553146757,
               "title":"Wooden olive - 1dq-xnc",
               "price":"271.00",
               "sku":"",
               "position":2,
               "grams":98,
               "inventory_policy":"deny",
               "compare_at_price":null,
               "fulfillment_service":"manual",
               "inventory_management":"shopify",
               "option1":"Wooden olive - 1dq-xnc",
               "option2":null,
               "option3":null,
               "created_at":"2017-07-19T06:47:07-04:00",
               "updated_at":"2017-07-19T06:47:07-04:00",
               "taxable":true,
               "barcode":null,
               "image_id":null,
               "inventory_quantity":33,
               "weight":98,
               "weight_unit":"g",
               "old_inventory_quantity":33,
               "requires_shipping":true
            },
            {
               "id":35723095301,
               "product_id":8553146757,
               "title":"Rubber fuchsia - nrq-a1x",
               "price":"278.00",
               "sku":"",
               "position":3,
               "grams":0,
               "inventory_policy":"deny",
               "compare_at_price":null,
               "fulfillment_service":"manual",
               "inventory_management":"shopify",
               "option1":"Rubber fuchsia - nrq-a1x",
               "option2":null,
               "option3":null,
               "created_at":"2017-07-19T06:47:07-04:00",
               "updated_at":"2017-07-19T06:47:07-04:00",
               "taxable":true,
               "barcode":null,
               "image_id":null,
               "inventory_quantity":28,
               "weight":0,
               "weight_unit":"g",
               "old_inventory_quantity":28,
               "requires_shipping":false
            }
         ],
         "options":[
            {
               "id":10451202117,
               "product_id":8553146757,
               "name":"Title",
               "position":1,
               "values":[
                  "Rubber magenta - z3h-m9i",
                  "Wooden olive - 1dq-xnc",
                  "Rubber fuchsia - nrq-a1x"
               ]
            }
         ],
         "images":[

         ],
         "image":null
      },
      {
         "id":8553140485,
         "title":"Horizontal Intelligent Concrete Chicken",
         "body_html":"Eum molestiae id voluptas aut. Ducimus voluptatem sunt omnis aliquam reprehenderit. Laudantium dignissimos veritatis in quo incidunt pariatur pariatur.",
         "vendor":"Armstrong, Sauer and Grady",
         "product_type":"Baby",
         "created_at":"2017-07-19T06:46:48-04:00",
         "handle":"horizontal-intelligent-concrete-chicken",
         "updated_at":"2017-07-19T06:46:49-04:00",
         "published_at":"2017-07-19T06:46:48-04:00",
         "template_suffix":null,
         "published_scope":"global",
         "tags":"data-generator",
         "variants":[
            {
               "id":35723042309,
               "product_id":8553140485,
               "title":"Concrete turquoise - 1c7-dlf",
               "price":"247.00",
               "sku":"",
               "position":1,
               "grams":0,
               "inventory_policy":"deny",
               "compare_at_price":null,
               "fulfillment_service":"manual",
               "inventory_management":"shopify",
               "option1":"Concrete turquoise - 1c7-dlf",
               "option2":null,
               "option3":null,
               "created_at":"2017-07-19T06:46:48-04:00",
               "updated_at":"2017-07-19T06:46:48-04:00",
               "taxable":true,
               "barcode":null,
               "image_id":null,
               "inventory_quantity":9,
               "weight":0,
               "weight_unit":"g",
               "old_inventory_quantity":9,
               "requires_shipping":false
            },
            {
               "id":35723042373,
               "product_id":8553140485,
               "title":"Cotton purple - jkw-mkm",
               "price":"108.00",
               "sku":"",
               "position":2,
               "grams":368,
               "inventory_policy":"deny",
               "compare_at_price":null,
               "fulfillment_service":"manual",
               "inventory_management":"shopify",
               "option1":"Cotton purple - jkw-mkm",
               "option2":null,
               "option3":null,
               "created_at":"2017-07-19T06:46:48-04:00",
               "updated_at":"2017-07-19T06:46:48-04:00",
               "taxable":true,
               "barcode":null,
               "image_id":null,
               "inventory_quantity":48,
               "weight":368,
               "weight_unit":"g",
               "old_inventory_quantity":48,
               "requires_shipping":true
            },
            {
               "id":35723042437,
               "product_id":8553140485,
               "title":"Soft yellow - i42-hdh",
               "price":"39.00",
               "sku":"",
               "position":3,
               "grams":403,
               "inventory_policy":"deny",
               "compare_at_price":null,
               "fulfillment_service":"manual",
               "inventory_management":"shopify",
               "option1":"Soft yellow - i42-hdh",
               "option2":null,
               "option3":null,
               "created_at":"2017-07-19T06:46:48-04:00",
               "updated_at":"2017-07-19T06:46:48-04:00",
               "taxable":true,
               "barcode":null,
               "image_id":null,
               "inventory_quantity":11,
               "weight":403,
               "weight_unit":"g",
               "old_inventory_quantity":11,
               "requires_shipping":true
            }
         ],
         "options":[
            {
               "id":10451194373,
               "product_id":8553140485,
               "name":"Title",
               "position":1,
               "values":[
                  "Concrete turquoise - 1c7-dlf",
                  "Cotton purple - jkw-mkm",
                  "Soft yellow - i42-hdh"
               ]
            }
         ],
         "images":[
            {
               "id":23262295301,
               "product_id":8553140485,
               "position":1,
               "created_at":"2017-07-19T06:46:48-04:00",
               "updated_at":"2017-07-19T06:46:48-04:00",
               "width":4096,
               "height":2220,
               "src":"https:\/\/cdn.shopify.com\/s\/files\/1\/2199\/5191\/products\/barcelona-city-view.jpg?v=1500461208",
               "variant_ids":[

               ]
            }
         ],
         "image":{
            "id":23262295301,
            "product_id":8553140485,
            "position":1,
            "created_at":"2017-07-19T06:46:48-04:00",
            "updated_at":"2017-07-19T06:46:48-04:00",
            "width":4096,
            "height":2220,
            "src":"https:\/\/cdn.shopify.com\/s\/files\/1\/2199\/5191\/products\/barcelona-city-view.jpg?v=1500461208",
            "variant_ids":[

            ]
         }
      },
      {
         "id":8553152773,
         "title":"Implemented Gorgeous Soft Computer - Metal salmon",
         "body_html":"Doloremque et tenetur voluptatibus nostrum. Consequuntur impedit enim accusamus deserunt voluptate qui vero. Et rerum sed culpa dolores. Voluptatem et ab dignissimos id nostrum id veritatis quam optio. Impedit ipsam molestiae dolores et ab modi. Sapiente culpa ducimus.",
         "vendor":"Macejkovic and Sons",
         "product_type":"Beauty",
         "created_at":"2017-07-19T06:47:27-04:00",
         "handle":"implemented-gorgeous-soft-computer-metal-salmon",
         "updated_at":"2017-07-19T06:47:27-04:00",
         "published_at":"2017-07-19T06:47:27-04:00",
         "template_suffix":null,
         "published_scope":"global",
         "tags":"data-generator",
         "variants":[
            {
               "id":35723139269,
               "product_id":8553152773,
               "title":"Default Title",
               "price":"0.00",
               "sku":"",
               "position":1,
               "grams":0,
               "inventory_policy":"deny",
               "compare_at_price":null,
               "fulfillment_service":"manual",
               "inventory_management":null,
               "option1":"Default Title",
               "option2":null,
               "option3":null,
               "created_at":"2017-07-19T06:47:27-04:00",
               "updated_at":"2017-07-19T06:47:27-04:00",
               "taxable":true,
               "barcode":null,
               "image_id":null,
               "inventory_quantity":1,
               "weight":0.0,
               "weight_unit":"kg",
               "old_inventory_quantity":1,
               "requires_shipping":true
            }
         ],
         "options":[
            {
               "id":10451208901,
               "product_id":8553152773,
               "name":"Title",
               "position":1,
               "values":[
                  "Default Title"
               ]
            }
         ],
         "images":[
            {
               "id":23262305605,
               "product_id":8553152773,
               "position":1,
               "created_at":"2017-07-19T06:47:27-04:00",
               "updated_at":"2017-07-19T06:47:27-04:00",
               "width":2500,
               "height":2500,
               "src":"https:\/\/cdn.shopify.com\/s\/files\/1\/2199\/5191\/products\/bomb-lapel-pin-product-photo.jpg?v=1500461247",
               "variant_ids":[

               ]
            }
         ],
         "image":{
            "id":23262305605,
            "product_id":8553152773,
            "position":1,
            "created_at":"2017-07-19T06:47:27-04:00",
            "updated_at":"2017-07-19T06:47:27-04:00",
            "width":2500,
            "height":2500,
            "src":"https:\/\/cdn.shopify.com\/s\/files\/1\/2199\/5191\/products\/bomb-lapel-pin-product-photo.jpg?v=1500461247",
            "variant_ids":[

            ]
         }
      },
      {
         "id":8553165701,
         "title":"Managed Small Metal Keyboard - Concrete azure",
         "body_html":"Cupiditate quo consequatur nihil et non. Ut aut eaque et quis aperiam quidem sed. Natus esse optio officia quia culpa tempora aut quisquam. Quia voluptate eaque qui necessitatibus et consequuntur dolorum saepe voluptatem.",
         "vendor":"Shanahan - Zieme",
         "product_type":"Jewelery",
         "created_at":"2017-07-19T06:48:09-04:00",
         "handle":"managed-small-metal-keyboard-concrete-azure",
         "updated_at":"2017-07-19T06:48:09-04:00",
         "published_at":"2017-07-19T06:48:09-04:00",
         "template_suffix":null,
         "published_scope":"global",
         "tags":"data-generator",
         "variants":[
            {
               "id":35723244549,
               "product_id":8553165701,
               "title":"Cotton orchid - klo-v40",
               "price":"267.00",
               "sku":"",
               "position":1,
               "grams":0,
               "inventory_policy":"deny",
               "compare_at_price":null,
               "fulfillment_service":"manual",
               "inventory_management":"shopify",
               "option1":"Cotton orchid - klo-v40",
               "option2":null,
               "option3":null,
               "created_at":"2017-07-19T06:48:09-04:00",
               "updated_at":"2017-07-19T06:48:09-04:00",
               "taxable":true,
               "barcode":null,
               "image_id":null,
               "inventory_quantity":44,
               "weight":0,
               "weight_unit":"g",
               "old_inventory_quantity":44,
               "requires_shipping":false
            },
            {
               "id":35723244677,
               "product_id":8553165701,
               "title":"Frozen lime - lx5-uf0",
               "price":"96.00",
               "sku":"",
               "position":2,
               "grams":0,
               "inventory_policy":"deny",
               "compare_at_price":null,
               "fulfillment_service":"manual",
               "inventory_management":"shopify",
               "option1":"Frozen lime - lx5-uf0",
               "option2":null,
               "option3":null,
               "created_at":"2017-07-19T06:48:09-04:00",
               "updated_at":"2017-07-19T06:48:09-04:00",
               "taxable":true,
               "barcode":null,
               "image_id":null,
               "inventory_quantity":41,
               "weight":0,
               "weight_unit":"g",
               "old_inventory_quantity":41,
               "requires_shipping":false
            },
            {
               "id":35723244869,
               "product_id":8553165701,
               "title":"Granite orchid - m6s-gb4",
               "price":"181.00",
               "sku":"",
               "position":3,
               "grams":449,
               "inventory_policy":"deny",
               "compare_at_price":null,
               "fulfillment_service":"manual",
               "inventory_management":"shopify",
               "option1":"Granite orchid - m6s-gb4",
               "option2":null,
               "option3":null,
               "created_at":"2017-07-19T06:48:09-04:00",
               "updated_at":"2017-07-19T06:48:09-04:00",
               "taxable":true,
               "barcode":null,
               "image_id":null,
               "inventory_quantity":22,
               "weight":449,
               "weight_unit":"g",
               "old_inventory_quantity":22,
               "requires_shipping":true
            }
         ],
         "options":[
            {
               "id":10451224261,
               "product_id":8553165701,
               "name":"Title",
               "position":1,
               "values":[
                  "Cotton orchid - klo-v40",
                  "Frozen lime - lx5-uf0",
                  "Granite orchid - m6s-gb4"
               ]
            }
         ],
         "images":[
            {
               "id":23262318725,
               "product_id":8553165701,
               "position":1,
               "created_at":"2017-07-19T06:48:09-04:00",
               "updated_at":"2017-07-19T06:48:09-04:00",
               "width":2200,
               "height":1467,
               "src":"https:\/\/cdn.shopify.com\/s\/files\/1\/2199\/5191\/products\/mini-jar-candle.jpg?v=1500461289",
               "variant_ids":[

               ]
            }
         ],
         "image":{
            "id":23262318725,
            "product_id":8553165701,
            "position":1,
            "created_at":"2017-07-19T06:48:09-04:00",
            "updated_at":"2017-07-19T06:48:09-04:00",
            "width":2200,
            "height":1467,
            "src":"https:\/\/cdn.shopify.com\/s\/files\/1\/2199\/5191\/products\/mini-jar-candle.jpg?v=1500461289",
            "variant_ids":[

            ]
         }
      },
      {
         "id":8553168325,
         "title":"Multi-layered Gorgeous Rubber Cheese",
         "body_html":"Sit unde itaque. Sit ea rerum modi suscipit voluptate. Et velit dignissimos provident cum ut.",
         "vendor":"Turner, Terry and Hagenes",
         "product_type":"Sports",
         "created_at":"2017-07-19T06:48:17-04:00",
         "handle":"multi-layered-gorgeous-rubber-cheese",
         "updated_at":"2017-07-19T06:48:17-04:00",
         "published_at":"2017-07-19T06:48:17-04:00",
         "template_suffix":null,
         "published_scope":"global",
         "tags":"data-generator",
         "variants":[
            {
               "id":35723264389,
               "product_id":8553168325,
               "title":"Default Title",
               "price":"0.00",
               "sku":"",
               "position":1,
               "grams":0,
               "inventory_policy":"deny",
               "compare_at_price":null,
               "fulfillment_service":"manual",
               "inventory_management":null,
               "option1":"Default Title",
               "option2":null,
               "option3":null,
               "created_at":"2017-07-19T06:48:17-04:00",
               "updated_at":"2017-07-19T06:48:17-04:00",
               "taxable":true,
               "barcode":null,
               "image_id":null,
               "inventory_quantity":1,
               "weight":0.0,
               "weight_unit":"kg",
               "old_inventory_quantity":1,
               "requires_shipping":true
            }
         ],
         "options":[
            {
               "id":10451227141,
               "product_id":8553168325,
               "name":"Title",
               "position":1,
               "values":[
                  "Default Title"
               ]
            }
         ],
         "images":[

         ],
         "image":null
      },
      {
         "id":8553163205,
         "title":"Operative Awesome Wooden Chips",
         "body_html":"Quae nobis laboriosam ut error exercitationem est veritatis. Est qui ex voluptatum voluptate magni exercitationem. Tenetur laborum a id sequi nihil rerum labore maxime facilis.",
         "vendor":"Harris - Jakubowski",
         "product_type":"Grocery",
         "created_at":"2017-07-19T06:48:02-04:00",
         "handle":"operative-awesome-wooden-chips",
         "updated_at":"2017-07-19T06:48:02-04:00",
         "published_at":"2017-07-19T06:48:02-04:00",
         "template_suffix":null,
         "published_scope":"global",
         "tags":"data-generator",
         "variants":[
            {
               "id":35723221765,
               "product_id":8553163205,
               "title":"Soft plum - is9-k70",
               "price":"81.00",
               "sku":"",
               "position":1,
               "grams":0,
               "inventory_policy":"deny",
               "compare_at_price":null,
               "fulfillment_service":"manual",
               "inventory_management":"shopify",
               "option1":"Soft plum - is9-k70",
               "option2":null,
               "option3":null,
               "created_at":"2017-07-19T06:48:02-04:00",
               "updated_at":"2017-07-19T06:48:02-04:00",
               "taxable":true,
               "barcode":null,
               "image_id":null,
               "inventory_quantity":8,
               "weight":0,
               "weight_unit":"g",
               "old_inventory_quantity":8,
               "requires_shipping":false
            },
            {
               "id":35723221893,
               "product_id":8553163205,
               "title":"Concrete silver - sww-k4j",
               "price":"224.00",
               "sku":"",
               "position":2,
               "grams":0,
               "inventory_policy":"deny",
               "compare_at_price":null,
               "fulfillment_service":"manual",
               "inventory_management":"shopify",
               "option1":"Concrete silver - sww-k4j",
               "option2":null,
               "option3":null,
               "created_at":"2017-07-19T06:48:02-04:00",
               "updated_at":"2017-07-19T06:48:02-04:00",
               "taxable":true,
               "barcode":null,
               "image_id":null,
               "inventory_quantity":6,
               "weight":0,
               "weight_unit":"g",
               "old_inventory_quantity":6,
               "requires_shipping":false
            }
         ],
         "options":[
            {
               "id":10451221253,
               "product_id":8553163205,
               "name":"Title",
               "position":1,
               "values":[
                  "Soft plum - is9-k70",
                  "Concrete silver - sww-k4j"
               ]
            }
         ],
         "images":[
            {
               "id":23262316037,
               "product_id":8553163205,
               "position":1,
               "created_at":"2017-07-19T06:48:02-04:00",
               "updated_at":"2017-07-19T06:48:02-04:00",
               "width":4096,
               "height":2731,
               "src":"https:\/\/cdn.shopify.com\/s\/files\/1\/2199\/5191\/products\/mini-drone-quadrocopter.jpg?v=1500461282",
               "variant_ids":[

               ]
            }
         ],
         "image":{
            "id":23262316037,
            "product_id":8553163205,
            "position":1,
            "created_at":"2017-07-19T06:48:02-04:00",
            "updated_at":"2017-07-19T06:48:02-04:00",
            "width":4096,
            "height":2731,
            "src":"https:\/\/cdn.shopify.com\/s\/files\/1\/2199\/5191\/products\/mini-drone-quadrocopter.jpg?v=1500461282",
            "variant_ids":[

            ]
         }
      },
      {
         "id":8553158277,
         "title":"Organized Focused Generic Rubber Shoes",
         "body_html":"Consectetur voluptatem a est. Ut fugit accusantium tempore dolorem voluptas est nisi illum. Molestiae ex fugiat voluptas facilis qui minima perspiciatis iste assumenda. Sunt sit excepturi quia nulla ut. Repellendus quod mollitia qui architecto quas. Quibusdam non minima nulla aut nihil.",
         "vendor":"Zieme, Dooley and Brekke",
         "product_type":"Music",
         "created_at":"2017-07-19T06:47:45-04:00",
         "handle":"organized-focused-generic-rubber-shoes",
         "updated_at":"2017-07-19T06:47:45-04:00",
         "published_at":"2017-07-19T06:47:45-04:00",
         "template_suffix":null,
         "published_scope":"global",
         "tags":"data-generator",
         "variants":[
            {
               "id":35723166533,
               "product_id":8553158277,
               "title":"Soft mint green - d98-yq2",
               "price":"32.00",
               "sku":"",
               "position":1,
               "grams":217,
               "inventory_policy":"deny",
               "compare_at_price":null,
               "fulfillment_service":"manual",
               "inventory_management":"shopify",
               "option1":"Soft mint green - d98-yq2",
               "option2":null,
               "option3":null,
               "created_at":"2017-07-19T06:47:45-04:00",
               "updated_at":"2017-07-19T06:47:45-04:00",
               "taxable":true,
               "barcode":null,
               "image_id":null,
               "inventory_quantity":33,
               "weight":217,
               "weight_unit":"g",
               "old_inventory_quantity":33,
               "requires_shipping":true
            },
            {
               "id":35723166725,
               "product_id":8553158277,
               "title":"Metal black - lot-bb6",
               "price":"248.00",
               "sku":"",
               "position":2,
               "grams":0,
               "inventory_policy":"deny",
               "compare_at_price":null,
               "fulfillment_service":"manual",
               "inventory_management":"shopify",
               "option1":"Metal black - lot-bb6",
               "option2":null,
               "option3":null,
               "created_at":"2017-07-19T06:47:45-04:00",
               "updated_at":"2017-07-19T06:47:45-04:00",
               "taxable":true,
               "barcode":null,
               "image_id":null,
               "inventory_quantity":37,
               "weight":0,
               "weight_unit":"g",
               "old_inventory_quantity":37,
               "requires_shipping":false
            },
            {
               "id":35723166789,
               "product_id":8553158277,
               "title":"Plastic olive - jpf-hov",
               "price":"208.00",
               "sku":"",
               "position":3,
               "grams":0,
               "inventory_policy":"deny",
               "compare_at_price":null,
               "fulfillment_service":"manual",
               "inventory_management":"shopify",
               "option1":"Plastic olive - jpf-hov",
               "option2":null,
               "option3":null,
               "created_at":"2017-07-19T06:47:45-04:00",
               "updated_at":"2017-07-19T06:47:45-04:00",
               "taxable":true,
               "barcode":null,
               "image_id":null,
               "inventory_quantity":26,
               "weight":0,
               "weight_unit":"g",
               "old_inventory_quantity":26,
               "requires_shipping":false
            }
         ],
         "options":[
            {
               "id":10451215173,
               "product_id":8553158277,
               "name":"Title",
               "position":1,
               "values":[
                  "Soft mint green - d98-yq2",
                  "Metal black - lot-bb6",
                  "Plastic olive - jpf-hov"
               ]
            }
         ],
         "images":[
            {
               "id":23262310213,
               "product_id":8553158277,
               "position":1,
               "created_at":"2017-07-19T06:47:45-04:00",
               "updated_at":"2017-07-19T06:47:45-04:00",
               "width":4096,
               "height":2731,
               "src":"https:\/\/cdn.shopify.com\/s\/files\/1\/2199\/5191\/products\/young-woman-typing-macbook.jpg?v=1500461265",
               "variant_ids":[

               ]
            }
         ],
         "image":{
            "id":23262310213,
            "product_id":8553158277,
            "position":1,
            "created_at":"2017-07-19T06:47:45-04:00",
            "updated_at":"2017-07-19T06:47:45-04:00",
            "width":4096,
            "height":2731,
            "src":"https:\/\/cdn.shopify.com\/s\/files\/1\/2199\/5191\/products\/young-woman-typing-macbook.jpg?v=1500461265",
            "variant_ids":[

            ]
         }
      },
      {
         "id":8553153221,
         "title":"Pre-emptive Rustic Plastic Shoes",
         "body_html":"Fugiat incidunt quia at doloribus doloremque perspiciatis. Voluptatem sapiente doloremque rerum aut voluptas molestiae nostrum. Fugit quia ab nesciunt enim temporibus aut quisquam pariatur dolores.",
         "vendor":"Beer Group",
         "product_type":"Computers",
         "created_at":"2017-07-19T06:47:28-04:00",
         "handle":"pre-emptive-rustic-plastic-shoes",
         "updated_at":"2017-07-19T06:47:29-04:00",
         "published_at":"2017-07-19T06:47:28-04:00",
         "template_suffix":null,
         "published_scope":"global",
         "tags":"data-generator",
         "variants":[
            {
               "id":35723140101,
               "product_id":8553153221,
               "title":"Plastic silver - wnv-3to",
               "price":"268.00",
               "sku":"",
               "position":1,
               "grams":210,
               "inventory_policy":"deny",
               "compare_at_price":null,
               "fulfillment_service":"manual",
               "inventory_management":"shopify",
               "option1":"Plastic silver - wnv-3to",
               "option2":null,
               "option3":null,
               "created_at":"2017-07-19T06:47:28-04:00",
               "updated_at":"2017-07-19T06:47:28-04:00",
               "taxable":true,
               "barcode":null,
               "image_id":null,
               "inventory_quantity":35,
               "weight":210,
               "weight_unit":"g",
               "old_inventory_quantity":35,
               "requires_shipping":true
            },
            {
               "id":35723140293,
               "product_id":8553153221,
               "title":"Cotton turquoise - tnw-mfs",
               "price":"208.00",
               "sku":"",
               "position":2,
               "grams":141,
               "inventory_policy":"deny",
               "compare_at_price":null,
               "fulfillment_service":"manual",
               "inventory_management":"shopify",
               "option1":"Cotton turquoise - tnw-mfs",
               "option2":null,
               "option3":null,
               "created_at":"2017-07-19T06:47:28-04:00",
               "updated_at":"2017-07-19T06:47:28-04:00",
               "taxable":true,
               "barcode":null,
               "image_id":null,
               "inventory_quantity":1,
               "weight":141,
               "weight_unit":"g",
               "old_inventory_quantity":1,
               "requires_shipping":true
            }
         ],
         "options":[
            {
               "id":10451209349,
               "product_id":8553153221,
               "name":"Title",
               "position":1,
               "values":[
                  "Plastic silver - wnv-3to",
                  "Cotton turquoise - tnw-mfs"
               ]
            }
         ],
         "images":[

         ],
         "image":null
      },
      {
         "id":8553151749,
         "title":"Quality-focused Rustic Fresh Towels - Frozen blue",
         "body_html":"Occaecati veritatis quia ut. Voluptate ea quia ipsa. Totam et et harum natus quae quis praesentium accusantium vel. Dolorem consectetur voluptates accusantium cupiditate quae tempore et.",
         "vendor":"Emard Group",
         "product_type":"Tools",
         "created_at":"2017-07-19T06:47:24-04:00",
         "handle":"quality-focused-rustic-fresh-towels-frozen-blue",
         "updated_at":"2017-07-19T06:47:24-04:00",
         "published_at":"2017-07-19T06:47:24-04:00",
         "template_suffix":null,
         "published_scope":"global",
         "tags":"data-generator",
         "variants":[
            {
               "id":35723132549,
               "product_id":8553151749,
               "title":"Fresh green - r9m-e70",
               "price":"291.00",
               "sku":"",
               "position":1,
               "grams":255,
               "inventory_policy":"deny",
               "compare_at_price":null,
               "fulfillment_service":"manual",
               "inventory_management":"shopify",
               "option1":"Fresh green - r9m-e70",
               "option2":null,
               "option3":null,
               "created_at":"2017-07-19T06:47:24-04:00",
               "updated_at":"2017-07-19T06:47:24-04:00",
               "taxable":true,
               "barcode":null,
               "image_id":null,
               "inventory_quantity":3,
               "weight":255,
               "weight_unit":"g",
               "old_inventory_quantity":3,
               "requires_shipping":true
            }
         ],
         "options":[
            {
               "id":10451207813,
               "product_id":8553151749,
               "name":"Title",
               "position":1,
               "values":[
                  "Fresh green - r9m-e70"
               ]
            }
         ],
         "images":[

         ],
         "image":null
      },
      {
         "id":8553149317,
         "title":"Self-enabling Reverse-engineered Sleek Soft Bike",
         "body_html":"Voluptas rem temporibus eos sunt qui asperiores perspiciatis. Rerum rerum et aliquid quam amet velit est. Eaque a officiis quia molestias. Veniam minus nostrum corrupti velit. Ut cumque suscipit vel. Sapiente consequatur voluptas consequuntur.",
         "vendor":"Mayer, Hoeger and Mueller",
         "product_type":"Shoes",
         "created_at":"2017-07-19T06:47:15-04:00",
         "handle":"self-enabling-reverse-engineered-sleek-soft-bike",
         "updated_at":"2017-07-19T06:47:15-04:00",
         "published_at":"2017-07-19T06:47:15-04:00",
         "template_suffix":null,
         "published_scope":"global",
         "tags":"data-generator",
         "variants":[
            {
               "id":35723114821,
               "product_id":8553149317,
               "title":"Default Title",
               "price":"0.00",
               "sku":"",
               "position":1,
               "grams":0,
               "inventory_policy":"deny",
               "compare_at_price":null,
               "fulfillment_service":"manual",
               "inventory_management":null,
               "option1":"Default Title",
               "option2":null,
               "option3":null,
               "created_at":"2017-07-19T06:47:15-04:00",
               "updated_at":"2017-07-19T06:47:15-04:00",
               "taxable":true,
               "barcode":null,
               "image_id":null,
               "inventory_quantity":1,
               "weight":0.0,
               "weight_unit":"kg",
               "old_inventory_quantity":1,
               "requires_shipping":true
            }
         ],
         "options":[
            {
               "id":10451205253,
               "product_id":8553149317,
               "name":"Title",
               "position":1,
               "values":[
                  "Default Title"
               ]
            }
         ],
         "images":[
            {
               "id":23262302981,
               "product_id":8553149317,
               "position":1,
               "created_at":"2017-07-19T06:47:15-04:00",
               "updated_at":"2017-07-19T06:47:15-04:00",
               "width":4096,
               "height":2731,
               "src":"https:\/\/cdn.shopify.com\/s\/files\/1\/2199\/5191\/products\/looking-out-window-wearing-headphones.jpg?v=1500461235",
               "variant_ids":[

               ]
            }
         ],
         "image":{
            "id":23262302981,
            "product_id":8553149317,
            "position":1,
            "created_at":"2017-07-19T06:47:15-04:00",
            "updated_at":"2017-07-19T06:47:15-04:00",
            "width":4096,
            "height":2731,
            "src":"https:\/\/cdn.shopify.com\/s\/files\/1\/2199\/5191\/products\/looking-out-window-wearing-headphones.jpg?v=1500461235",
            "variant_ids":[

            ]
         }
      },
      {
         "id":8553164677,
         "title":"Streamlined Seamless Handmade Plastic Towels",
         "body_html":"Ea ut aut assumenda magnam. Ut quisquam vero praesentium possimus libero necessitatibus dicta. Ab eveniet deserunt molestiae velit suscipit corrupti consequatur. Veniam distinctio deserunt rerum qui esse odit. Sunt occaecati laudantium consequuntur in unde consequatur est deserunt. Corrupti nemo optio explicabo consequuntur corrupti veniam adipisci.",
         "vendor":"Muller - Adams",
         "product_type":"Games",
         "created_at":"2017-07-19T06:48:06-04:00",
         "handle":"streamlined-seamless-handmade-plastic-towels",
         "updated_at":"2017-07-19T06:48:06-04:00",
         "published_at":"2017-07-19T06:48:06-04:00",
         "template_suffix":null,
         "published_scope":"global",
         "tags":"data-generator",
         "variants":[
            {
               "id":35723231749,
               "product_id":8553164677,
               "title":"Steel grey - 5kq-4y9",
               "price":"269.00",
               "sku":"",
               "position":1,
               "grams":0,
               "inventory_policy":"deny",
               "compare_at_price":null,
               "fulfillment_service":"manual",
               "inventory_management":"shopify",
               "option1":"Steel grey - 5kq-4y9",
               "option2":null,
               "option3":null,
               "created_at":"2017-07-19T06:48:06-04:00",
               "updated_at":"2017-07-19T06:48:06-04:00",
               "taxable":true,
               "barcode":null,
               "image_id":null,
               "inventory_quantity":18,
               "weight":0,
               "weight_unit":"g",
               "old_inventory_quantity":18,
               "requires_shipping":false
            },
            {
               "id":35723231877,
               "product_id":8553164677,
               "title":"Frozen silver - r0m-9pf",
               "price":"172.00",
               "sku":"",
               "position":2,
               "grams":0,
               "inventory_policy":"deny",
               "compare_at_price":null,
               "fulfillment_service":"manual",
               "inventory_management":"shopify",
               "option1":"Frozen silver - r0m-9pf",
               "option2":null,
               "option3":null,
               "created_at":"2017-07-19T06:48:06-04:00",
               "updated_at":"2017-07-19T06:48:06-04:00",
               "taxable":true,
               "barcode":null,
               "image_id":null,
               "inventory_quantity":43,
               "weight":0,
               "weight_unit":"g",
               "old_inventory_quantity":43,
               "requires_shipping":false
            }
         ],
         "options":[
            {
               "id":10451223045,
               "product_id":8553164677,
               "name":"Title",
               "position":1,
               "values":[
                  "Steel grey - 5kq-4y9",
                  "Frozen silver - r0m-9pf"
               ]
            }
         ],
         "images":[
            {
               "id":23262317509,
               "product_id":8553164677,
               "position":1,
               "created_at":"2017-07-19T06:48:06-04:00",
               "updated_at":"2017-07-19T06:48:06-04:00",
               "width":1920,
               "height":1080,
               "src":"https:\/\/cdn.shopify.com\/s\/files\/1\/2199\/5191\/products\/pouring-maple-syrup-on-waffles.jpg?v=1500461286",
               "variant_ids":[

               ]
            }
         ],
         "image":{
            "id":23262317509,
            "product_id":8553164677,
            "position":1,
            "created_at":"2017-07-19T06:48:06-04:00",
            "updated_at":"2017-07-19T06:48:06-04:00",
            "width":1920,
            "height":1080,
            "src":"https:\/\/cdn.shopify.com\/s\/files\/1\/2199\/5191\/products\/pouring-maple-syrup-on-waffles.jpg?v=1500461286",
            "variant_ids":[

            ]
         }
      },
      {
         "id":8553156037,
         "title":"Up-sized Intelligent Plastic Tuna",
         "body_html":"Porro dolore ut accusamus error aliquid inventore. Officia quaerat sed blanditiis ullam et unde omnis. Recusandae et et accusantium quis dicta. Est aut voluptatem similique. Dolorem aut asperiores expedita vitae iste dolore.",
         "vendor":"Swift, Stroman and Langosh",
         "product_type":"Tools",
         "created_at":"2017-07-19T06:47:38-04:00",
         "handle":"up-sized-intelligent-plastic-tuna",
         "updated_at":"2017-07-19T06:47:38-04:00",
         "published_at":"2017-07-19T06:47:38-04:00",
         "template_suffix":null,
         "published_scope":"global",
         "tags":"data-generator",
         "variants":[
            {
               "id":35723152645,
               "product_id":8553156037,
               "title":"Steel red - hns-o1o",
               "price":"67.00",
               "sku":"",
               "position":1,
               "grams":467,
               "inventory_policy":"deny",
               "compare_at_price":null,
               "fulfillment_service":"manual",
               "inventory_management":"shopify",
               "option1":"Steel red - hns-o1o",
               "option2":null,
               "option3":null,
               "created_at":"2017-07-19T06:47:38-04:00",
               "updated_at":"2017-07-19T06:47:38-04:00",
               "taxable":true,
               "barcode":null,
               "image_id":null,
               "inventory_quantity":19,
               "weight":467,
               "weight_unit":"g",
               "old_inventory_quantity":19,
               "requires_shipping":true
            },
            {
               "id":35723152773,
               "product_id":8553156037,
               "title":"Soft orange - 31z-19g",
               "price":"122.00",
               "sku":"",
               "position":2,
               "grams":355,
               "inventory_policy":"deny",
               "compare_at_price":null,
               "fulfillment_service":"manual",
               "inventory_management":"shopify",
               "option1":"Soft orange - 31z-19g",
               "option2":null,
               "option3":null,
               "created_at":"2017-07-19T06:47:38-04:00",
               "updated_at":"2017-07-19T06:47:38-04:00",
               "taxable":true,
               "barcode":null,
               "image_id":null,
               "inventory_quantity":43,
               "weight":355,
               "weight_unit":"g",
               "old_inventory_quantity":43,
               "requires_shipping":true
            },
            {
               "id":35723152837,
               "product_id":8553156037,
               "title":"Frozen black - pay-xez",
               "price":"82.00",
               "sku":"",
               "position":3,
               "grams":303,
               "inventory_policy":"deny",
               "compare_at_price":null,
               "fulfillment_service":"manual",
               "inventory_management":"shopify",
               "option1":"Frozen black - pay-xez",
               "option2":null,
               "option3":null,
               "created_at":"2017-07-19T06:47:38-04:00",
               "updated_at":"2017-07-19T06:47:38-04:00",
               "taxable":true,
               "barcode":null,
               "image_id":null,
               "inventory_quantity":43,
               "weight":303,
               "weight_unit":"g",
               "old_inventory_quantity":43,
               "requires_shipping":true
            }
         ],
         "options":[
            {
               "id":10451212549,
               "product_id":8553156037,
               "name":"Title",
               "position":1,
               "values":[
                  "Steel red - hns-o1o",
                  "Soft orange - 31z-19g",
                  "Frozen black - pay-xez"
               ]
            }
         ],
         "images":[
            {
               "id":23262308165,
               "product_id":8553156037,
               "position":1,
               "created_at":"2017-07-19T06:47:38-04:00",
               "updated_at":"2017-07-19T06:47:38-04:00",
               "width":4096,
               "height":2731,
               "src":"https:\/\/cdn.shopify.com\/s\/files\/1\/2199\/5191\/products\/cute-cat-photo.jpg?v=1500461258",
               "variant_ids":[

               ]
            }
         ],
         "image":{
            "id":23262308165,
            "product_id":8553156037,
            "position":1,
            "created_at":"2017-07-19T06:47:38-04:00",
            "updated_at":"2017-07-19T06:47:38-04:00",
            "width":4096,
            "height":2731,
            "src":"https:\/\/cdn.shopify.com\/s\/files\/1\/2199\/5191\/products\/cute-cat-photo.jpg?v=1500461258",
            "variant_ids":[

            ]
         }
      },
      {
         "id":8553145605,
         "title":"Upgradable Unbranded Frozen Soap",
         "body_html":"Labore autem voluptatem quaerat enim quia in aspernatur possimus quia. Aspernatur pariatur voluptatem ea iste amet sint accusantium quia. Enim voluptatem quia.",
         "vendor":"Zieme Inc",
         "product_type":"Electronics",
         "created_at":"2017-07-19T06:47:04-04:00",
         "handle":"upgradable-unbranded-frozen-soap",
         "updated_at":"2017-07-19T06:47:04-04:00",
         "published_at":"2017-07-19T06:47:04-04:00",
         "template_suffix":null,
         "published_scope":"global",
         "tags":"data-generator",
         "variants":[
            {
               "id":35723082117,
               "product_id":8553145605,
               "title":"Soft gold - 55e-rzg",
               "price":"154.00",
               "sku":"",
               "position":1,
               "grams":464,
               "inventory_policy":"deny",
               "compare_at_price":null,
               "fulfillment_service":"manual",
               "inventory_management":"shopify",
               "option1":"Soft gold - 55e-rzg",
               "option2":null,
               "option3":null,
               "created_at":"2017-07-19T06:47:04-04:00",
               "updated_at":"2017-07-19T06:47:04-04:00",
               "taxable":true,
               "barcode":null,
               "image_id":null,
               "inventory_quantity":19,
               "weight":464,
               "weight_unit":"g",
               "old_inventory_quantity":19,
               "requires_shipping":true
            },
            {
               "id":35723082181,
               "product_id":8553145605,
               "title":"Soft pink - y51-wr7",
               "price":"56.00",
               "sku":"",
               "position":2,
               "grams":0,
               "inventory_policy":"deny",
               "compare_at_price":null,
               "fulfillment_service":"manual",
               "inventory_management":"shopify",
               "option1":"Soft pink - y51-wr7",
               "option2":null,
               "option3":null,
               "created_at":"2017-07-19T06:47:04-04:00",
               "updated_at":"2017-07-19T06:47:04-04:00",
               "taxable":true,
               "barcode":null,
               "image_id":null,
               "inventory_quantity":47,
               "weight":0,
               "weight_unit":"g",
               "old_inventory_quantity":47,
               "requires_shipping":false
            },
            {
               "id":35723082245,
               "product_id":8553145605,
               "title":"Metal lavender - taq-x14",
               "price":"292.00",
               "sku":"",
               "position":3,
               "grams":428,
               "inventory_policy":"deny",
               "compare_at_price":null,
               "fulfillment_service":"manual",
               "inventory_management":"shopify",
               "option1":"Metal lavender - taq-x14",
               "option2":null,
               "option3":null,
               "created_at":"2017-07-19T06:47:04-04:00",
               "updated_at":"2017-07-19T06:47:04-04:00",
               "taxable":true,
               "barcode":null,
               "image_id":null,
               "inventory_quantity":49,
               "weight":428,
               "weight_unit":"g",
               "old_inventory_quantity":49,
               "requires_shipping":true
            }
         ],
         "options":[
            {
               "id":10451200645,
               "product_id":8553145605,
               "name":"Title",
               "position":1,
               "values":[
                  "Soft gold - 55e-rzg",
                  "Soft pink - y51-wr7",
                  "Metal lavender - taq-x14"
               ]
            }
         ],
         "images":[

         ],
         "image":null
      },
      {
         "id":8553137285,
         "title":"Virtual Gorgeous Concrete Tuna - Soft orange",
         "body_html":"Sequi cupiditate eligendi enim voluptate amet recusandae vitae quis officiis. Eum molestiae eum voluptas aliquam perferendis. Rerum praesentium similique rerum voluptas id id voluptatem omnis fuga. Reprehenderit enim ipsa qui dolor ut reiciendis.",
         "vendor":"Schneider - Kirlin",
         "product_type":"Beauty",
         "created_at":"2017-07-19T06:46:38-04:00",
         "handle":"virtual-gorgeous-concrete-tuna-soft-orange",
         "updated_at":"2017-07-19T06:46:38-04:00",
         "published_at":"2017-07-19T06:46:38-04:00",
         "template_suffix":null,
         "published_scope":"global",
         "tags":"data-generator",
         "variants":[
            {
               "id":35723026629,
               "product_id":8553137285,
               "title":"Plastic teal - irn-42l",
               "price":"227.00",
               "sku":"",
               "position":1,
               "grams":0,
               "inventory_policy":"deny",
               "compare_at_price":null,
               "fulfillment_service":"manual",
               "inventory_management":"shopify",
               "option1":"Plastic teal - irn-42l",
               "option2":null,
               "option3":null,
               "created_at":"2017-07-19T06:46:38-04:00",
               "updated_at":"2017-07-19T06:46:38-04:00",
               "taxable":true,
               "barcode":null,
               "image_id":null,
               "inventory_quantity":35,
               "weight":0,
               "weight_unit":"g",
               "old_inventory_quantity":35,
               "requires_shipping":false
            },
            {
               "id":35723026693,
               "product_id":8553137285,
               "title":"Wooden blue - 72r-nl0",
               "price":"117.00",
               "sku":"",
               "position":2,
               "grams":0,
               "inventory_policy":"deny",
               "compare_at_price":null,
               "fulfillment_service":"manual",
               "inventory_management":"shopify",
               "option1":"Wooden blue - 72r-nl0",
               "option2":null,
               "option3":null,
               "created_at":"2017-07-19T06:46:38-04:00",
               "updated_at":"2017-07-19T06:46:38-04:00",
               "taxable":true,
               "barcode":null,
               "image_id":null,
               "inventory_quantity":19,
               "weight":0,
               "weight_unit":"g",
               "old_inventory_quantity":19,
               "requires_shipping":false
            }
         ],
         "options":[
            {
               "id":10451190725,
               "product_id":8553137285,
               "name":"Title",
               "position":1,
               "values":[
                  "Plastic teal - irn-42l",
                  "Wooden blue - 72r-nl0"
               ]
            }
         ],
         "images":[
            {
               "id":23262293125,
               "product_id":8553137285,
               "position":1,
               "created_at":"2017-07-19T06:46:38-04:00",
               "updated_at":"2017-07-19T06:46:38-04:00",
               "width":4096,
               "height":2304,
               "src":"https:\/\/cdn.shopify.com\/s\/files\/1\/2199\/5191\/products\/man-crossing-city-street.jpg?v=1500461198",
               "variant_ids":[

               ]
            }
         ],
         "image":{
            "id":23262293125,
            "product_id":8553137285,
            "position":1,
            "created_at":"2017-07-19T06:46:38-04:00",
            "updated_at":"2017-07-19T06:46:38-04:00",
            "width":4096,
            "height":2304,
            "src":"https:\/\/cdn.shopify.com\/s\/files\/1\/2199\/5191\/products\/man-crossing-city-street.jpg?v=1500461198",
            "variant_ids":[

            ]
         }
      }
   ]
}'
        ;
        $data = json_decode($json, true);

        $date = new \DateTime();
        $csvFileName = 'files/exports/products/'.$shop.'-products-'.date('Y-m-d H.i.s').'.csv';

        $fp = fopen($csvFileName, 'w');

        $header = array("id-produit","code-ean","denomination-concise","denomination-subjective","description-concise","description-complète","url-article","url-photo1","url-photo2","url-photo3","url-photo4","url-photo5","marque","genre","classification","id-reference","disponibilite","statut-de-disponibilite","prix-ttc","ecotaxe","retractation","quantite","delai-de-reappro","delai-de-livraison","unite-delai-de-livraison","delai-d-expedition","unite-delai-d-expedition","frais-de-port","description-livraison","prix-public-generalement-constate","mots-clefs","date-heure-de-debut-promotion","date-heure-de-fin-promotion","prix-ttc-avant-promotion","promotion","pourcentage-de-la-remise","prix-remise","type-de-promotion","garantie","message-promotionnel","couleur","taille","matiere");

           fputcsv($fp, $header, "|");

        foreach($data['products'] as $product)
        {
            

            foreach($product['variants'] as $variant)

             foreach($product['images'] as $image)
             {

                $line = array();
                

                $line['id_produit'] = $product['id'];
                $line['code_ean'] = $variant['barcode'];
                $line['denomination-concise'] = $product['title'];
                $line['denomination-subjective'] = '';
                $line['description-concise'] = '';
                $line['description-complète'] = $product['body_html'];
                $line['url-article'] = '';
                $line['url-photo'] = $image['src'];
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

    

                echo '<pre>';
                print_r(($line));

                echo '</pre>';


                
                fputcsv($fp ,$line, "|");

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
