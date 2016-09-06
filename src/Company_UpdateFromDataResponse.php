<?php

namespace Economic;

class Company_UpdateFromDataResponse
{

    /**
     * @var CompanyHandle $Company_UpdateFromDataResult
     */
    protected $Company_UpdateFromDataResult = null;

    /**
     * @param CompanyHandle $Company_UpdateFromDataResult
     */
    public function __construct($Company_UpdateFromDataResult)
    {
      $this->Company_UpdateFromDataResult = $Company_UpdateFromDataResult;
    }

    /**
     * @return CompanyHandle
     */
    public function getCompany_UpdateFromDataResult()
    {
      return $this->Company_UpdateFromDataResult;
    }

    /**
     * @param CompanyHandle $Company_UpdateFromDataResult
     * @return \Economic\Company_UpdateFromDataResponse
     */
    public function setCompany_UpdateFromDataResult($Company_UpdateFromDataResult)
    {
      $this->Company_UpdateFromDataResult = $Company_UpdateFromDataResult;
      return $this;
    }

}
