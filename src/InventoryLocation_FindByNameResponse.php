<?php

namespace Economic;

class InventoryLocation_FindByNameResponse
{

    /**
     * @var InventoryLocationHandle $InventoryLocation_FindByNameResult
     */
    protected $InventoryLocation_FindByNameResult = null;

    /**
     * @param InventoryLocationHandle $InventoryLocation_FindByNameResult
     */
    public function __construct($InventoryLocation_FindByNameResult)
    {
      $this->InventoryLocation_FindByNameResult = $InventoryLocation_FindByNameResult;
    }

    /**
     * @return InventoryLocationHandle
     */
    public function getInventoryLocation_FindByNameResult()
    {
      return $this->InventoryLocation_FindByNameResult;
    }

    /**
     * @param InventoryLocationHandle $InventoryLocation_FindByNameResult
     * @return \Economic\InventoryLocation_FindByNameResponse
     */
    public function setInventoryLocation_FindByNameResult($InventoryLocation_FindByNameResult)
    {
      $this->InventoryLocation_FindByNameResult = $InventoryLocation_FindByNameResult;
      return $this;
    }

}
