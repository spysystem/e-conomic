<?php

namespace Economic;

class Company_GetCityResponse
{

    /**
     * @var string $Company_GetCityResult
     */
    protected $Company_GetCityResult = null;

    /**
     * @param string $Company_GetCityResult
     */
    public function __construct($Company_GetCityResult)
    {
      $this->Company_GetCityResult = $Company_GetCityResult;
    }

    /**
     * @return string
     */
    public function getCompany_GetCityResult()
    {
      return $this->Company_GetCityResult;
    }

    /**
     * @param string $Company_GetCityResult
     * @return \Economic\Company_GetCityResponse
     */
    public function setCompany_GetCityResult($Company_GetCityResult)
    {
      $this->Company_GetCityResult = $Company_GetCityResult;
      return $this;
    }

}
