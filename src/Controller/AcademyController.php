<?php

namespace App\Controller;

use App\Entity\Academy;
use App\Form\AcademyType;
use App\Repository\AcademyRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/academy")
 */
class AcademyController extends AbstractController
{
    /**
     * @Route("/", name="academy_index", methods="GET")
     */
    public function index(AcademyRepository $academyRepository): Response
    {
        return $this->render('academy/index.html.twig', ['academies' => $academyRepository->findAll()]);
    }

    /**
     * @Route("/new", name="academy_new", methods="GET|POST")
     */
    public function new(Request $request): Response
    {
        $academy = new Academy();
        $form = $this->createForm(AcademyType::class, $academy);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($academy);
            $em->flush();

            return $this->redirectToRoute('academy_index');
        }

        return $this->render('academy/new.html.twig', [
            'academy' => $academy,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="academy_show", methods="GET")
     */
    public function show(Academy $academy): Response
    {
        return $this->render('academy/show.html.twig', ['academy' => $academy]);
    }

    /**
     * @Route("/{id}/edit", name="academy_edit", methods="GET|POST")
     */
    public function edit(Request $request, Academy $academy): Response
    {
        $form = $this->createForm(AcademyType::class, $academy);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('academy_edit', ['id' => $academy->getId()]);
        }

        return $this->render('academy/edit.html.twig', [
            'academy' => $academy,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="academy_delete", methods="DELETE")
     */
    public function delete(Request $request, Academy $academy): Response
    {
        if ($this->isCsrfTokenValid('delete'.$academy->getId(), $request->request->get('_token'))) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($academy);
            $em->flush();
        }

        return $this->redirectToRoute('academy_index');
    }
}
