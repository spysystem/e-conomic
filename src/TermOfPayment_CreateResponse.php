<?php

namespace Economic;

class TermOfPayment_CreateResponse
{

    /**
     * @var TermOfPaymentHandle $TermOfPayment_CreateResult
     */
    protected $TermOfPayment_CreateResult = null;

    /**
     * @param TermOfPaymentHandle $TermOfPayment_CreateResult
     */
    public function __construct($TermOfPayment_CreateResult)
    {
      $this->TermOfPayment_CreateResult = $TermOfPayment_CreateResult;
    }

    /**
     * @return TermOfPaymentHandle
     */
    public function getTermOfPayment_CreateResult()
    {
      return $this->TermOfPayment_CreateResult;
    }

    /**
     * @param TermOfPaymentHandle $TermOfPayment_CreateResult
     * @return \Economic\TermOfPayment_CreateResponse
     */
    public function setTermOfPayment_CreateResult($TermOfPayment_CreateResult)
    {
      $this->TermOfPayment_CreateResult = $TermOfPayment_CreateResult;
      return $this;
    }

}
