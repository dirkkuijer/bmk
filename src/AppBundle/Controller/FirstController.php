<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkeBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class FirstController extends DefaultController 
{
        
    /**
     * @Route ("/", name="login")
     */
    public function naamWeergeven() 
    {
    

        return $this->render('base.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
        
    }

    public function selectMember() 
    {
       
        $selectMember = new CrudMember();    

        return $selectMember->readMember;
    }


}

?>