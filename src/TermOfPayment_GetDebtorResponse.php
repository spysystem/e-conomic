<?php

namespace Economic;

class TermOfPayment_GetDebtorResponse
{

    /**
     * @var DebtorHandle $TermOfPayment_GetDebtorResult
     */
    protected $TermOfPayment_GetDebtorResult = null;

    /**
     * @param DebtorHandle $TermOfPayment_GetDebtorResult
     */
    public function __construct($TermOfPayment_GetDebtorResult)
    {
      $this->TermOfPayment_GetDebtorResult = $TermOfPayment_GetDebtorResult;
    }

    /**
     * @return DebtorHandle
     */
    public function getTermOfPayment_GetDebtorResult()
    {
      return $this->TermOfPayment_GetDebtorResult;
    }

    /**
     * @param DebtorHandle $TermOfPayment_GetDebtorResult
     * @return \Economic\TermOfPayment_GetDebtorResponse
     */
    public function setTermOfPayment_GetDebtorResult($TermOfPayment_GetDebtorResult)
    {
      $this->TermOfPayment_GetDebtorResult = $TermOfPayment_GetDebtorResult;
      return $this;
    }

}
