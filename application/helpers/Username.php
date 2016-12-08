<?php
// create a function to get the controller's listing
// so we could exclude it from the url alias
function __get_reserved_uri ($directory)
{
    $results = array();
    $handler = opendir ($directory);
 
    // open directory and walk through the filenames
    while ($file = readdir($handler))
    {
        // if file isn't this directory or its parent, add it to the results
        if ($file != "." && $file != "..")
        {
            $results[] = basename ($file, ".php");
        }
    }
 
    // tidy up: close the handler
    closedir ($handler);
 
    // create a handler for the directory
    $handler = opendir (FCPATH);
 
    // open directory and walk through the filenames
    while ($file = readdir($handler))
    {
        // if file isn't this directory or its parent, add it to the results
        if ($file != "." && $file != "..")
        {
            $results[] = basename ($file);
        }
    }
 
    // tidy up: close the handler
    closedir ($handler);
 
    // done!
    return $results;
}
 
 
$controllers_dir = "./application/controllers/";
 
// break the uri manually
// notes: this is for $config['uri_protocol'] = 'PATH_INFO;
//       if you modify the variables above in config.php
//       you have to modify the lines below
$path = (isset($_SERVER['PATH_INFO'])) ? $_SERVER['PATH_INFO'] : @getenv('PATH_INFO');
$uri = explode ("/", $path);
// end uri config
 
 
if ( count ($uri) == 2 && ! in_array ($uri[1], __get_reserved_uri ($controllers_dir)))
{
    $route[$uri[1]] = "member/show/{$uri[1]}";
}
