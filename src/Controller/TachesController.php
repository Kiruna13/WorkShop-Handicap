<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\TachesType;
use App\Entity\Taches;
use Symfony\Component\HttpFoundation\Request;
use App\Controller\TachesController;
use Doctrine\ORM\EntityManagerInterface;

class TachesController extends AbstractController
{
    /**
     * @Route("/taches", name="taches")
     */
    public function index(Request $request, EntityManagerInterface $entityManager): Response
    {
    $tache = new Taches();
    $form = $this->createForm(TachesType::class, $tache);
    $form->handleRequest($request);
    if ($form->isSubmitted() && $form->isValid()){

        $this->addFlash('success', 'Tâche ajouté avec succès' );
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($tache);
        $entityManager->flush();
        return $this->redirectToRoute('app');
    }
    return $this->render('taches/index.html.twig', [
        'form' => $form->createView()
    ]);
    }



  
    }

