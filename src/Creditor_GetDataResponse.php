<?php

namespace Economic;

class Creditor_GetDataResponse
{

    /**
     * @var CreditorData $Creditor_GetDataResult
     */
    protected $Creditor_GetDataResult = null;

    /**
     * @param CreditorData $Creditor_GetDataResult
     */
    public function __construct($Creditor_GetDataResult)
    {
      $this->Creditor_GetDataResult = $Creditor_GetDataResult;
    }

    /**
     * @return CreditorData
     */
    public function getCreditor_GetDataResult()
    {
      return $this->Creditor_GetDataResult;
    }

    /**
     * @param CreditorData $Creditor_GetDataResult
     * @return \Economic\Creditor_GetDataResponse
     */
    public function setCreditor_GetDataResult($Creditor_GetDataResult)
    {
      $this->Creditor_GetDataResult = $Creditor_GetDataResult;
      return $this;
    }

}
