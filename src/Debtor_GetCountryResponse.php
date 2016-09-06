<?php

namespace Economic;

class Debtor_GetCountryResponse
{

    /**
     * @var string $Debtor_GetCountryResult
     */
    protected $Debtor_GetCountryResult = null;

    /**
     * @param string $Debtor_GetCountryResult
     */
    public function __construct($Debtor_GetCountryResult)
    {
      $this->Debtor_GetCountryResult = $Debtor_GetCountryResult;
    }

    /**
     * @return string
     */
    public function getDebtor_GetCountryResult()
    {
      return $this->Debtor_GetCountryResult;
    }

    /**
     * @param string $Debtor_GetCountryResult
     * @return \Economic\Debtor_GetCountryResponse
     */
    public function setDebtor_GetCountryResult($Debtor_GetCountryResult)
    {
      $this->Debtor_GetCountryResult = $Debtor_GetCountryResult;
      return $this;
    }

}
