<?php
use Doctrine\ORM\Annotation as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * @Entity 
 * @Table(name="lieu")
 **/
class Lieu
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    private $id;
    /** @Column(type="string") **/
    private $nom;
    /** @Column(type="decimal") **/
    private $longitude;
    /** @Column(type="decimal") **/
    private $latitude;
     /**
     * One lieu has many formations. This is the inverse side.
     * @OneToMany(targetEntity="Formation", mappedBy="lieu")
     */
    private $formations;
    /**
     * Many Lieux have one user. This is the owning side.
     * @ManyToOne(targetEntity="User", inversedBy="lieux")
     * @JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $user;
    
    public function __construct()
    {
        $this->formations = new ArrayCollection();
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

    public function getLongitude()
    {
        return $this->longitude;
    }
    public function setDate($longitude)
    {
        $this->longitude = $longitude;
    }

    public function getLatitude()
    {
        return $this->latitude;
    }
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;
    }
    
    public function getFormations()
    {
        return $this->formations;
    }
    public function setFormations($formations)
    {
        $this->formations = $formations;
    }
    public function getUser()
    {
        return $this->user;
    }
    public function setUser($user)
    {
        $this->user = $user;
    }
}

?>