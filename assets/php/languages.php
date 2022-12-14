<?php
require_once 'session.php';
session_start();

class lang
{
    public function __construct()
    {
        $Default_languages = 'EN';

        $avaliable_languages = ['EN', 'RO'];

        $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

        if (isset($_GET['lang'])) {
            switch ($_GET['lang']) {
                case $_GET['lang'] == 'EN' or $_GET['lang'] == 'en':
                    $_SESSION['lang'] = 'EN';
                    $_SESSION['curency'] = 'EUR';
                    // header('location:' . $actual_link);
                    break;
                case $_GET['lang'] == 'RO' or $_GET['lang'] == 'ro':
                    $_SESSION['lang'] = 'RO';
                    $_SESSION['curency'] = 'RON';
                    break;
            }
        }

        if (isset($_SESSION['lang'])) {
            switch ($_SESSION['lang']) {
                case 'EN':
                    $words = [
                        'header' => [
                            'Sign In' => 'Sign In',
                            'settings' => 'settings',
                            'language' => 'language',
                            'HOME' => 'HOME',
                            'SHOP' => 'SHOP',
                            'Products' => 'Products',
                            'SALE' => 'FOR SALE',
                            'CONTACT US' => 'CONTACT US',
                        ],

                        'MainPage' => [
                            'SURPRISE GIFT for orders above' => 'SURPRISE GIFT for orders above',
                            'Buy' => 'Buy',
                            'Free Shipping' => 'Free Shipping',
                            'Free Returns' => 'Free Returns',
                            'Support 24/7' => 'Support 24/7',
                            'On all orders over $75.00' =>
                            'On all orders over $75.00',
                            'Returns are free within 9 days' =>
                            'Returns are free within 9 days',
                            'Contact us 24 hours a day' =>
                            'Contact us 24 hours a day',
                            '100% Payment Secure' => '100% Payment Secure',
                            'Your payment are safe with us.' =>
                            'Your payment are safe with us.',
                            'Our Products' => 'Our Products',
                            'New Products' => 'New Products',
                        ],

                        'cart' => [
                            'Your Shopping Cart' => 'Your Shopping Cart',
                            'Your Shopping Cart is empty' =>
                            'Your Shopping Cart is empty',
                            'Your Cart Items' => 'Your Cart Items',
                            'Image' => 'Image',
                            'Product' => 'Product',
                            'Quantity' => 'Quantity',
                            'Price' => 'Price',
                            'Remove' => 'Remove',
                            'Cart Totals' => 'Cart Totals',
                            'Subtotal' => 'Subtotal',
                            'Total' => 'Total',
                            'Proceed to Checkout' => 'Proceed to Checkout',
                            'Update Cart' => 'Update Cart',
                            'Continue Shopping' => 'Continue Shopping',
                            'Clear Cart' => 'Clear Cart',
                            'Go back to the store' => 'Go back to the store',
                            'To add products to the basket, please return to the store.' =>
                            'To add products to the basket, please return to the store.',
                        ],

                        'WishList' => [
                            'Your wishlist is currently empty!' => 'Your wishlist is currently empty!',
                            'To add products to the wishlist, please return to the store.' => 'To add products to the wishlist, please return to the store.',
                            'Go back to the store' => 'Go back to the store'
                        ],

                        'checkout' => [
                            'Cart' => 'Cart',
                            'Information' => 'Information',
                            'Shipping' => 'Shipping',
                            'Payment' => 'Payment',
                            'Contact information' => 'Contact information',
                            'Already have an account?' =>
                            'Already have an account?',
                            'Login' => 'Login',
                            'Phone number' => 'Phone number',
                            'Shipping address' => 'Shipping address',
                            'country/region' => 'country/region',
                            'Address' => 'Address',
                            'Apartment, suite, etc. (optional)' =>
                            'Apartment, suite, etc. (optional)',
                            'Postal code' => 'Postal code',
                            'city' => 'city',
                            'Save this information for next time' =>
                            'Save this information for next time',
                            'Return to cart' => 'Return to cart',
                            'Continue to shipping' => 'Continue to shipping',
                        ],

                        'footer' => [
                            'Information' => 'Information',
                            'About Us' => 'About Us',
                            'Payment' => 'Payment',
                            'Contact Us' => 'Contact Us',
                            'Stores' => 'Stores',
                            'Social Links' => 'Social Links',
                            'New Products' => 'New Products',
                            'Best Sales' => 'Best Sales',
                            'Login' => 'Login',
                            'My Account' => 'My Account',
                            'Newsletter' => 'Newsletter',
                            'Subcribe to the TheFace mailing list to receive update on new arrivals, special offers and other discount information.' =>
                            'Subcribe to the TheFace mailing list to receive update on new arrivals, special offers and other discount information.',
                            'Subscribe' => 'Subscribe',
                        ],
                    ];
                    break;
                case 'RO':
                    $words = [
                        'header' => [
                            'Sign In' => 'Conectare',
                            'settings' => 'set??ri',
                            'language' => 'limb??',
                            'HOME' => 'ACAS??',
                            'SHOP' => 'MAGAZIN',
                            'Products' => 'Produse',
                            'SALE' => 'LA REDUCERE',
                            'BLOG' => 'BLOG',
                            'CONTACT US' => 'CONTACTA??I-NE',
                        ],

                        'MainPage' => [
                            'SURPRISE GIFT for orders above' => 'CADOU SURPRIZA la comenzi de peste',
                            'Buy' => 'Cump??r??',
                            'Free Shipping' => 'Transport gratuit',
                            'Free Returns' => 'Return??ri gratuite',
                            'Support 24/7' => 'Asisten???? 24/7',
                            'On all orders over $75.00' =>
                            'La toate comenzile de peste 75,00 USD',
                            'Returns are free within 9 days' =>
                            'Return??rile sunt gratuite ??n 9 zile',
                            'Contact us 24 hours a day' =>
                            'Contacta??i-ne 24 de ore pe zi',
                            '100% Payment Secure' => 'Plata 100% sigura',
                            'Your payment are safe with us.' =>
                            'Plata dvs. este ??n siguran???? cu noi.',
                            'Our Products' => 'Produsele noastre',
                            'New Products' => 'Produse noi',
                        ],

                        'cart' => [
                            'Your Shopping Cart' => 'Co??ul t??u de cump??r??turi',
                            'Your Shopping Cart is empty' =>
                            'Co??ul T??u De Cump??r??turi este gol',
                            'Your Cart Items' => 'Articolele din co??ul dvs',
                            'Image' => 'Imagine',
                            'Product' => 'Produs',
                            'Quantity' => 'Cantitate',
                            'Price' => 'Pre??',
                            'Remove' => 'Elimina',
                            'Cart Totals' => 'Totalurile co??ului',
                            'Subtotal' => 'Subtotal',
                            'Total' => 'Total',
                            'Proceed to Checkout' =>
                            'Finalizeaz?? cump??r??turile',
                            'Update Cart' => 'Actualiza??i co??ul',
                            'Continue Shopping' => 'Continua cumparaturile',
                            'Clear Cart' => '??terge??i co??ul',
                            'Go back to the store' => 'Intoarce-te in magazin',
                            'To add products to the basket, please return to the store.' =>
                            'Pentru a adauga produse in cos te rugam sa te intorci in magazin.',
                        ],

                        'WishList' => [
                            'Your wishlist is currently empty!' => 'Lista ta de dorin??e este momentan goal??!',
                            'To add products to the wishlist, please return to the store.' => 'Pentru a ad??uga produse ??n lista de dorin??e, v?? rug??m s?? reveni??i la magazin.',
                            'Go back to the store' => 'Intoarce-te in magazin'
                        ],

                        'checkout' => [
                            'Cart' => 'Cart',
                            'Information' => 'informa??ie',
                            'Shipping' => 'Transport',
                            'Payment' => 'Plat??',
                            'Contact information' => 'Informatii de contact',
                            'Already have an account?' => 'ai deja un cont?',
                            'Login' => 'Autentificare',
                            'Phone number' => 'Num??r de telefon',
                            'Shipping address' => 'Adresa de transport',
                            'country/region' => 'tara/regiune',
                            'Address' => 'adresa',
                            'Apartment, suite, etc. (optional)' =>
                            'Apartament, strada etc. (optional)',
                            'Postal code' => 'Cod postal',
                            'city' => 'ora??',
                            'Save this information for next time' =>
                            'Salva??i aceste informa??ii pentru data viitoare',
                            'Return to cart' => '??ntoarce-te la co??',
                            'Continue to shipping' =>
                            'Continua??i cu expedierea',
                        ],

                        'footer' => [
                            'Information' => 'informa??ie',
                            'About Us' => 'Despre noi',
                            'Payment' => 'Plat??',
                            'Contact Us' => 'Contacta??i-ne',
                            'Stores' => 'Magazine',
                            'Social Links' => 'Linkuri sociale',
                            'New Products' => 'Produse noi',
                            'Best Sales' => 'Cele mai bune v??nz??ri',
                            'Login' => 'Autentificare',
                            'My Account' => 'Contul meu',
                            'Newsletter' => 'Buletin informativ',
                            'Subcribe to the TheFace mailing list to receive update on new arrivals, special offers and other discount information.' =>
                            'Abona??i-v?? la lista de coresponden???? TheFace pentru a primi actualiz??ri cu privire la noile sosiri, oferte speciale ??i alte informa??ii despre reduceri.',
                            'Subscribe' => 'Abonati-va',
                        ],
                    ];
                    break;
                default:
                    break;
            }
        } else {
            $_SESSION['lang'] = 'EN';
            $_SESSION['curency'] = 'EUR';
            header('refresh:0;');
        }

        return $this->words = $words;
    }
}

$lang = new lang;
