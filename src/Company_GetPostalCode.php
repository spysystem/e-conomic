<?php

namespace Economic;

class Company_GetPostalCode
{

    /**
     * @var CompanyHandle $companyHandle
     */
    protected $companyHandle = null;

    /**
     * @param CompanyHandle $companyHandle
     */
    public function __construct($companyHandle)
    {
      $this->companyHandle = $companyHandle;
    }

    /**
     * @return CompanyHandle
     */
    public function getCompanyHandle()
    {
      return $this->companyHandle;
    }

    /**
     * @param CompanyHandle $companyHandle
     * @return \Economic\Company_GetPostalCode
     */
    public function setCompanyHandle($companyHandle)
    {
      $this->companyHandle = $companyHandle;
      return $this;
    }

}
