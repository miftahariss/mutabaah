<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
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
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['default_controller'] = "frontend";
$route['login'] = "frontend/login";
$route['logout'] = "frontend/logout";
$route['forgotpassword'] = "frontend/forgotpassword";
$route['passwordreset/:any'] = "frontend/passwordreset";
$route['registervalidator/:any'] = "frontend/registervalidator";
$route['registersukses'] = "frontend/registersukses";
$route['signup'] = "frontend/signup";

$route['mutabaah'] = "frontend/mutabaah";
$route['404_override'] = '';

$route['cewekbanget'] = "frontend/cewekbanget";
$route['cewekbanget/(:any)'] = "frontend/cewekbanget";
$route['gallery'] = "frontend/gallery";
$route['gallery/(:any)'] = "frontend/gallery";
$route['rules'] = "frontend/rules";
$route['register'] = "frontend/register";
$route['detail'] = "frontend/detail";
$route['detail/(:any)'] = 'frontend/detail';
$route['thanks'] = "frontend/thanks";


/* End of file routes.php */
/* Location: ./application/config/routes.php */