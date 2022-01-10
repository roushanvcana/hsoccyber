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
//$route['default_controller'] = 'Login/index';
$route['default_controller'] = 'Website/home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;



/////////////////Admin panel////////////////////
$route['admin'] = 'Login/index';
$route['dashboard'] = 'Home/index';
$route['admin-logout'] = 'Home/logout';
$route['forget-password'] = 'Login/forgetPassword';
$route['manage-admin'] = 'Admin/index';
$route['admin-delete/(:num)'] = 'Admin/delete/$1';
$route['add-admin'] = 'Admin/addAdmin';
$route['edit-admin/(:num)'] = 'Admin/editAdmin/$1';
$route['website-settings'] = 'Website_setting/index';
$route['add-website-setting'] = 'Website_setting/add_websetting';
$route['slider'] = 'Slider/index';
$route['add-slider'] = 'Slider/add_slider';
$route['slider-delete/(:num)'] = 'Slider/delete_slider/$1';
$route['slider-edit/(:num)'] = 'Slider/edit_slider/$1';
$route['website-delete/(:num)'] = 'Website_setting/delete_website/$1';
$route['website-edit/(:num)'] = 'Website_setting/website_edit/$1';

$route['slider-box'] = 'Slider/slider_box';
$route['add-slider-box'] = 'Slider/add_slider_box';
$route['edit-slider-box/(:num)'] = 'Slider/update_slider_box/$1';
$route['sliderbox-delete/(:num)'] = 'Slider/delete_slider_box/$1';

$route['brand-section'] = 'Slider/brand_list';
$route['add-brand'] = 'Slider/add_brand';
$route['edit-brand/(:num)'] = 'Slider/edit_brand/$1';
$route['brand-delete/(:num)'] = 'Slider/delete_brand/$1';

$route['about-me'] = 'Slider/about_mes';
$route['add-about'] = 'Slider/add_about_mes';
$route['edit-about/(:num)'] = 'Slider/edit_about_mes/$1';
$route['about-delete/(:num)'] = 'Slider/delete_about/$1';

$route['service'] = 'Service/index';
$route['add-service'] = 'Service/add_service';
$route['service-delete/(:num)'] = 'Service/delete_service/$1';
$route['service-edit/(:num)'] = 'Service/edit_service/$1';

$route['feature']  = 'Service/feature';
$route['feature-details'] = 'Service/feature_details';
$route['add-feature-details'] = 'Service/add_feature_details';

$route['feature-details-delete/(:num)'] = 'Service/delete_feature/$1';
$route['feature-details-edit/(:num)'] = 'Service/feature_edit_details/$1';


$route['home'] = 'Website/home';
$route['about'] = 'Website/about';
$route['services'] = 'Website/services';
$route['contact'] = 'Website/contact';
$route['prerequest'] = 'Website/prerequest';












