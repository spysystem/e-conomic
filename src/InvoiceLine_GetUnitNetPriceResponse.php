<?php

namespace Economic;

class InvoiceLine_GetUnitNetPriceResponse
{

    /**
     * @var float $InvoiceLine_GetUnitNetPriceResult
     */
    protected $InvoiceLine_GetUnitNetPriceResult = null;

    /**
     * @param float $InvoiceLine_GetUnitNetPriceResult
     */
    public function __construct($InvoiceLine_GetUnitNetPriceResult)
    {
      $this->InvoiceLine_GetUnitNetPriceResult = $InvoiceLine_GetUnitNetPriceResult;
    }

    /**
     * @return float
     */
    public function getInvoiceLine_GetUnitNetPriceResult()
    {
      return $this->InvoiceLine_GetUnitNetPriceResult;
    }

    /**
     * @param float $InvoiceLine_GetUnitNetPriceResult
     * @return \Economic\InvoiceLine_GetUnitNetPriceResponse
     */
    public function setInvoiceLine_GetUnitNetPriceResult($InvoiceLine_GetUnitNetPriceResult)
    {
      $this->InvoiceLine_GetUnitNetPriceResult = $InvoiceLine_GetUnitNetPriceResult;
      return $this;
    }

}
