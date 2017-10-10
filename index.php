<?php
/**
 * Created by PhpStorm.
 * User: jim
 * Date: 31.08.17
 * Time: 0:33
 */
require_once 'route.php';

$route = new Route();

$route->add('/', 'Home');
$route->add('/about', 'About');
$route->add('/contact', 'Contact');

echo '<pre>';
print_r($route);

$route->submit();
