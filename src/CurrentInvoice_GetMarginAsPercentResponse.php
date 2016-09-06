<?php

namespace Economic;

class CurrentInvoice_GetMarginAsPercentResponse
{

    /**
     * @var float $CurrentInvoice_GetMarginAsPercentResult
     */
    protected $CurrentInvoice_GetMarginAsPercentResult = null;

    /**
     * @param float $CurrentInvoice_GetMarginAsPercentResult
     */
    public function __construct($CurrentInvoice_GetMarginAsPercentResult)
    {
      $this->CurrentInvoice_GetMarginAsPercentResult = $CurrentInvoice_GetMarginAsPercentResult;
    }

    /**
     * @return float
     */
    public function getCurrentInvoice_GetMarginAsPercentResult()
    {
      return $this->CurrentInvoice_GetMarginAsPercentResult;
    }

    /**
     * @param float $CurrentInvoice_GetMarginAsPercentResult
     * @return \Economic\CurrentInvoice_GetMarginAsPercentResponse
     */
    public function setCurrentInvoice_GetMarginAsPercentResult($CurrentInvoice_GetMarginAsPercentResult)
    {
      $this->CurrentInvoice_GetMarginAsPercentResult = $CurrentInvoice_GetMarginAsPercentResult;
      return $this;
    }

}
