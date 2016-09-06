<?php

namespace Economic;

class Creditor_FindByNumberResponse
{

    /**
     * @var CreditorHandle $Creditor_FindByNumberResult
     */
    protected $Creditor_FindByNumberResult = null;

    /**
     * @param CreditorHandle $Creditor_FindByNumberResult
     */
    public function __construct($Creditor_FindByNumberResult)
    {
      $this->Creditor_FindByNumberResult = $Creditor_FindByNumberResult;
    }

    /**
     * @return CreditorHandle
     */
    public function getCreditor_FindByNumberResult()
    {
      return $this->Creditor_FindByNumberResult;
    }

    /**
     * @param CreditorHandle $Creditor_FindByNumberResult
     * @return \Economic\Creditor_FindByNumberResponse
     */
    public function setCreditor_FindByNumberResult($Creditor_FindByNumberResult)
    {
      $this->Creditor_FindByNumberResult = $Creditor_FindByNumberResult;
      return $this;
    }

}
