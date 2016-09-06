<?php

namespace Economic;

class CurrentInvoiceLine_GetUnitCostPriceResponse
{

    /**
     * @var float $CurrentInvoiceLine_GetUnitCostPriceResult
     */
    protected $CurrentInvoiceLine_GetUnitCostPriceResult = null;

    /**
     * @param float $CurrentInvoiceLine_GetUnitCostPriceResult
     */
    public function __construct($CurrentInvoiceLine_GetUnitCostPriceResult)
    {
      $this->CurrentInvoiceLine_GetUnitCostPriceResult = $CurrentInvoiceLine_GetUnitCostPriceResult;
    }

    /**
     * @return float
     */
    public function getCurrentInvoiceLine_GetUnitCostPriceResult()
    {
      return $this->CurrentInvoiceLine_GetUnitCostPriceResult;
    }

    /**
     * @param float $CurrentInvoiceLine_GetUnitCostPriceResult
     * @return \Economic\CurrentInvoiceLine_GetUnitCostPriceResponse
     */
    public function setCurrentInvoiceLine_GetUnitCostPriceResult($CurrentInvoiceLine_GetUnitCostPriceResult)
    {
      $this->CurrentInvoiceLine_GetUnitCostPriceResult = $CurrentInvoiceLine_GetUnitCostPriceResult;
      return $this;
    }

}
