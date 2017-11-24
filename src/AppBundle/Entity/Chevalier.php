<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Product
 *
 * @ORM\Table(name="chevalier")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ChevalierRepository")
 */
class Chevalier extends ArmeeHumaine
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

        $this->setEquipement(" épée lourde ");
        $this->setUpdateArmure($updateArmure);

    }

}