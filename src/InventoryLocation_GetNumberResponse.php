<?php

namespace Economic;

class InventoryLocation_GetNumberResponse
{

    /**
     * @var int $InventoryLocation_GetNumberResult
     */
    protected $InventoryLocation_GetNumberResult = null;

    /**
     * @param int $InventoryLocation_GetNumberResult
     */
    public function __construct($InventoryLocation_GetNumberResult)
    {
      $this->InventoryLocation_GetNumberResult = $InventoryLocation_GetNumberResult;
    }

    /**
     * @return int
     */
    public function getInventoryLocation_GetNumberResult()
    {
      return $this->InventoryLocation_GetNumberResult;
    }

    /**
     * @param int $InventoryLocation_GetNumberResult
     * @return \Economic\InventoryLocation_GetNumberResponse
     */
    public function setInventoryLocation_GetNumberResult($InventoryLocation_GetNumberResult)
    {
      $this->InventoryLocation_GetNumberResult = $InventoryLocation_GetNumberResult;
      return $this;
    }

}
