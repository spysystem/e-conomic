<?php

namespace Economic;

class TermOfPayment_CreateFromDataArrayResponse
{

    /**
     * @var ArrayOfTermOfPaymentHandle $TermOfPayment_CreateFromDataArrayResult
     */
    protected $TermOfPayment_CreateFromDataArrayResult = null;

    /**
     * @param ArrayOfTermOfPaymentHandle $TermOfPayment_CreateFromDataArrayResult
     */
    public function __construct($TermOfPayment_CreateFromDataArrayResult)
    {
      $this->TermOfPayment_CreateFromDataArrayResult = $TermOfPayment_CreateFromDataArrayResult;
    }

    /**
     * @return ArrayOfTermOfPaymentHandle
     */
    public function getTermOfPayment_CreateFromDataArrayResult()
    {
      return $this->TermOfPayment_CreateFromDataArrayResult;
    }

    /**
     * @param ArrayOfTermOfPaymentHandle $TermOfPayment_CreateFromDataArrayResult
     * @return \Economic\TermOfPayment_CreateFromDataArrayResponse
     */
    public function setTermOfPayment_CreateFromDataArrayResult($TermOfPayment_CreateFromDataArrayResult)
    {
      $this->TermOfPayment_CreateFromDataArrayResult = $TermOfPayment_CreateFromDataArrayResult;
      return $this;
    }

}
