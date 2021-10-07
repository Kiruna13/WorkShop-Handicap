<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\UserType;
use App\Entity\User;
use Symfony\Component\HttpFoundation\Request;
use App\Controller\FormController;
use Doctrine\ORM\EntityManagerInterface;


class FormController extends AbstractController
{
    /**
     * @Route("/form", name="form")
     */
    public function index(Request $request, EntityManagerInterface $entityManager): Response
    {
    $user = new User();
    $form = $this->createForm(UserType::class, $user);
    $form->handleRequest($request);
    if ($form->isSubmitted() && $form->isValid()){

        $this->addFlash('success', 'Patient ajouté avec succès' );
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($user);
        $entityManager->flush();
        return $this->redirectToRoute('app');
    }
    return $this->render('form/index.html.twig', [
        'form' => $form->createView()
    ]);
    }

}
