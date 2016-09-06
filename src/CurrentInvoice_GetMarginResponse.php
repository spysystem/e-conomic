<?php

namespace Economic;

class CurrentInvoice_GetMarginResponse
{

    /**
     * @var float $CurrentInvoice_GetMarginResult
     */
    protected $CurrentInvoice_GetMarginResult = null;

    /**
     * @param float $CurrentInvoice_GetMarginResult
     */
    public function __construct($CurrentInvoice_GetMarginResult)
    {
      $this->CurrentInvoice_GetMarginResult = $CurrentInvoice_GetMarginResult;
    }

    /**
     * @return float
     */
    public function getCurrentInvoice_GetMarginResult()
    {
      return $this->CurrentInvoice_GetMarginResult;
    }

    /**
     * @param float $CurrentInvoice_GetMarginResult
     * @return \Economic\CurrentInvoice_GetMarginResponse
     */
    public function setCurrentInvoice_GetMarginResult($CurrentInvoice_GetMarginResult)
    {
      $this->CurrentInvoice_GetMarginResult = $CurrentInvoice_GetMarginResult;
      return $this;
    }

}
