<?php

namespace Economic;

class DistributionKeyData
{

    /**
     * @var DistributionKeyHandle $Handle
     */
    protected $Handle = null;

    /**
     * @var int $Number
     */
    protected $Number = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var boolean $IsAccessible
     */
    protected $IsAccessible = null;

    /**
     * @param int $Number
     * @param boolean $IsAccessible
     */
    public function __construct($Number, $IsAccessible)
    {
      $this->Number = $Number;
      $this->IsAccessible = $IsAccessible;
    }

    /**
     * @return DistributionKeyHandle
     */
    public function getHandle()
    {
      return $this->Handle;
    }

    /**
     * @param DistributionKeyHandle $Handle
     * @return \Economic\DistributionKeyData
     */
    public function setHandle($Handle)
    {
      $this->Handle = $Handle;
      return $this;
    }

    /**
     * @return int
     */
    public function getNumber()
    {
      return $this->Number;
    }

    /**
     * @param int $Number
     * @return \Economic\DistributionKeyData
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
     * @return \Economic\DistributionKeyData
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsAccessible()
    {
      return $this->IsAccessible;
    }

    /**
     * @param boolean $IsAccessible
     * @return \Economic\DistributionKeyData
     */
    public function setIsAccessible($IsAccessible)
    {
      $this->IsAccessible = $IsAccessible;
      return $this;
    }

}
