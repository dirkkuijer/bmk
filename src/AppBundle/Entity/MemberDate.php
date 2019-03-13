<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
// Form validation
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Mapping\ClassMetadata;
    
    

/**
 * MemberDate
 *
 * @ORM\Table(name="member_date")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\MemberDateRepository")
 * 
 */
class MemberDate
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
     * @var string
     * @Assert\NotBlank(message="Vul het onderstaande veld in aub.")
     * @Assert\Type(
     *     type="string",
     *     message="Cijfers zijn niet toegestaan. {{ type }}"
     * )
     * @ORM\Column(name="voornaam", type="string", length=50)
     */
    private $voornaam;

    /**
     * @var string
     * @Assert\NotBlank(message="Vul het onderstaande veld in aub.")
     * @ORM\Column(name="achternaam", type="string", length=50)
     */
    private $achternaam;

    /**
     * @var string
     * @Assert\NotBlank(message="Vul het onderstaande veld in aub.")
     * @Assert\Length(min=3, minMessage="Vul drie karakters of meer in alstublieft.")
     * @ORM\Column(name="straat", type="string", length=50)
     */
    private $straat;

    /**
     * @var int
     * @Assert\NotBlank(message="Vul het onderstaande veld in aub.")
     * @Assert\Type(
     *     type="integer",
     *     message="De waarde {{ value }} is geen geldig {{ type }}."
     * )
     * @ORM\Column(name="huisnummer", type="integer")
     */
    private $huisnummer;
   
    /**
     * @var string
     * @ORM\Column(name="toevoeging", type="string", length=25, nullable=true)
     */
    private $toevoeging;

    /**
     * @var string
     * @Assert\NotBlank(message="Vul het onderstaande veld in aub.")
     * @ORM\Column(name="woonplaats", type="string", length=100)
     */
    private $woonplaats;
    
    /**
     * @var string
     * @Assert\NotBlank(message="Vul het onderstaande veld in aub.")
     *
     *  @Assert\Email(
     *     message = "The email '{{ value }}' is not a valid email.",
     *     checkMX = true
     * )
     * @ORM\Column(name="email", type="string", length=100)
     */
    private $email;


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
     * Set voornaam
     *
     * @param string $voornaam
     *
     * @return MemberDate
     */
    public function setVoornaam($voornaam)
    {
        $this->voornaam = $voornaam;

        return $this;
    }

    /**
     * Get voornaam
     *
     * @return string
     */
    public function getVoornaam()
    {
        return $this->voornaam;
    }

    /**
     * Set achternaam
     *
     * @param string $achternaam
     *
     * @return MemberDate
     */
    public function setAchternaam($achternaam)
    {
        $this->achternaam = $achternaam;

        return $this;
    }

    /**
     * Get achternaam
     *
     * @return string
     */
    public function getAchternaam()
    {
        return $this->achternaam;
    }

    /**
     * Set straat
     *
     * @param string $straat
     *
     * @return MemberDate
     */
    public function setStraat($straat)
    {
        $this->straat = $straat;

        return $this;
    }

    /**
     * Get straat
     *
     * @return string
     */
    public function getStraat()
    {
        return $this->straat;
    }

    /**
     * Set huisnummer
     *
     * @param integer $huisnummer
     *
     * @return MemberDate
     */
    public function setHuisnummer($huisnummer)
    {
        $this->huisnummer = $huisnummer;

        return $this;
    }

    /**
     * Get huisnummer
     *
     * @return int
     */
    public function getHuisnummer()
    {
        return $this->huisnummer;
    }

    /**
     * Set toevoeging
     *
     * @param string $toevoeging
     *
     * @return MemberDate
     */
    public function setToevoeging($toevoeging)
    {
        $this->toevoeging = $toevoeging;

        return $this;
    }

    /**
     * Get toevoeging
     *
     * @return string
     */
    public function getToevoeging()
    {
        return $this->toevoeging;
    }

    /**
     * Set woonplaats
     *
     * @param string $woonplaats
     *
     * @return MemberDate
     */
    public function setWoonplaats($woonplaats)
    {
        $this->woonplaats = $woonplaats;

        return $this;
    }

    /**
     * Get woonplaats
     *
     * @return string
     */
    public function getWoonplaats()
    {
        return $this->woonplaats;
    }

     /**
     * Set email
     *
     * @param string $email
     *
     * @return MemberDate
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    
}

