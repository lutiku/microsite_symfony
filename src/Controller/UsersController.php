<?php

namespace App\Controller;

use App\Entity\Users;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

/* /**
 * Class UsersController
 * @package App\Controller
 * @Route("/user-profil", name="profil_")
 */


class UsersController extends AbstractController
{
    /**
     * @Route("/profil-user", name="users")
     */
    public function index()
    {


        return $this->render('users/index.html.twig', [
            'controller_name' => 'UsersController',
        ]);
    }

    /**
     * @Route("/user/see/{id}", name="userFile")
     */

    public function returnUserFiche($id, Request $request, EntityManagerInterface $entityManager)
    {
        $tache = $this->getDoctrine()->getRepository(Users::class)->find($id);
        $userRepository = $this->getDoctrine()->getRepository(Users::class);
        $user = $userRepository;



        return $this->render('main/userFile.html.twig', [
            'users' => $user,
            'id'=>$id,


        ]);
    }


}
