<?php

namespace Economic;

class Creditor_GetAllResponse
{

    /**
     * @var ArrayOfCreditorHandle $Creditor_GetAllResult
     */
    protected $Creditor_GetAllResult = null;

    /**
     * @param ArrayOfCreditorHandle $Creditor_GetAllResult
     */
    public function __construct($Creditor_GetAllResult)
    {
      $this->Creditor_GetAllResult = $Creditor_GetAllResult;
    }

    /**
     * @return ArrayOfCreditorHandle
     */
    public function getCreditor_GetAllResult()
    {
      return $this->Creditor_GetAllResult;
    }

    /**
     * @param ArrayOfCreditorHandle $Creditor_GetAllResult
     * @return \Economic\Creditor_GetAllResponse
     */
    public function setCreditor_GetAllResult($Creditor_GetAllResult)
    {
      $this->Creditor_GetAllResult = $Creditor_GetAllResult;
      return $this;
    }

}
