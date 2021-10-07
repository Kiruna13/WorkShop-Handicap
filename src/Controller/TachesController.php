<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\TachesType;

class TachesController extends AbstractController
{
    /**
     * @Route("/taches", name="taches")
     */
    public function index(): Response
    {   
        $form = $this->createForm(TachesType::class);
        return $this->render('taches/index.html.twig', [
            'form' => $form->createView()
        ]);
    }
}
