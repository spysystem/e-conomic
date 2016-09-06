<?php

namespace Economic;

class CurrentInvoice_GetGrossAmountResponse
{

    /**
     * @var float $CurrentInvoice_GetGrossAmountResult
     */
    protected $CurrentInvoice_GetGrossAmountResult = null;

    /**
     * @param float $CurrentInvoice_GetGrossAmountResult
     */
    public function __construct($CurrentInvoice_GetGrossAmountResult)
    {
      $this->CurrentInvoice_GetGrossAmountResult = $CurrentInvoice_GetGrossAmountResult;
    }

    /**
     * @return float
     */
    public function getCurrentInvoice_GetGrossAmountResult()
    {
      return $this->CurrentInvoice_GetGrossAmountResult;
    }

    /**
     * @param float $CurrentInvoice_GetGrossAmountResult
     * @return \Economic\CurrentInvoice_GetGrossAmountResponse
     */
    public function setCurrentInvoice_GetGrossAmountResult($CurrentInvoice_GetGrossAmountResult)
    {
      $this->CurrentInvoice_GetGrossAmountResult = $CurrentInvoice_GetGrossAmountResult;
      return $this;
    }

}
