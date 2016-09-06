<?php

namespace Economic;

class Invoice_GetDebtorResponse
{

    /**
     * @var DebtorHandle $Invoice_GetDebtorResult
     */
    protected $Invoice_GetDebtorResult = null;

    /**
     * @param DebtorHandle $Invoice_GetDebtorResult
     */
    public function __construct($Invoice_GetDebtorResult)
    {
      $this->Invoice_GetDebtorResult = $Invoice_GetDebtorResult;
    }

    /**
     * @return DebtorHandle
     */
    public function getInvoice_GetDebtorResult()
    {
      return $this->Invoice_GetDebtorResult;
    }

    /**
     * @param DebtorHandle $Invoice_GetDebtorResult
     * @return \Economic\Invoice_GetDebtorResponse
     */
    public function setInvoice_GetDebtorResult($Invoice_GetDebtorResult)
    {
      $this->Invoice_GetDebtorResult = $Invoice_GetDebtorResult;
      return $this;
    }

}
