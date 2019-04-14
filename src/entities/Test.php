<?php
namespace Src\entities;

class Test
{
    private $id;
    private $valeur1;
    private $valeur2;

    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;
    }

    public function getValeur1()
    {
        return $this->valeur1;
    }
    public function setValeur1($valeur1)
    {
        $this->valeur1 = $valeur1;
    }

    public function getValeur2()
    {
        return $this->valeur2;
    }
    public function setValeur2($valeur2)
    {
        $this->valeur2 = $valeur2;
    }
}
 