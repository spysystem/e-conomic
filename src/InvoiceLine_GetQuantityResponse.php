<?php

namespace Economic;

class InvoiceLine_GetQuantityResponse
{

    /**
     * @var float $InvoiceLine_GetQuantityResult
     */
    protected $InvoiceLine_GetQuantityResult = null;

    /**
     * @param float $InvoiceLine_GetQuantityResult
     */
    public function __construct($InvoiceLine_GetQuantityResult)
    {
      $this->InvoiceLine_GetQuantityResult = $InvoiceLine_GetQuantityResult;
    }

    /**
     * @return float
     */
    public function getInvoiceLine_GetQuantityResult()
    {
      return $this->InvoiceLine_GetQuantityResult;
    }

    /**
     * @param float $InvoiceLine_GetQuantityResult
     * @return \Economic\InvoiceLine_GetQuantityResponse
     */
    public function setInvoiceLine_GetQuantityResult($InvoiceLine_GetQuantityResult)
    {
      $this->InvoiceLine_GetQuantityResult = $InvoiceLine_GetQuantityResult;
      return $this;
    }

}
