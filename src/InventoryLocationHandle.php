<?php

namespace Economic;

class InventoryLocationHandle
{

    /**
     * @var int $Number
     */
    protected $Number = null;

    /**
     * @param int $Number
     */
    public function __construct($Number)
    {
      $this->Number = $Number;
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
     * @return \Economic\InventoryLocationHandle
     */
    public function setNumber($Number)
    {
      $this->Number = $Number;
      return $this;
    }

}
