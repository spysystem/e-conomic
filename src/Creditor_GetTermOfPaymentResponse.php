<?php

namespace Economic;

class Creditor_GetTermOfPaymentResponse
{

    /**
     * @var TermOfPaymentHandle $Creditor_GetTermOfPaymentResult
     */
    protected $Creditor_GetTermOfPaymentResult = null;

    /**
     * @param TermOfPaymentHandle $Creditor_GetTermOfPaymentResult
     */
    public function __construct($Creditor_GetTermOfPaymentResult)
    {
      $this->Creditor_GetTermOfPaymentResult = $Creditor_GetTermOfPaymentResult;
    }

    /**
     * @return TermOfPaymentHandle
     */
    public function getCreditor_GetTermOfPaymentResult()
    {
      return $this->Creditor_GetTermOfPaymentResult;
    }

    /**
     * @param TermOfPaymentHandle $Creditor_GetTermOfPaymentResult
     * @return \Economic\Creditor_GetTermOfPaymentResponse
     */
    public function setCreditor_GetTermOfPaymentResult($Creditor_GetTermOfPaymentResult)
    {
      $this->Creditor_GetTermOfPaymentResult = $Creditor_GetTermOfPaymentResult;
      return $this;
    }

}
