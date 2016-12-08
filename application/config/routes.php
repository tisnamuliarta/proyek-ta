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

// create a function to get the controller's listing
// so we could exclude it from the url alias
// function __get_reserved_uri ($directory)
// {
//     $results = array();
//     $handler = opendir ($directory);
 
//     // open directory and walk through the filenames
//     while ($file = readdir($handler))
//     {
//         // if file isn't this directory or its parent, add it to the results
//         if ($file != "." && $file != "..")
//         {
//             $results[] = basename ($file, ".php");
//         }
//     }
 
//     // tidy up: close the handler
//     closedir ($handler);
 
//     // create a handler for the directory
//     $handler = opendir (FCPATH);
 
//     // open directory and walk through the filenames
//     while ($file = readdir($handler))
//     {
//         // if file isn't this directory or its parent, add it to the results
//         if ($file != "." && $file != "..")
//         {
//             $results[] = basename ($file);
//         }
//     }
 
//     // tidy up: close the handler
//     closedir ($handler);
 
//     // done!
//     return $results;
// }
 
 
// $controllers_dir = "./application/controllers/";
 
// // break the uri manually
// // notes: this is for $config['uri_protocol'] = 'PATH_INFO;
// //       if you modify the variables above in config.php
// //       you have to modify the lines below
// $path = (isset($_SERVER['PATH_INFO'])) ? $_SERVER['PATH_INFO'] : @getenv('PATH_INFO');
// $uri = explode ("/", $path);
// // end uri config
 
 
// if ( count ($uri) == 2 && ! in_array ($uri[1], __get_reserved_uri ($controllers_dir)))
// {
//     $route[$uri[1]] = "member/show/{$uri[1]}";
// }


