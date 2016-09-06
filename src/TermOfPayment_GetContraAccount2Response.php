<?php

namespace Economic;

class TermOfPayment_GetContraAccount2Response
{

    /**
     * @var AccountHandle $TermOfPayment_GetContraAccount2Result
     */
    protected $TermOfPayment_GetContraAccount2Result = null;

    /**
     * @param AccountHandle $TermOfPayment_GetContraAccount2Result
     */
    public function __construct($TermOfPayment_GetContraAccount2Result)
    {
      $this->TermOfPayment_GetContraAccount2Result = $TermOfPayment_GetContraAccount2Result;
    }

    /**
     * @return AccountHandle
     */
    public function getTermOfPayment_GetContraAccount2Result()
    {
      return $this->TermOfPayment_GetContraAccount2Result;
    }

    /**
     * @param AccountHandle $TermOfPayment_GetContraAccount2Result
     * @return \Economic\TermOfPayment_GetContraAccount2Response
     */
    public function setTermOfPayment_GetContraAccount2Result($TermOfPayment_GetContraAccount2Result)
    {
      $this->TermOfPayment_GetContraAccount2Result = $TermOfPayment_GetContraAccount2Result;
      return $this;
    }

}
