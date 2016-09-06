<?php

namespace Economic;

class Order_GetVatZoneResponse
{

    /**
     * @var ExtendedVatZoneHandle $Order_GetVatZoneResult
     */
    protected $Order_GetVatZoneResult = null;

    /**
     * @param ExtendedVatZoneHandle $Order_GetVatZoneResult
     */
    public function __construct($Order_GetVatZoneResult)
    {
      $this->Order_GetVatZoneResult = $Order_GetVatZoneResult;
    }

    /**
     * @return ExtendedVatZoneHandle
     */
    public function getOrder_GetVatZoneResult()
    {
      return $this->Order_GetVatZoneResult;
    }

    /**
     * @param ExtendedVatZoneHandle $Order_GetVatZoneResult
     * @return \Economic\Order_GetVatZoneResponse
     */
    public function setOrder_GetVatZoneResult($Order_GetVatZoneResult)
    {
      $this->Order_GetVatZoneResult = $Order_GetVatZoneResult;
      return $this;
    }

}
