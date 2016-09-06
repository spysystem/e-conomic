<?php

namespace Economic;

class Creditor_GetCreditorGroupResponse
{

    /**
     * @var CreditorGroupHandle $Creditor_GetCreditorGroupResult
     */
    protected $Creditor_GetCreditorGroupResult = null;

    /**
     * @param CreditorGroupHandle $Creditor_GetCreditorGroupResult
     */
    public function __construct($Creditor_GetCreditorGroupResult)
    {
      $this->Creditor_GetCreditorGroupResult = $Creditor_GetCreditorGroupResult;
    }

    /**
     * @return CreditorGroupHandle
     */
    public function getCreditor_GetCreditorGroupResult()
    {
      return $this->Creditor_GetCreditorGroupResult;
    }

    /**
     * @param CreditorGroupHandle $Creditor_GetCreditorGroupResult
     * @return \Economic\Creditor_GetCreditorGroupResponse
     */
    public function setCreditor_GetCreditorGroupResult($Creditor_GetCreditorGroupResult)
    {
      $this->Creditor_GetCreditorGroupResult = $Creditor_GetCreditorGroupResult;
      return $this;
    }

}
