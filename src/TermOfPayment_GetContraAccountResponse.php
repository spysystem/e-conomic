<?php

namespace Economic;

class TermOfPayment_GetContraAccountResponse
{

    /**
     * @var AccountHandle $TermOfPayment_GetContraAccountResult
     */
    protected $TermOfPayment_GetContraAccountResult = null;

    /**
     * @param AccountHandle $TermOfPayment_GetContraAccountResult
     */
    public function __construct($TermOfPayment_GetContraAccountResult)
    {
      $this->TermOfPayment_GetContraAccountResult = $TermOfPayment_GetContraAccountResult;
    }

    /**
     * @return AccountHandle
     */
    public function getTermOfPayment_GetContraAccountResult()
    {
      return $this->TermOfPayment_GetContraAccountResult;
    }

    /**
     * @param AccountHandle $TermOfPayment_GetContraAccountResult
     * @return \Economic\TermOfPayment_GetContraAccountResponse
     */
    public function setTermOfPayment_GetContraAccountResult($TermOfPayment_GetContraAccountResult)
    {
      $this->TermOfPayment_GetContraAccountResult = $TermOfPayment_GetContraAccountResult;
      return $this;
    }

}
