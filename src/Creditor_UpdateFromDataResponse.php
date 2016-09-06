<?php

namespace Economic;

class Creditor_UpdateFromDataResponse
{

    /**
     * @var CreditorHandle $Creditor_UpdateFromDataResult
     */
    protected $Creditor_UpdateFromDataResult = null;

    /**
     * @param CreditorHandle $Creditor_UpdateFromDataResult
     */
    public function __construct($Creditor_UpdateFromDataResult)
    {
      $this->Creditor_UpdateFromDataResult = $Creditor_UpdateFromDataResult;
    }

    /**
     * @return CreditorHandle
     */
    public function getCreditor_UpdateFromDataResult()
    {
      return $this->Creditor_UpdateFromDataResult;
    }

    /**
     * @param CreditorHandle $Creditor_UpdateFromDataResult
     * @return \Economic\Creditor_UpdateFromDataResponse
     */
    public function setCreditor_UpdateFromDataResult($Creditor_UpdateFromDataResult)
    {
      $this->Creditor_UpdateFromDataResult = $Creditor_UpdateFromDataResult;
      return $this;
    }

}
