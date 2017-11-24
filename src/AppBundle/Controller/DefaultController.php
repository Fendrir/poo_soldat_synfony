<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $monArmee = new Fantassin(2);
        var_dump($monArmee->getEquipement());
        var_dump($monArmee->getRace());
        var_dump($monArmee->getUpdateArmure());
        echo "</br>";
        
        $monArmee1 = new Griffon(2);
        var_dump($monArmee1->getEquipement());
        var_dump($monArmee1->getRace());
        var_dump($monArmee1->getUpdateArmure());
        echo "</br>";
        
        $monArmee2 = new Fusilier(3);
        var_dump($monArmee2->getEquipement());
        var_dump($monArmee2->getRace());
        var_dump($monArmee2->getUpdateArmure());
        echo "</br>";
        
        $monArmee3 = new Chevalier(2);
        var_dump($monArmee3->getEquipement());
        var_dump($monArmee3->getRace());
        var_dump($monArmee3->getUpdateArmure());
        echo "</br>";
        
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }
}
