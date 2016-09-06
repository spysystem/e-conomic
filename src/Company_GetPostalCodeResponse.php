<?php

namespace Economic;

class Company_GetPostalCodeResponse
{

    /**
     * @var string $Company_GetPostalCodeResult
     */
    protected $Company_GetPostalCodeResult = null;

    /**
     * @param string $Company_GetPostalCodeResult
     */
    public function __construct($Company_GetPostalCodeResult)
    {
      $this->Company_GetPostalCodeResult = $Company_GetPostalCodeResult;
    }

    /**
     * @return string
     */
    public function getCompany_GetPostalCodeResult()
    {
      return $this->Company_GetPostalCodeResult;
    }

    /**
     * @param string $Company_GetPostalCodeResult
     * @return \Economic\Company_GetPostalCodeResponse
     */
    public function setCompany_GetPostalCodeResult($Company_GetPostalCodeResult)
    {
      $this->Company_GetPostalCodeResult = $Company_GetPostalCodeResult;
      return $this;
    }

}
