<?php

namespace Economic;

class Company_GetResponse
{

    /**
     * @var CompanyHandle $Company_GetResult
     */
    protected $Company_GetResult = null;

    /**
     * @param CompanyHandle $Company_GetResult
     */
    public function __construct($Company_GetResult)
    {
      $this->Company_GetResult = $Company_GetResult;
    }

    /**
     * @return CompanyHandle
     */
    public function getCompany_GetResult()
    {
      return $this->Company_GetResult;
    }

    /**
     * @param CompanyHandle $Company_GetResult
     * @return \Economic\Company_GetResponse
     */
    public function setCompany_GetResult($Company_GetResult)
    {
      $this->Company_GetResult = $Company_GetResult;
      return $this;
    }

}
