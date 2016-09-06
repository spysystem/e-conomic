<?php

namespace Economic;

class PriceGroupData
{

    /**
     * @var PriceGroupHandle $Handle
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
     * @param int $Number
     */
    public function __construct($Number)
    {
      $this->Number = $Number;
    }

    /**
     * @return PriceGroupHandle
     */
    public function getHandle()
    {
      return $this->Handle;
    }

    /**
     * @param PriceGroupHandle $Handle
     * @return \Economic\PriceGroupData
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
     * @return \Economic\PriceGroupData
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
     * @return \Economic\PriceGroupData
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

}
