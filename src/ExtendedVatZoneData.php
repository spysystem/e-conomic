<?php

namespace Economic;

class ExtendedVatZoneData
{

    /**
     * @var string $Number
     */
    protected $Number = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getNumber()
    {
      return $this->Number;
    }

    /**
     * @param string $Number
     * @return \Economic\ExtendedVatZoneData
     */
    public function setNumber($Number)
    {
      $this->Number = $Number;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param string $Name
     * @return \Economic\ExtendedVatZoneData
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

}
