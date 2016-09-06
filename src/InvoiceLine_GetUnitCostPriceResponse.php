<?php

namespace Economic;

class InvoiceLine_GetUnitCostPriceResponse
{

    /**
     * @var float $InvoiceLine_GetUnitCostPriceResult
     */
    protected $InvoiceLine_GetUnitCostPriceResult = null;

    /**
     * @param float $InvoiceLine_GetUnitCostPriceResult
     */
    public function __construct($InvoiceLine_GetUnitCostPriceResult)
    {
      $this->InvoiceLine_GetUnitCostPriceResult = $InvoiceLine_GetUnitCostPriceResult;
    }

    /**
     * @return float
     */
    public function getInvoiceLine_GetUnitCostPriceResult()
    {
      return $this->InvoiceLine_GetUnitCostPriceResult;
    }

    /**
     * @param float $InvoiceLine_GetUnitCostPriceResult
     * @return \Economic\InvoiceLine_GetUnitCostPriceResponse
     */
    public function setInvoiceLine_GetUnitCostPriceResult($InvoiceLine_GetUnitCostPriceResult)
    {
      $this->InvoiceLine_GetUnitCostPriceResult = $InvoiceLine_GetUnitCostPriceResult;
      return $this;
    }

}
