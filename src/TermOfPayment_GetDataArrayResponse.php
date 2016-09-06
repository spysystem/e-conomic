<?php

namespace Economic;

class TermOfPayment_GetDataArrayResponse
{

    /**
     * @var ArrayOfTermOfPaymentData $TermOfPayment_GetDataArrayResult
     */
    protected $TermOfPayment_GetDataArrayResult = null;

    /**
     * @param ArrayOfTermOfPaymentData $TermOfPayment_GetDataArrayResult
     */
    public function __construct($TermOfPayment_GetDataArrayResult)
    {
      $this->TermOfPayment_GetDataArrayResult = $TermOfPayment_GetDataArrayResult;
    }

    /**
     * @return ArrayOfTermOfPaymentData
     */
    public function getTermOfPayment_GetDataArrayResult()
    {
      return $this->TermOfPayment_GetDataArrayResult;
    }

    /**
     * @param ArrayOfTermOfPaymentData $TermOfPayment_GetDataArrayResult
     * @return \Economic\TermOfPayment_GetDataArrayResponse
     */
    public function setTermOfPayment_GetDataArrayResult($TermOfPayment_GetDataArrayResult)
    {
      $this->TermOfPayment_GetDataArrayResult = $TermOfPayment_GetDataArrayResult;
      return $this;
    }

}
