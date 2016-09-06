<?php

namespace Economic;

class Creditor_GetCINumberResponse
{

    /**
     * @var string $Creditor_GetCINumberResult
     */
    protected $Creditor_GetCINumberResult = null;

    /**
     * @param string $Creditor_GetCINumberResult
     */
    public function __construct($Creditor_GetCINumberResult)
    {
      $this->Creditor_GetCINumberResult = $Creditor_GetCINumberResult;
    }

    /**
     * @return string
     */
    public function getCreditor_GetCINumberResult()
    {
      return $this->Creditor_GetCINumberResult;
    }

    /**
     * @param string $Creditor_GetCINumberResult
     * @return \Economic\Creditor_GetCINumberResponse
     */
    public function setCreditor_GetCINumberResult($Creditor_GetCINumberResult)
    {
      $this->Creditor_GetCINumberResult = $Creditor_GetCINumberResult;
      return $this;
    }

}
