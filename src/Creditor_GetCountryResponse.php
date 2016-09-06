<?php

namespace Economic;

class Creditor_GetCountryResponse
{

    /**
     * @var string $Creditor_GetCountryResult
     */
    protected $Creditor_GetCountryResult = null;

    /**
     * @param string $Creditor_GetCountryResult
     */
    public function __construct($Creditor_GetCountryResult)
    {
      $this->Creditor_GetCountryResult = $Creditor_GetCountryResult;
    }

    /**
     * @return string
     */
    public function getCreditor_GetCountryResult()
    {
      return $this->Creditor_GetCountryResult;
    }

    /**
     * @param string $Creditor_GetCountryResult
     * @return \Economic\Creditor_GetCountryResponse
     */
    public function setCreditor_GetCountryResult($Creditor_GetCountryResult)
    {
      $this->Creditor_GetCountryResult = $Creditor_GetCountryResult;
      return $this;
    }

}
