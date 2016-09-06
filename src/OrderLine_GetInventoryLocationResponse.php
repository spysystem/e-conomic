<?php

namespace Economic;

class OrderLine_GetInventoryLocationResponse
{

    /**
     * @var InventoryLocationHandle $OrderLine_GetInventoryLocationResult
     */
    protected $OrderLine_GetInventoryLocationResult = null;

    /**
     * @param InventoryLocationHandle $OrderLine_GetInventoryLocationResult
     */
    public function __construct($OrderLine_GetInventoryLocationResult)
    {
      $this->OrderLine_GetInventoryLocationResult = $OrderLine_GetInventoryLocationResult;
    }

    /**
     * @return InventoryLocationHandle
     */
    public function getOrderLine_GetInventoryLocationResult()
    {
      return $this->OrderLine_GetInventoryLocationResult;
    }

    /**
     * @param InventoryLocationHandle $OrderLine_GetInventoryLocationResult
     * @return \Economic\OrderLine_GetInventoryLocationResponse
     */
    public function setOrderLine_GetInventoryLocationResult($OrderLine_GetInventoryLocationResult)
    {
      $this->OrderLine_GetInventoryLocationResult = $OrderLine_GetInventoryLocationResult;
      return $this;
    }

}
