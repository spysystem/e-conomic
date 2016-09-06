<?php

namespace Economic;

class InventoryLocation_GetAllResponse
{

    /**
     * @var ArrayOfInventoryLocationHandle $InventoryLocation_GetAllResult
     */
    protected $InventoryLocation_GetAllResult = null;

    /**
     * @param ArrayOfInventoryLocationHandle $InventoryLocation_GetAllResult
     */
    public function __construct($InventoryLocation_GetAllResult)
    {
      $this->InventoryLocation_GetAllResult = $InventoryLocation_GetAllResult;
    }

    /**
     * @return ArrayOfInventoryLocationHandle
     */
    public function getInventoryLocation_GetAllResult()
    {
      return $this->InventoryLocation_GetAllResult;
    }

    /**
     * @param ArrayOfInventoryLocationHandle $InventoryLocation_GetAllResult
     * @return \Economic\InventoryLocation_GetAllResponse
     */
    public function setInventoryLocation_GetAllResult($InventoryLocation_GetAllResult)
    {
      $this->InventoryLocation_GetAllResult = $InventoryLocation_GetAllResult;
      return $this;
    }

}
