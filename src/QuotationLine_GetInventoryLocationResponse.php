<?php

namespace Economic;

class QuotationLine_GetInventoryLocationResponse
{

    /**
     * @var InventoryLocationHandle $QuotationLine_GetInventoryLocationResult
     */
    protected $QuotationLine_GetInventoryLocationResult = null;

    /**
     * @param InventoryLocationHandle $QuotationLine_GetInventoryLocationResult
     */
    public function __construct($QuotationLine_GetInventoryLocationResult)
    {
      $this->QuotationLine_GetInventoryLocationResult = $QuotationLine_GetInventoryLocationResult;
    }

    /**
     * @return InventoryLocationHandle
     */
    public function getQuotationLine_GetInventoryLocationResult()
    {
      return $this->QuotationLine_GetInventoryLocationResult;
    }

    /**
     * @param InventoryLocationHandle $QuotationLine_GetInventoryLocationResult
     * @return \Economic\QuotationLine_GetInventoryLocationResponse
     */
    public function setQuotationLine_GetInventoryLocationResult($QuotationLine_GetInventoryLocationResult)
    {
      $this->QuotationLine_GetInventoryLocationResult = $QuotationLine_GetInventoryLocationResult;
      return $this;
    }

}
