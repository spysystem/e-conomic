<?php

namespace Economic;

class CurrentInvoiceLine_GetTotalMarginResponse
{

    /**
     * @var float $CurrentInvoiceLine_GetTotalMarginResult
     */
    protected $CurrentInvoiceLine_GetTotalMarginResult = null;

    /**
     * @param float $CurrentInvoiceLine_GetTotalMarginResult
     */
    public function __construct($CurrentInvoiceLine_GetTotalMarginResult)
    {
      $this->CurrentInvoiceLine_GetTotalMarginResult = $CurrentInvoiceLine_GetTotalMarginResult;
    }

    /**
     * @return float
     */
    public function getCurrentInvoiceLine_GetTotalMarginResult()
    {
      return $this->CurrentInvoiceLine_GetTotalMarginResult;
    }

    /**
     * @param float $CurrentInvoiceLine_GetTotalMarginResult
     * @return \Economic\CurrentInvoiceLine_GetTotalMarginResponse
     */
    public function setCurrentInvoiceLine_GetTotalMarginResult($CurrentInvoiceLine_GetTotalMarginResult)
    {
      $this->CurrentInvoiceLine_GetTotalMarginResult = $CurrentInvoiceLine_GetTotalMarginResult;
      return $this;
    }

}
