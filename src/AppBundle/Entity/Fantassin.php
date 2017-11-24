<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Product
 *
 * @ORM\Table(name="fantassin")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\FantassinRepository")
 */
class Fantassin extends ArmeeHumaine
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    public function __construct( $updateArmure )
    {

        $this->setEquipement(" épée courte ");
        $this->setUpdateArmure($updateArmure);

    }

}