<?php

namespace Books\Controller;
use Symfony\Component\HttpFoundation\Response;
use Books\Model\Books;

class BooksController
{
    public function indexAction($page, $test)
    {
        $model = new Books();
        $data = $model->getList();
        return new Response($page . ' --- ' . $test);
    }
}