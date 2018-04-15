  <?php

use Symfony\Component\Routing;

$routes = new Routing\RouteCollection;

$routes->add('home', new Routing\Route('/books/{page}/{test}', array(
    'page' => 1,
    'name' => 'janek',
    '_controller' => 'Books\\Controller\\BooksController::indexAction'
)));


return $routes;
