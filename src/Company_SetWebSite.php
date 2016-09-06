<?php

namespace Economic;

class Company_SetWebSite
{

    /**
     * @var CompanyHandle $companyHandle
     */
    protected $companyHandle = null;

    /**
     * @var string $value
     */
    protected $value = null;

    /**
     * @param CompanyHandle $companyHandle
     * @param string $value
     */
    public function __construct($companyHandle, $value)
    {
      $this->companyHandle = $companyHandle;
      $this->value = $value;
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
     * @return \Economic\Company_SetWebSite
     */
    public function setCompanyHandle($companyHandle)
    {
      $this->companyHandle = $companyHandle;
      return $this;
    }

    /**
     * @return string
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param string $value
     * @return \Economic\Company_SetWebSite
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

}
