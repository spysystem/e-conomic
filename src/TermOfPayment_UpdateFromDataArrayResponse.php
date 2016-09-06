<?php

namespace Economic;

class TermOfPayment_UpdateFromDataArrayResponse
{

    /**
     * @var ArrayOfTermOfPaymentHandle $TermOfPayment_UpdateFromDataArrayResult
     */
    protected $TermOfPayment_UpdateFromDataArrayResult = null;

    /**
     * @param ArrayOfTermOfPaymentHandle $TermOfPayment_UpdateFromDataArrayResult
     */
    public function __construct($TermOfPayment_UpdateFromDataArrayResult)
    {
      $this->TermOfPayment_UpdateFromDataArrayResult = $TermOfPayment_UpdateFromDataArrayResult;
    }

    /**
     * @return ArrayOfTermOfPaymentHandle
     */
    public function getTermOfPayment_UpdateFromDataArrayResult()
    {
      return $this->TermOfPayment_UpdateFromDataArrayResult;
    }

    /**
     * @param ArrayOfTermOfPaymentHandle $TermOfPayment_UpdateFromDataArrayResult
     * @return \Economic\TermOfPayment_UpdateFromDataArrayResponse
     */
    public function setTermOfPayment_UpdateFromDataArrayResult($TermOfPayment_UpdateFromDataArrayResult)
    {
      $this->TermOfPayment_UpdateFromDataArrayResult = $TermOfPayment_UpdateFromDataArrayResult;
      return $this;
    }

}
