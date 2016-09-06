<?php

namespace Economic;

class TermOfPayment_CreateFromDataResponse
{

    /**
     * @var TermOfPaymentHandle $TermOfPayment_CreateFromDataResult
     */
    protected $TermOfPayment_CreateFromDataResult = null;

    /**
     * @param TermOfPaymentHandle $TermOfPayment_CreateFromDataResult
     */
    public function __construct($TermOfPayment_CreateFromDataResult)
    {
      $this->TermOfPayment_CreateFromDataResult = $TermOfPayment_CreateFromDataResult;
    }

    /**
     * @return TermOfPaymentHandle
     */
    public function getTermOfPayment_CreateFromDataResult()
    {
      return $this->TermOfPayment_CreateFromDataResult;
    }

    /**
     * @param TermOfPaymentHandle $TermOfPayment_CreateFromDataResult
     * @return \Economic\TermOfPayment_CreateFromDataResponse
     */
    public function setTermOfPayment_CreateFromDataResult($TermOfPayment_CreateFromDataResult)
    {
      $this->TermOfPayment_CreateFromDataResult = $TermOfPayment_CreateFromDataResult;
      return $this;
    }

}
