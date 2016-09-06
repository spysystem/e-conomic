<?php

namespace Economic;

class Company_GetDataResponse
{

    /**
     * @var CompanyData $Company_GetDataResult
     */
    protected $Company_GetDataResult = null;

    /**
     * @param CompanyData $Company_GetDataResult
     */
    public function __construct($Company_GetDataResult)
    {
      $this->Company_GetDataResult = $Company_GetDataResult;
    }

    /**
     * @return CompanyData
     */
    public function getCompany_GetDataResult()
    {
      return $this->Company_GetDataResult;
    }

    /**
     * @param CompanyData $Company_GetDataResult
     * @return \Economic\Company_GetDataResponse
     */
    public function setCompany_GetDataResult($Company_GetDataResult)
    {
      $this->Company_GetDataResult = $Company_GetDataResult;
      return $this;
    }

}
