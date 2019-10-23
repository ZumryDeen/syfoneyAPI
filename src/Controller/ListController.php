<?php

namespace App\Controller;

use App\Repository\TaskListRepository;
use FOS\RestBundle\Controller\AbstractFOSRestController;

use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Component\Routing\Annotation\Route;

class ListController extends AbstractFOSRestController
{

    /**
     * @var TaskListRepository
     */
    private $taskListRepository;

    public  function __construct(TaskListRepository $taskListRepository)
    {


        $this->taskListRepository = $taskListRepository;
    }


    public function getListsAction()
    {

        return $this->taskListRepository->findAll();
    }

    public function getListTaskAction(int $id)
    {

    }



}
