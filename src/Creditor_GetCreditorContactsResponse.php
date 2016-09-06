<?php

namespace Economic;

class Creditor_GetCreditorContactsResponse
{

    /**
     * @var ArrayOfCreditorContactHandle $Creditor_GetCreditorContactsResult
     */
    protected $Creditor_GetCreditorContactsResult = null;

    /**
     * @param ArrayOfCreditorContactHandle $Creditor_GetCreditorContactsResult
     */
    public function __construct($Creditor_GetCreditorContactsResult)
    {
      $this->Creditor_GetCreditorContactsResult = $Creditor_GetCreditorContactsResult;
    }

    /**
     * @return ArrayOfCreditorContactHandle
     */
    public function getCreditor_GetCreditorContactsResult()
    {
      return $this->Creditor_GetCreditorContactsResult;
    }

    /**
     * @param ArrayOfCreditorContactHandle $Creditor_GetCreditorContactsResult
     * @return \Economic\Creditor_GetCreditorContactsResponse
     */
    public function setCreditor_GetCreditorContactsResult($Creditor_GetCreditorContactsResult)
    {
      $this->Creditor_GetCreditorContactsResult = $Creditor_GetCreditorContactsResult;
      return $this;
    }

}
