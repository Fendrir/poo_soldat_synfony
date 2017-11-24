<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Fantassin;

/**
 * @Route("/armee")
 */
class ArmeeController extends Controller
{
    /**
     * @Route("/new")
     */
    public function newAction()
    {
        $fantassin = new Fantassin(1);
        $fantassin2 = new Fantassin(2);
        return $this->render('AppBundle:Armee:new.html.twig', array(
            "fantassin" => $fantassin,
            "fantassin2" =>$fantassin2
        ));
    }

    /**
     * @Route("/delete")
     */
    public function deleteAction()
    {
        return $this->render('AppBundle:Armee:delete.html.twig', array(
            // ...
        ));
    }

}
