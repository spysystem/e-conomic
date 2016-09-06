<?php

namespace Economic;

class InventoryLocation_GetNameResponse
{

    /**
     * @var string $InventoryLocation_GetNameResult
     */
    protected $InventoryLocation_GetNameResult = null;

    /**
     * @param string $InventoryLocation_GetNameResult
     */
    public function __construct($InventoryLocation_GetNameResult)
    {
      $this->InventoryLocation_GetNameResult = $InventoryLocation_GetNameResult;
    }

    /**
     * @return string
     */
    public function getInventoryLocation_GetNameResult()
    {
      return $this->InventoryLocation_GetNameResult;
    }

    /**
     * @param string $InventoryLocation_GetNameResult
     * @return \Economic\InventoryLocation_GetNameResponse
     */
    public function setInventoryLocation_GetNameResult($InventoryLocation_GetNameResult)
    {
      $this->InventoryLocation_GetNameResult = $InventoryLocation_GetNameResult;
      return $this;
    }

}
