<?php

namespace Economic;

class CurrentInvoiceLine_GetQuantityResponse
{

    /**
     * @var float $CurrentInvoiceLine_GetQuantityResult
     */
    protected $CurrentInvoiceLine_GetQuantityResult = null;

    /**
     * @param float $CurrentInvoiceLine_GetQuantityResult
     */
    public function __construct($CurrentInvoiceLine_GetQuantityResult)
    {
      $this->CurrentInvoiceLine_GetQuantityResult = $CurrentInvoiceLine_GetQuantityResult;
    }

    /**
     * @return float
     */
    public function getCurrentInvoiceLine_GetQuantityResult()
    {
      return $this->CurrentInvoiceLine_GetQuantityResult;
    }

    /**
     * @param float $CurrentInvoiceLine_GetQuantityResult
     * @return \Economic\CurrentInvoiceLine_GetQuantityResponse
     */
    public function setCurrentInvoiceLine_GetQuantityResult($CurrentInvoiceLine_GetQuantityResult)
    {
      $this->CurrentInvoiceLine_GetQuantityResult = $CurrentInvoiceLine_GetQuantityResult;
      return $this;
    }

}
