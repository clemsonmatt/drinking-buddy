<?php

namespace App\Controller\Manage;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * @Route("/manage/people")
 */
class PersonController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->render('manage/person/index.html.twig', [
            'people' => [],
        ]);
    }
}
