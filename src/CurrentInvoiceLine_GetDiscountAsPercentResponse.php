<?php

namespace Economic;

class CurrentInvoiceLine_GetDiscountAsPercentResponse
{

    /**
     * @var float $CurrentInvoiceLine_GetDiscountAsPercentResult
     */
    protected $CurrentInvoiceLine_GetDiscountAsPercentResult = null;

    /**
     * @param float $CurrentInvoiceLine_GetDiscountAsPercentResult
     */
    public function __construct($CurrentInvoiceLine_GetDiscountAsPercentResult)
    {
      $this->CurrentInvoiceLine_GetDiscountAsPercentResult = $CurrentInvoiceLine_GetDiscountAsPercentResult;
    }

    /**
     * @return float
     */
    public function getCurrentInvoiceLine_GetDiscountAsPercentResult()
    {
      return $this->CurrentInvoiceLine_GetDiscountAsPercentResult;
    }

    /**
     * @param float $CurrentInvoiceLine_GetDiscountAsPercentResult
     * @return \Economic\CurrentInvoiceLine_GetDiscountAsPercentResponse
     */
    public function setCurrentInvoiceLine_GetDiscountAsPercentResult($CurrentInvoiceLine_GetDiscountAsPercentResult)
    {
      $this->CurrentInvoiceLine_GetDiscountAsPercentResult = $CurrentInvoiceLine_GetDiscountAsPercentResult;
      return $this;
    }

}
