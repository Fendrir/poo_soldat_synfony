<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Fantassin;
use AppBundle\Entity\Griffon;

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
        $griffon = new Griffon(3);
        return $this->render('AppBundle:Armee:new.html.twig', array(
            "fantassin" => $fantassin,
            "fantassin2" => $fantassin2,
            "griffon" => $griffon
        ));
    }

    /**
     * @Route("/delete")
     */
    public function deleteAction()
    {
        
        unset($griffon);

        return $this->render('AppBundle:Armee:delete.html.twig', array(
        ));
    }

}
