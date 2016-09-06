<?php

namespace Economic;

class Company_GetDataArrayResponse
{

    /**
     * @var ArrayOfCompanyData $Company_GetDataArrayResult
     */
    protected $Company_GetDataArrayResult = null;

    /**
     * @param ArrayOfCompanyData $Company_GetDataArrayResult
     */
    public function __construct($Company_GetDataArrayResult)
    {
      $this->Company_GetDataArrayResult = $Company_GetDataArrayResult;
    }

    /**
     * @return ArrayOfCompanyData
     */
    public function getCompany_GetDataArrayResult()
    {
      return $this->Company_GetDataArrayResult;
    }

    /**
     * @param ArrayOfCompanyData $Company_GetDataArrayResult
     * @return \Economic\Company_GetDataArrayResponse
     */
    public function setCompany_GetDataArrayResult($Company_GetDataArrayResult)
    {
      $this->Company_GetDataArrayResult = $Company_GetDataArrayResult;
      return $this;
    }

}
