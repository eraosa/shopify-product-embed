# Shopify Product Embed

This plugin allows you to easily embed Shopify single, multiple or collection products on your WordPress site using shortcodes.

## Features

- Embed individual products or collections.
- Use the Shopify Buy Button to enable product purchases directly from your WordPress site.
- Compatible with all WordPress themes.

## Requirements

- WordPress 4.7 or higher
- A Shopify store


## Installation

1. Download the plugin and upload it to your WordPress site's `/wp-content/plugins/` directory.
2. Activate the plugin in your WordPress admin panel.

## Usage

To embed a product, use the following shortcode in your WordPress posts or pages:

```[shopify_product id="YOUR_PRODUCT_ID"]```

### Example

```[shopify_product id="1234567890"]```

## Shopify Buy Button

The plugin is compatible with the Shopify Buy Button, which allows you to enable product purchases directly from your WordPress site. To learn more about the Shopify Buy Button, please visit the [Shopify documentation](https://help.shopify.com/en/manual/products/details/buy-button).

## Documentation

For more information, please refer to the [plugin's documentation](https://github.com/eraosa/shopify-product-embed).

## Contributing

We welcome contributions to this plugin. Please see the contributing guidelines for more information.

## License

This plugin is licensed under the GNU General Public License (GPL).

## Keywords

Shopify, product embed, WordPress, shortcode, buy button, ecommerce

## Additional Notes

- Replace `YOUR_PRODUCT_ID` with the actual ID of the product you want to embed.
In the "shopify-product-embed-scripts.php" file, under "function ShopifyBuyInit()", update with your shopify domain url and storefrontAccessToken.

## Support

If you have any questions or need assistance, please create an issue on the plugin's [GitHub repository](https://github.com/eraosa/shopify-product-embed/issues).

## Screenshots

### Screenshot 1
[View screenshot](assets/screenshots/screenshot1.jpg)
Example of an embedded product.

### Screenshot 2
[View screenshot](assets/screenshots/screenshot2.jpg)
Example of Cart logic.

### Screenshot 
[View screenshot](assets/screenshots/screenshot3.jpg)
Example full embeded view.

## Changelog

### Version 1.0.0 (2024-06-5)
- Initial release.

## Credits

Developed by [Era Osa](https://eraosa.com/)

## Disclaimer

This plugin is provided "as is" without warranty of any kind. The authors of this plugin are not responsible for any damages caused by the use of this plugin.

## Links

- [Era Osa website](https://eraosa.com)
- [Shopify Product Embed plugin on GitHub](https://github.com/eraosa/shopify-product-embed)
- [Shopify Buy Button documentation](https://help.shopify.com/en/manual/products/details/buy-button)
