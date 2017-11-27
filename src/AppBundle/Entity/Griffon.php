<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Product
 *
 * @ORM\Table(name="griffon")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\GriffonRepository")
 */
class Griffon extends ArmeeHumaine
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

        $this->setEquipement(" marteau enchanté ");
        $this->setRace(" Nain ");
        $this->setUpdateArmure($updateArmure);

    }

    public function __destruct()
    {
         $messageMort = "Muaargh";
    }

}