<?php

namespace Economic;

class Creditor_CreateResponse
{

    /**
     * @var CreditorHandle $Creditor_CreateResult
     */
    protected $Creditor_CreateResult = null;

    /**
     * @param CreditorHandle $Creditor_CreateResult
     */
    public function __construct($Creditor_CreateResult)
    {
      $this->Creditor_CreateResult = $Creditor_CreateResult;
    }

    /**
     * @return CreditorHandle
     */
    public function getCreditor_CreateResult()
    {
      return $this->Creditor_CreateResult;
    }

    /**
     * @param CreditorHandle $Creditor_CreateResult
     * @return \Economic\Creditor_CreateResponse
     */
    public function setCreditor_CreateResult($Creditor_CreateResult)
    {
      $this->Creditor_CreateResult = $Creditor_CreateResult;
      return $this;
    }

}
