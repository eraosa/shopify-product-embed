<?php
// Prevent direct access to the file
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

function shopify_product_shortcode($atts) {
    $atts = shortcode_atts(array(
        'id' => '',
    ), $atts, 'shopify_product');

    if (empty($atts['id'])) {
        return '<!-- Shopify product ID not specified -->';
    }

    ob_start();
    ?>
    <div id="shopify-product-<?php echo esc_attr($atts['id']); ?>" class="shopify-product"></div>
    <script type="text/javascript">
        document.addEventListener("DOMContentLoaded", function() {
            if (window.ShopifyBuy && window.ShopifyBuy.UI && window.ShopifyBuyClient) {
                ShopifyBuy.UI.onReady(window.ShopifyBuyClient).then(function (ui) {
                    ui.createComponent('product', {
                        id: '<?php echo esc_js($atts['id']); ?>',
                        node: document.getElementById('shopify-product-<?php echo esc_js($atts['id']); ?>'),
                        moneyFormat: '%24%7B%7Bamount%7D%7D',
                        options: {
                            "product": {
                                "variantId": "all",
                                "width": "100%",
                                "contents": {
                                    "img": false,
                                    "imgWithCarousel": true,
                                    "title": true,
                                    "variantTitle": false,
                                    "price": true,
                                    "description": true,
                                    "buttonWithQuantity": false,
                                    "quantity": false
                                },
                                "styles": {
                                    "product": {},
                                    "button": {},
                                    "title": {},
                                    "price": {},
                                    "compareAt": {}
                                }
                            },
                            "cart": {
                                "contents": {
                                    "button": true
                                },
                                "styles": {
                                    "cart": {},
                                    "button": {},
                                    "title": {},
                                    "footer": {},
                                    "header": {},
                                    "lineItems": {},
                                    "subtotalText": {},
                                    "subtotal": {},
                                    "notice": {},
                                    "currency": {},
                                    "close": {},
                                    "emptyCart": {}
                                }
                            },
                            "modalProduct": {
                                "contents": {
                                    "img": false,
                                    "imgWithCarousel": true,
                                    "variantTitle": false,
                                    "button": false,
                                    "quantity": false
                                },
                                "styles": {
                                    "product": {},
                                    "button": {}
                                }
                            },
                            "toggle": {
                                "styles": {
                                    "toggle": {}
                                }
                            },
                            "productSet": {
                                "styles": {
                                    "products": {}
                                }
                            },
                            "lineItem": {
                                "styles": {
                                    "variantTitle": {},
                                    "title": {},
                                    "price": {},
                                    "quantity": {},
                                    "quantityIncrement": {},
                                    "quantityDecrement": {},
                                    "quantityInput": {}
                                }
                            }
                        }
                    });
                });
            }
        });
    </script>
    <?php
    return ob_get_clean();
}
add_shortcode('shopify_product', 'shopify_product_shortcode');
?>
