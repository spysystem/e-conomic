<?php

namespace Economic;

class InventoryLocation_FindByNumberResponse
{

    /**
     * @var InventoryLocationHandle $InventoryLocation_FindByNumberResult
     */
    protected $InventoryLocation_FindByNumberResult = null;

    /**
     * @param InventoryLocationHandle $InventoryLocation_FindByNumberResult
     */
    public function __construct($InventoryLocation_FindByNumberResult)
    {
      $this->InventoryLocation_FindByNumberResult = $InventoryLocation_FindByNumberResult;
    }

    /**
     * @return InventoryLocationHandle
     */
    public function getInventoryLocation_FindByNumberResult()
    {
      return $this->InventoryLocation_FindByNumberResult;
    }

    /**
     * @param InventoryLocationHandle $InventoryLocation_FindByNumberResult
     * @return \Economic\InventoryLocation_FindByNumberResponse
     */
    public function setInventoryLocation_FindByNumberResult($InventoryLocation_FindByNumberResult)
    {
      $this->InventoryLocation_FindByNumberResult = $InventoryLocation_FindByNumberResult;
      return $this;
    }

}
