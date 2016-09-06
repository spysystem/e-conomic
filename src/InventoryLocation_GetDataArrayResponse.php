<?php

namespace Economic;

class InventoryLocation_GetDataArrayResponse
{

    /**
     * @var ArrayOfInventoryLocationData $InventoryLocation_GetDataArrayResult
     */
    protected $InventoryLocation_GetDataArrayResult = null;

    /**
     * @param ArrayOfInventoryLocationData $InventoryLocation_GetDataArrayResult
     */
    public function __construct($InventoryLocation_GetDataArrayResult)
    {
      $this->InventoryLocation_GetDataArrayResult = $InventoryLocation_GetDataArrayResult;
    }

    /**
     * @return ArrayOfInventoryLocationData
     */
    public function getInventoryLocation_GetDataArrayResult()
    {
      return $this->InventoryLocation_GetDataArrayResult;
    }

    /**
     * @param ArrayOfInventoryLocationData $InventoryLocation_GetDataArrayResult
     * @return \Economic\InventoryLocation_GetDataArrayResponse
     */
    public function setInventoryLocation_GetDataArrayResult($InventoryLocation_GetDataArrayResult)
    {
      $this->InventoryLocation_GetDataArrayResult = $InventoryLocation_GetDataArrayResult;
      return $this;
    }

}
