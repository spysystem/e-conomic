<?php

namespace Economic;

class TermOfPayment_FindByNameResponse
{

    /**
     * @var ArrayOfTermOfPaymentHandle $TermOfPayment_FindByNameResult
     */
    protected $TermOfPayment_FindByNameResult = null;

    /**
     * @param ArrayOfTermOfPaymentHandle $TermOfPayment_FindByNameResult
     */
    public function __construct($TermOfPayment_FindByNameResult)
    {
      $this->TermOfPayment_FindByNameResult = $TermOfPayment_FindByNameResult;
    }

    /**
     * @return ArrayOfTermOfPaymentHandle
     */
    public function getTermOfPayment_FindByNameResult()
    {
      return $this->TermOfPayment_FindByNameResult;
    }

    /**
     * @param ArrayOfTermOfPaymentHandle $TermOfPayment_FindByNameResult
     * @return \Economic\TermOfPayment_FindByNameResponse
     */
    public function setTermOfPayment_FindByNameResult($TermOfPayment_FindByNameResult)
    {
      $this->TermOfPayment_FindByNameResult = $TermOfPayment_FindByNameResult;
      return $this;
    }

}
