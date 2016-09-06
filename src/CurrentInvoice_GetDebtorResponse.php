<?php

namespace Economic;

class CurrentInvoice_GetDebtorResponse
{

    /**
     * @var DebtorHandle $CurrentInvoice_GetDebtorResult
     */
    protected $CurrentInvoice_GetDebtorResult = null;

    /**
     * @param DebtorHandle $CurrentInvoice_GetDebtorResult
     */
    public function __construct($CurrentInvoice_GetDebtorResult)
    {
      $this->CurrentInvoice_GetDebtorResult = $CurrentInvoice_GetDebtorResult;
    }

    /**
     * @return DebtorHandle
     */
    public function getCurrentInvoice_GetDebtorResult()
    {
      return $this->CurrentInvoice_GetDebtorResult;
    }

    /**
     * @param DebtorHandle $CurrentInvoice_GetDebtorResult
     * @return \Economic\CurrentInvoice_GetDebtorResponse
     */
    public function setCurrentInvoice_GetDebtorResult($CurrentInvoice_GetDebtorResult)
    {
      $this->CurrentInvoice_GetDebtorResult = $CurrentInvoice_GetDebtorResult;
      return $this;
    }

}
