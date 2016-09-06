<?php

namespace Economic;

class Creditor_GetDefaultPaymentTypeResponse
{

    /**
     * @var BankPaymentTypeHandle $Creditor_GetDefaultPaymentTypeResult
     */
    protected $Creditor_GetDefaultPaymentTypeResult = null;

    /**
     * @param BankPaymentTypeHandle $Creditor_GetDefaultPaymentTypeResult
     */
    public function __construct($Creditor_GetDefaultPaymentTypeResult)
    {
      $this->Creditor_GetDefaultPaymentTypeResult = $Creditor_GetDefaultPaymentTypeResult;
    }

    /**
     * @return BankPaymentTypeHandle
     */
    public function getCreditor_GetDefaultPaymentTypeResult()
    {
      return $this->Creditor_GetDefaultPaymentTypeResult;
    }

    /**
     * @param BankPaymentTypeHandle $Creditor_GetDefaultPaymentTypeResult
     * @return \Economic\Creditor_GetDefaultPaymentTypeResponse
     */
    public function setCreditor_GetDefaultPaymentTypeResult($Creditor_GetDefaultPaymentTypeResult)
    {
      $this->Creditor_GetDefaultPaymentTypeResult = $Creditor_GetDefaultPaymentTypeResult;
      return $this;
    }

}
