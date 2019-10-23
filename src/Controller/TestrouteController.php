<?php

namespace App\Controller;

use FOS\RestBundle\Controller\AbstractFOSRestController;

use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Component\Routing\Annotation\Route;


class TestrouteController extends AbstractFOSRestController
{




    /**
     * @Route("/list", name="list")
     */
    public function index()
    {
        return $this->json([
            'message'=>'Welcome to new Controller',
            'path'=>'ListController'
        ]);
    }

    // this is accees from FOS Recipt
    /**
     * @Rest\Get("/update",name="app.update")
     */
    public function update()
    {
        return $this->json([
            'message'=>'updateController',
            'path'=>'Update'
        ]);
    }


}
