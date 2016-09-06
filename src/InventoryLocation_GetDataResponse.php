<?php

namespace Economic;

class InventoryLocation_GetDataResponse
{

    /**
     * @var InventoryLocationData $InventoryLocation_GetDataResult
     */
    protected $InventoryLocation_GetDataResult = null;

    /**
     * @param InventoryLocationData $InventoryLocation_GetDataResult
     */
    public function __construct($InventoryLocation_GetDataResult)
    {
      $this->InventoryLocation_GetDataResult = $InventoryLocation_GetDataResult;
    }

    /**
     * @return InventoryLocationData
     */
    public function getInventoryLocation_GetDataResult()
    {
      return $this->InventoryLocation_GetDataResult;
    }

    /**
     * @param InventoryLocationData $InventoryLocation_GetDataResult
     * @return \Economic\InventoryLocation_GetDataResponse
     */
    public function setInventoryLocation_GetDataResult($InventoryLocation_GetDataResult)
    {
      $this->InventoryLocation_GetDataResult = $InventoryLocation_GetDataResult;
      return $this;
    }

}
