<?php

namespace Economic;

class InventoryLocation_FindByNumberListResponse
{

    /**
     * @var ArrayOfInventoryLocationHandle $InventoryLocation_FindByNumberListResult
     */
    protected $InventoryLocation_FindByNumberListResult = null;

    /**
     * @param ArrayOfInventoryLocationHandle $InventoryLocation_FindByNumberListResult
     */
    public function __construct($InventoryLocation_FindByNumberListResult)
    {
      $this->InventoryLocation_FindByNumberListResult = $InventoryLocation_FindByNumberListResult;
    }

    /**
     * @return ArrayOfInventoryLocationHandle
     */
    public function getInventoryLocation_FindByNumberListResult()
    {
      return $this->InventoryLocation_FindByNumberListResult;
    }

    /**
     * @param ArrayOfInventoryLocationHandle $InventoryLocation_FindByNumberListResult
     * @return \Economic\InventoryLocation_FindByNumberListResponse
     */
    public function setInventoryLocation_FindByNumberListResult($InventoryLocation_FindByNumberListResult)
    {
      $this->InventoryLocation_FindByNumberListResult = $InventoryLocation_FindByNumberListResult;
      return $this;
    }

}
