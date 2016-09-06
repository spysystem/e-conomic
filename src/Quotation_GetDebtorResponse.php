<?php

namespace Economic;

class Quotation_GetDebtorResponse
{

    /**
     * @var DebtorHandle $Quotation_GetDebtorResult
     */
    protected $Quotation_GetDebtorResult = null;

    /**
     * @param DebtorHandle $Quotation_GetDebtorResult
     */
    public function __construct($Quotation_GetDebtorResult)
    {
      $this->Quotation_GetDebtorResult = $Quotation_GetDebtorResult;
    }

    /**
     * @return DebtorHandle
     */
    public function getQuotation_GetDebtorResult()
    {
      return $this->Quotation_GetDebtorResult;
    }

    /**
     * @param DebtorHandle $Quotation_GetDebtorResult
     * @return \Economic\Quotation_GetDebtorResponse
     */
    public function setQuotation_GetDebtorResult($Quotation_GetDebtorResult)
    {
      $this->Quotation_GetDebtorResult = $Quotation_GetDebtorResult;
      return $this;
    }

}
