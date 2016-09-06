<?php

namespace Economic;

class Creditor_GetNumberResponse
{

    /**
     * @var string $Creditor_GetNumberResult
     */
    protected $Creditor_GetNumberResult = null;

    /**
     * @param string $Creditor_GetNumberResult
     */
    public function __construct($Creditor_GetNumberResult)
    {
      $this->Creditor_GetNumberResult = $Creditor_GetNumberResult;
    }

    /**
     * @return string
     */
    public function getCreditor_GetNumberResult()
    {
      return $this->Creditor_GetNumberResult;
    }

    /**
     * @param string $Creditor_GetNumberResult
     * @return \Economic\Creditor_GetNumberResponse
     */
    public function setCreditor_GetNumberResult($Creditor_GetNumberResult)
    {
      $this->Creditor_GetNumberResult = $Creditor_GetNumberResult;
      return $this;
    }

}
