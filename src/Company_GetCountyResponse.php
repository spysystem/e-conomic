<?php

namespace Economic;

class Company_GetCountyResponse
{

    /**
     * @var string $Company_GetCountyResult
     */
    protected $Company_GetCountyResult = null;

    /**
     * @param string $Company_GetCountyResult
     */
    public function __construct($Company_GetCountyResult)
    {
      $this->Company_GetCountyResult = $Company_GetCountyResult;
    }

    /**
     * @return string
     */
    public function getCompany_GetCountyResult()
    {
      return $this->Company_GetCountyResult;
    }

    /**
     * @param string $Company_GetCountyResult
     * @return \Economic\Company_GetCountyResponse
     */
    public function setCompany_GetCountyResult($Company_GetCountyResult)
    {
      $this->Company_GetCountyResult = $Company_GetCountyResult;
      return $this;
    }

}
