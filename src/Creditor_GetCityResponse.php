<?php

namespace Economic;

class Creditor_GetCityResponse
{

    /**
     * @var string $Creditor_GetCityResult
     */
    protected $Creditor_GetCityResult = null;

    /**
     * @param string $Creditor_GetCityResult
     */
    public function __construct($Creditor_GetCityResult)
    {
      $this->Creditor_GetCityResult = $Creditor_GetCityResult;
    }

    /**
     * @return string
     */
    public function getCreditor_GetCityResult()
    {
      return $this->Creditor_GetCityResult;
    }

    /**
     * @param string $Creditor_GetCityResult
     * @return \Economic\Creditor_GetCityResponse
     */
    public function setCreditor_GetCityResult($Creditor_GetCityResult)
    {
      $this->Creditor_GetCityResult = $Creditor_GetCityResult;
      return $this;
    }

}
