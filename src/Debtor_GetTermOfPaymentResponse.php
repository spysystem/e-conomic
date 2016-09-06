<?php

namespace Economic;

class Debtor_GetTermOfPaymentResponse
{

    /**
     * @var TermOfPaymentHandle $Debtor_GetTermOfPaymentResult
     */
    protected $Debtor_GetTermOfPaymentResult = null;

    /**
     * @param TermOfPaymentHandle $Debtor_GetTermOfPaymentResult
     */
    public function __construct($Debtor_GetTermOfPaymentResult)
    {
      $this->Debtor_GetTermOfPaymentResult = $Debtor_GetTermOfPaymentResult;
    }

    /**
     * @return TermOfPaymentHandle
     */
    public function getDebtor_GetTermOfPaymentResult()
    {
      return $this->Debtor_GetTermOfPaymentResult;
    }

    /**
     * @param TermOfPaymentHandle $Debtor_GetTermOfPaymentResult
     * @return \Economic\Debtor_GetTermOfPaymentResponse
     */
    public function setDebtor_GetTermOfPaymentResult($Debtor_GetTermOfPaymentResult)
    {
      $this->Debtor_GetTermOfPaymentResult = $Debtor_GetTermOfPaymentResult;
      return $this;
    }

}
