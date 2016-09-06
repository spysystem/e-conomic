<?php

namespace Economic;

class Creditor_GetAllUpdatedResponse
{

    /**
     * @var ArrayOfCreditorHandle $Creditor_GetAllUpdatedResult
     */
    protected $Creditor_GetAllUpdatedResult = null;

    /**
     * @param ArrayOfCreditorHandle $Creditor_GetAllUpdatedResult
     */
    public function __construct($Creditor_GetAllUpdatedResult)
    {
      $this->Creditor_GetAllUpdatedResult = $Creditor_GetAllUpdatedResult;
    }

    /**
     * @return ArrayOfCreditorHandle
     */
    public function getCreditor_GetAllUpdatedResult()
    {
      return $this->Creditor_GetAllUpdatedResult;
    }

    /**
     * @param ArrayOfCreditorHandle $Creditor_GetAllUpdatedResult
     * @return \Economic\Creditor_GetAllUpdatedResponse
     */
    public function setCreditor_GetAllUpdatedResult($Creditor_GetAllUpdatedResult)
    {
      $this->Creditor_GetAllUpdatedResult = $Creditor_GetAllUpdatedResult;
      return $this;
    }

}
