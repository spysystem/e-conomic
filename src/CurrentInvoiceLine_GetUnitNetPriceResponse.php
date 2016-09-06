<?php

namespace Economic;

class CurrentInvoiceLine_GetUnitNetPriceResponse
{

    /**
     * @var float $CurrentInvoiceLine_GetUnitNetPriceResult
     */
    protected $CurrentInvoiceLine_GetUnitNetPriceResult = null;

    /**
     * @param float $CurrentInvoiceLine_GetUnitNetPriceResult
     */
    public function __construct($CurrentInvoiceLine_GetUnitNetPriceResult)
    {
      $this->CurrentInvoiceLine_GetUnitNetPriceResult = $CurrentInvoiceLine_GetUnitNetPriceResult;
    }

    /**
     * @return float
     */
    public function getCurrentInvoiceLine_GetUnitNetPriceResult()
    {
      return $this->CurrentInvoiceLine_GetUnitNetPriceResult;
    }

    /**
     * @param float $CurrentInvoiceLine_GetUnitNetPriceResult
     * @return \Economic\CurrentInvoiceLine_GetUnitNetPriceResponse
     */
    public function setCurrentInvoiceLine_GetUnitNetPriceResult($CurrentInvoiceLine_GetUnitNetPriceResult)
    {
      $this->CurrentInvoiceLine_GetUnitNetPriceResult = $CurrentInvoiceLine_GetUnitNetPriceResult;
      return $this;
    }

}
