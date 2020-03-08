<?php

namespace App\Controller;

use App\Entity\Taches;
use App\Entity\Users;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="accueil")
     */
    public function index()
    {
        //On appelle la liste de tous nos users


        $users = $this->getDoctrine()->getRepository(Users::class)->findAll();
        $taches = $this->getDoctrine()->getRepository(Taches::class)->findAll();


        return $this->render('main/index.html.twig', [
            'users' => $users,
            'taches' => $taches
        ]);
    }

  /*  /**
     * @Route("/profil", name="profil")

    public function profil()
    {
        return $this->render('main/profil.html.twig') ;
    }
  */
}
