<?php

namespace Economic;

class CurrentInvoiceLine_GetMarginAsPercentResponse
{

    /**
     * @var float $CurrentInvoiceLine_GetMarginAsPercentResult
     */
    protected $CurrentInvoiceLine_GetMarginAsPercentResult = null;

    /**
     * @param float $CurrentInvoiceLine_GetMarginAsPercentResult
     */
    public function __construct($CurrentInvoiceLine_GetMarginAsPercentResult)
    {
      $this->CurrentInvoiceLine_GetMarginAsPercentResult = $CurrentInvoiceLine_GetMarginAsPercentResult;
    }

    /**
     * @return float
     */
    public function getCurrentInvoiceLine_GetMarginAsPercentResult()
    {
      return $this->CurrentInvoiceLine_GetMarginAsPercentResult;
    }

    /**
     * @param float $CurrentInvoiceLine_GetMarginAsPercentResult
     * @return \Economic\CurrentInvoiceLine_GetMarginAsPercentResponse
     */
    public function setCurrentInvoiceLine_GetMarginAsPercentResult($CurrentInvoiceLine_GetMarginAsPercentResult)
    {
      $this->CurrentInvoiceLine_GetMarginAsPercentResult = $CurrentInvoiceLine_GetMarginAsPercentResult;
      return $this;
    }

}
