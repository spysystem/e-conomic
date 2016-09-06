<?php

namespace Economic;

class InvoiceLine_GetDiscountAsPercentResponse
{

    /**
     * @var float $InvoiceLine_GetDiscountAsPercentResult
     */
    protected $InvoiceLine_GetDiscountAsPercentResult = null;

    /**
     * @param float $InvoiceLine_GetDiscountAsPercentResult
     */
    public function __construct($InvoiceLine_GetDiscountAsPercentResult)
    {
      $this->InvoiceLine_GetDiscountAsPercentResult = $InvoiceLine_GetDiscountAsPercentResult;
    }

    /**
     * @return float
     */
    public function getInvoiceLine_GetDiscountAsPercentResult()
    {
      return $this->InvoiceLine_GetDiscountAsPercentResult;
    }

    /**
     * @param float $InvoiceLine_GetDiscountAsPercentResult
     * @return \Economic\InvoiceLine_GetDiscountAsPercentResponse
     */
    public function setInvoiceLine_GetDiscountAsPercentResult($InvoiceLine_GetDiscountAsPercentResult)
    {
      $this->InvoiceLine_GetDiscountAsPercentResult = $InvoiceLine_GetDiscountAsPercentResult;
      return $this;
    }

}
