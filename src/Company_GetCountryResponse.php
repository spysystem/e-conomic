<?php

namespace Economic;

class Company_GetCountryResponse
{

    /**
     * @var string $Company_GetCountryResult
     */
    protected $Company_GetCountryResult = null;

    /**
     * @param string $Company_GetCountryResult
     */
    public function __construct($Company_GetCountryResult)
    {
      $this->Company_GetCountryResult = $Company_GetCountryResult;
    }

    /**
     * @return string
     */
    public function getCompany_GetCountryResult()
    {
      return $this->Company_GetCountryResult;
    }

    /**
     * @param string $Company_GetCountryResult
     * @return \Economic\Company_GetCountryResponse
     */
    public function setCompany_GetCountryResult($Company_GetCountryResult)
    {
      $this->Company_GetCountryResult = $Company_GetCountryResult;
      return $this;
    }

}
