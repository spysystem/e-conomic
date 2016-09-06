<?php

namespace Economic;

class TermOfPayment_GetTypeResponse
{

    /**
     * @var TermOfPaymentType $TermOfPayment_GetTypeResult
     */
    protected $TermOfPayment_GetTypeResult = null;

    /**
     * @param TermOfPaymentType $TermOfPayment_GetTypeResult
     */
    public function __construct($TermOfPayment_GetTypeResult)
    {
      $this->TermOfPayment_GetTypeResult = $TermOfPayment_GetTypeResult;
    }

    /**
     * @return TermOfPaymentType
     */
    public function getTermOfPayment_GetTypeResult()
    {
      return $this->TermOfPayment_GetTypeResult;
    }

    /**
     * @param TermOfPaymentType $TermOfPayment_GetTypeResult
     * @return \Economic\TermOfPayment_GetTypeResponse
     */
    public function setTermOfPayment_GetTypeResult($TermOfPayment_GetTypeResult)
    {
      $this->TermOfPayment_GetTypeResult = $TermOfPayment_GetTypeResult;
      return $this;
    }

}
