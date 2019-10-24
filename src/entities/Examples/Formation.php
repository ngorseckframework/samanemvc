<?php
use Doctrine\ORM\Annotation as ORM;

/**
 * @Entity @Table(name="formation")
 **/
class Formation
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    private $id;
    /** @Column(type="string") **/
    private $nom;
    /** @Column(type="string") **/
    private $date;
    /** @Column(type="integer") **/
    private $duree;
    /**
     * Many formation have one lieu. This is the owning side.
     * @ManyToOne(targetEntity="Lieu", inversedBy="formations")
     * @JoinColumn(name="lieu_id", referencedColumnName="id")
     */
    private $lieu;
    
    public function __construct()
    {

    }
    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;
    }

    public function getNom()
    {
        return $this->nom;
    }
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function getDate()
    {
        return $this->date;
    }
    public function setDate($date)
    {
        $this->date = $date;
    }

    public function getDuree()
    {
        return $this->duree;
    }
    public function setDuree($duree)
    {
        $this->duree = $duree;
    }

    public function getLieu()
    {
        return $this->lieu;
    }
    public function setLieu($lieu)
    {
        $this->lieu = $lieu;
    }
}

?>