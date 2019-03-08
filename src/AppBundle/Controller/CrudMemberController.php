<?php

namespace AppBundle\Controller; 

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CrudMemberController extends Controller
{
    /**
     * @Route ("/", name="index")
     */
       public function selectMember() {

              $members = $this->getDoctrine()->getRepository('AppBundle:MemberData')->findAll();

       
              return $this->render('base.html.twig', [
                     'members'=> $members
              ]);
       }
       
//       Ook hier vragen of het goed is wat je doen en of het niet anders moet.
        public function showImage() {
              
              $image = "../Images/header.jpg";

              return $this->render('base.html.twig', ['image' => $image]);
       }

}



?>