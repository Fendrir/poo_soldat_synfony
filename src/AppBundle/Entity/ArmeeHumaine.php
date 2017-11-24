<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Armee_Humaine
 *
 * @ORM\Table(name="armee_humaine")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ArmeeHumaineRepository")
 */
class ArmeeHumaine
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * Toutes les côtes sont en maille par défault
     * 
     * @var string
     *
     * @ORM\Column(name="armure", type="string", length=255)
     */
    private $armure;                                

    /**
     * L'amure peut être update jusqu'a 3 max et est à 0 par défault
     * @var int
     *
     * @ORM\Column(name="updateArmure", type="integer")
     */
    private $updateArmure=0;

    /**
     * L'arme sera définie dans chacune des class différentes
     * 
     * @var string
     *
     * @ORM\Column(name="armePrincipale", type="string", length=255)
     */
    protected $armePrincipale;

    /**
     * L'armée humaine peut avoir des humains et des nains pour les griffons  les humains sont par defaut
     * 
     * @var string
     *
     * @ORM\Column(name="race", type="string", length=255)
     */
    protected $race="humain";

    public function __construct($updateArmure)
    {
        $this->setUpdateArmure($updateArmure);

    }

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set updateArmure
     * 
     * @param int $updateArmure
     *
     * @return ArmeeHumaine
     */
    public function setUpdateArmure($updateArmure)
    {

        $this->updateArmure=$updateArmure;

    }

    /**
     * Get updateArmure
     *
     * @return int
     */
    public function getUpdateArmure()
    {

        return "Niveau d'armure : ".$this->updateArmure;

    }

    /**
     * Set race
     *
     * @param string $race
     *
     * @return ArmeeHumaine
     */

    public function setRace($race)
    {

        $this->race=$race;

    }

    /**
     * Get race
     *
     * @return string
     */
    public function getRace()
    {

        return "Race : ".$this->race;

    }

    /**
     * Set equipement
     * 
     * @param string $armePrincipale
     *
     * @return ArmeeHumaine
     */
    public function setEquipement($armePrincipale)
    {

        $this->armePrincipale=$armePrincipale;
        $this->armure="côte de maille";

        return $this;

    }

    /**
     * Get equipement
     * 
     * @return string
     */
    public function getEquipement()
    {

        return
                "Arme principale : ".$this->armePrincipale.
                "Armure : ".$this->armure;

    }
    
}