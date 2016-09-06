<?php

namespace Economic;

class Company_GetMobileNumberResponse
{

    /**
     * @var string $Company_GetMobileNumberResult
     */
    protected $Company_GetMobileNumberResult = null;

    /**
     * @param string $Company_GetMobileNumberResult
     */
    public function __construct($Company_GetMobileNumberResult)
    {
      $this->Company_GetMobileNumberResult = $Company_GetMobileNumberResult;
    }

    /**
     * @return string
     */
    public function getCompany_GetMobileNumberResult()
    {
      return $this->Company_GetMobileNumberResult;
    }

    /**
     * @param string $Company_GetMobileNumberResult
     * @return \Economic\Company_GetMobileNumberResponse
     */
    public function setCompany_GetMobileNumberResult($Company_GetMobileNumberResult)
    {
      $this->Company_GetMobileNumberResult = $Company_GetMobileNumberResult;
      return $this;
    }

}
