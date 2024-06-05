<?php
// Prevent direct access to the file
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

function enqueue_shopify_script() {
    ?>
    <script type="text/javascript">
        (function () {
            var scriptURL = 'https://sdks.shopifycdn.com/buy-button/latest/buy-button-storefront.min.js';
            if (window.ShopifyBuy) {
                if (window.ShopifyBuy.UI) {
                    ShopifyBuyInit();
                } else {
                    loadScript();
                }
            } else {
                loadScript();
            }

            function loadScript() {
                var script = document.createElement('script');
                script.async = true;
                script.src = scriptURL;
                (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(script);
                script.onload = ShopifyBuyInit;
            }

            function ShopifyBuyInit() {
                var client = ShopifyBuy.buildClient({
                    domain: 'yourLink.myshopify.com', // Replace with your store domain
                    storefrontAccessToken: 'XXXXXXXX881840d8edXXXXXX', // Replace with your access token
                });
                window.ShopifyBuyClient = client;
            }
        })();
    </script>
    <?php
}
add_action('wp_head', 'enqueue_shopify_script');
?>
