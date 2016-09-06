<?php

namespace Economic;

class Creditor_CreateFromDataResponse
{

    /**
     * @var CreditorHandle $Creditor_CreateFromDataResult
     */
    protected $Creditor_CreateFromDataResult = null;

    /**
     * @param CreditorHandle $Creditor_CreateFromDataResult
     */
    public function __construct($Creditor_CreateFromDataResult)
    {
      $this->Creditor_CreateFromDataResult = $Creditor_CreateFromDataResult;
    }

    /**
     * @return CreditorHandle
     */
    public function getCreditor_CreateFromDataResult()
    {
      return $this->Creditor_CreateFromDataResult;
    }

    /**
     * @param CreditorHandle $Creditor_CreateFromDataResult
     * @return \Economic\Creditor_CreateFromDataResponse
     */
    public function setCreditor_CreateFromDataResult($Creditor_CreateFromDataResult)
    {
      $this->Creditor_CreateFromDataResult = $Creditor_CreateFromDataResult;
      return $this;
    }

}
