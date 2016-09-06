<?php

namespace Economic;

class TermOfPayment_GetDataResponse
{

    /**
     * @var TermOfPaymentData $TermOfPayment_GetDataResult
     */
    protected $TermOfPayment_GetDataResult = null;

    /**
     * @param TermOfPaymentData $TermOfPayment_GetDataResult
     */
    public function __construct($TermOfPayment_GetDataResult)
    {
      $this->TermOfPayment_GetDataResult = $TermOfPayment_GetDataResult;
    }

    /**
     * @return TermOfPaymentData
     */
    public function getTermOfPayment_GetDataResult()
    {
      return $this->TermOfPayment_GetDataResult;
    }

    /**
     * @param TermOfPaymentData $TermOfPayment_GetDataResult
     * @return \Economic\TermOfPayment_GetDataResponse
     */
    public function setTermOfPayment_GetDataResult($TermOfPayment_GetDataResult)
    {
      $this->TermOfPayment_GetDataResult = $TermOfPayment_GetDataResult;
      return $this;
    }

}
