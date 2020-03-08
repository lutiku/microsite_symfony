<?php

namespace App\Controller;

use App\Entity\Taches;
use App\Entity\Users;
use App\Form\TachesFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class TachesController extends AbstractController
{
    /**
     * @Route("/taches", name="taches")
     */
    public function index(EntityManagerInterface $entityManager, Request $request)
    {


        $newTaches = new Taches();
        $form = $this->createForm(TachesFormType::class, $newTaches);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){
            $newTaches = $form->getData();


            $entityManager->persist($newTaches);
            $entityManager->flush();
            return $this->redirectToRoute('taches');



        }

        $taches = $this->getDoctrine()
            ->getRepository(Taches::class)
            ->findAll();




        return $this->render('taches/index.html.twig', [
            'controller_name' => 'TachesController',
            'taches' => $taches,
            'tachesForm' =>$form->createView(),
        ]);
    }


    /**
     * @Route("/taches/update/{id}", name="updateTaches")
     */

    public function edit($id, Request $request, EntityManagerInterface $entityManager)
    {
        $tache = $this->getDoctrine()->getRepository(Taches::class)->find($id);
        $userRepository = $this->getDoctrine()->getRepository(Users::class);
        $user = $userRepository;

        $form = $this->createForm(TachesFormType::class, $tache) ;
        $form->handleRequest($request) ;


        if($form->isSubmitted() && $form->isValid())
        {
            $user =$userRepository->find($request->request->get('tacheId'));
            $newTache = $form->getData();
            $newTache->setCategorieId($user);

            $entityManager->persist($newTache);
            $entityManager->flush();

            return $this->redirectToRoute('updatesTaches') ;
        }

        return $this->render('taches/update.html.twig',[
            'taches' =>$tache,
            'formUpdate' => $form->createView(),
        'users'=>$user


            ]);
    }



}
