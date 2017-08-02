<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['about'] = 'pages/about';
$route['contact'] = 'pages/contact';
$route['faq-details'] = 'pages/answer';
$route['how-it-works'] = 'pages/works';
$route['what-is-the-difference-between-theme-based-store-design-and-custom-design'] = 'pages/faq1';
$route['do-you-provide-one-off-design-service'] = 'pages/faq2';
$route['how-to-add-more-apps-or-build-new-functionality-after-you-design-the-store'] = 'pages/faq3';
$route['what-would-you-do-in-SEO-SMO-and-PPC'] = 'pages/faq4';
$route['do-you-migrate-the-store-from-another-shopping-cart-to-shopify'] = 'pages/faq5';
$route['do-you-product-photography-as-well'] = 'pages/faq6';
$route['can-i-cancel-the-monthly-subscription-anytime'] = 'pages/faq7';
$route['i-couldnt-find-the-app-which-i-want-to-get-installed-on-my-store'] = 'pages/faq8';
$route['i-need-custom-functionality-how-can-i-get-that-with-your-service'] = 'pages/faq9';
$route['do-you-develop-shopify-apps'] = 'pages/faq10';
$route['how-to-create-new-support-ticket'] = 'pages/faq11';
$route['where-are-my-support-tickets'] = 'pages/faq12';
$route['what-is-your-turn-around-time-for-fixing-an-issue'] = 'pages/faq13';
$route['can-i-pay-using-debit-card-for-monthly-subscription-plan'] = 'pages/faq14';

