<?php

namespace Economic;

class Debtor_GetCityResponse
{

    /**
     * @var string $Debtor_GetCityResult
     */
    protected $Debtor_GetCityResult = null;

    /**
     * @param string $Debtor_GetCityResult
     */
    public function __construct($Debtor_GetCityResult)
    {
      $this->Debtor_GetCityResult = $Debtor_GetCityResult;
    }

    /**
     * @return string
     */
    public function getDebtor_GetCityResult()
    {
      return $this->Debtor_GetCityResult;
    }

    /**
     * @param string $Debtor_GetCityResult
     * @return \Economic\Debtor_GetCityResponse
     */
    public function setDebtor_GetCityResult($Debtor_GetCityResult)
    {
      $this->Debtor_GetCityResult = $Debtor_GetCityResult;
      return $this;
    }

}
