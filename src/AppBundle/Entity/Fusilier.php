<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Product
 *
 * @ORM\Table(name="fusilier")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\FusilierRepository")
 */
class Fusilier extends ArmeeHumaine
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;


    public function __construct($updateArmure)
    {

        $this->setEquipement(" fusil ");
        $this->setRace(" Nain ");
        $this->setUpdateArmure($updateArmure);

    }

}