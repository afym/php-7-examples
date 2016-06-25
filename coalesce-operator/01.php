<?php

class Controller
{
    public function indexAction($request)
    {
       $page = isset($request['page']) ? $request['page'] : 1;

       return "Listing page number {$page} \n";
    }
}

$controller = new Controller();

echo $controller->indexAction([]);
echo $controller->indexAction(null);
echo $controller->indexAction(['page' => 12]);
