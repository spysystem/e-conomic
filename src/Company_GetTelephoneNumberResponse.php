<?php

namespace Economic;

class Company_GetTelephoneNumberResponse
{

    /**
     * @var string $Company_GetTelephoneNumberResult
     */
    protected $Company_GetTelephoneNumberResult = null;

    /**
     * @param string $Company_GetTelephoneNumberResult
     */
    public function __construct($Company_GetTelephoneNumberResult)
    {
      $this->Company_GetTelephoneNumberResult = $Company_GetTelephoneNumberResult;
    }

    /**
     * @return string
     */
    public function getCompany_GetTelephoneNumberResult()
    {
      return $this->Company_GetTelephoneNumberResult;
    }

    /**
     * @param string $Company_GetTelephoneNumberResult
     * @return \Economic\Company_GetTelephoneNumberResponse
     */
    public function setCompany_GetTelephoneNumberResult($Company_GetTelephoneNumberResult)
    {
      $this->Company_GetTelephoneNumberResult = $Company_GetTelephoneNumberResult;
      return $this;
    }

}
