<?php

namespace Economic;

class TermOfPayment_UpdateFromDataResponse
{

    /**
     * @var TermOfPaymentHandle $TermOfPayment_UpdateFromDataResult
     */
    protected $TermOfPayment_UpdateFromDataResult = null;

    /**
     * @param TermOfPaymentHandle $TermOfPayment_UpdateFromDataResult
     */
    public function __construct($TermOfPayment_UpdateFromDataResult)
    {
      $this->TermOfPayment_UpdateFromDataResult = $TermOfPayment_UpdateFromDataResult;
    }

    /**
     * @return TermOfPaymentHandle
     */
    public function getTermOfPayment_UpdateFromDataResult()
    {
      return $this->TermOfPayment_UpdateFromDataResult;
    }

    /**
     * @param TermOfPaymentHandle $TermOfPayment_UpdateFromDataResult
     * @return \Economic\TermOfPayment_UpdateFromDataResponse
     */
    public function setTermOfPayment_UpdateFromDataResult($TermOfPayment_UpdateFromDataResult)
    {
      $this->TermOfPayment_UpdateFromDataResult = $TermOfPayment_UpdateFromDataResult;
      return $this;
    }

}
