<?php

namespace Economic;

class InventoryLocationData
{

    /**
     * @var InventoryLocationHandle $Handle
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
     * @return InventoryLocationHandle
     */
    public function getHandle()
    {
      return $this->Handle;
    }

    /**
     * @param InventoryLocationHandle $Handle
     * @return \Economic\InventoryLocationData
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
     * @return \Economic\InventoryLocationData
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
     * @return \Economic\InventoryLocationData
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

}
