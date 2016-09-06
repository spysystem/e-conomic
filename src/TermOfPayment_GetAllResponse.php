<?php

namespace Economic;

class TermOfPayment_GetAllResponse
{

    /**
     * @var ArrayOfTermOfPaymentHandle $TermOfPayment_GetAllResult
     */
    protected $TermOfPayment_GetAllResult = null;

    /**
     * @param ArrayOfTermOfPaymentHandle $TermOfPayment_GetAllResult
     */
    public function __construct($TermOfPayment_GetAllResult)
    {
      $this->TermOfPayment_GetAllResult = $TermOfPayment_GetAllResult;
    }

    /**
     * @return ArrayOfTermOfPaymentHandle
     */
    public function getTermOfPayment_GetAllResult()
    {
      return $this->TermOfPayment_GetAllResult;
    }

    /**
     * @param ArrayOfTermOfPaymentHandle $TermOfPayment_GetAllResult
     * @return \Economic\TermOfPayment_GetAllResponse
     */
    public function setTermOfPayment_GetAllResult($TermOfPayment_GetAllResult)
    {
      $this->TermOfPayment_GetAllResult = $TermOfPayment_GetAllResult;
      return $this;
    }

}
