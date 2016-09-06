<?php

namespace Economic;

class CurrentInvoice_GetRoundingAmountResponse
{

    /**
     * @var float $CurrentInvoice_GetRoundingAmountResult
     */
    protected $CurrentInvoice_GetRoundingAmountResult = null;

    /**
     * @param float $CurrentInvoice_GetRoundingAmountResult
     */
    public function __construct($CurrentInvoice_GetRoundingAmountResult)
    {
      $this->CurrentInvoice_GetRoundingAmountResult = $CurrentInvoice_GetRoundingAmountResult;
    }

    /**
     * @return float
     */
    public function getCurrentInvoice_GetRoundingAmountResult()
    {
      return $this->CurrentInvoice_GetRoundingAmountResult;
    }

    /**
     * @param float $CurrentInvoice_GetRoundingAmountResult
     * @return \Economic\CurrentInvoice_GetRoundingAmountResponse
     */
    public function setCurrentInvoice_GetRoundingAmountResult($CurrentInvoice_GetRoundingAmountResult)
    {
      $this->CurrentInvoice_GetRoundingAmountResult = $CurrentInvoice_GetRoundingAmountResult;
      return $this;
    }

}
