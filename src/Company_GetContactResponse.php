<?php

namespace Economic;

class Company_GetContactResponse
{

    /**
     * @var string $Company_GetContactResult
     */
    protected $Company_GetContactResult = null;

    /**
     * @param string $Company_GetContactResult
     */
    public function __construct($Company_GetContactResult)
    {
      $this->Company_GetContactResult = $Company_GetContactResult;
    }

    /**
     * @return string
     */
    public function getCompany_GetContactResult()
    {
      return $this->Company_GetContactResult;
    }

    /**
     * @param string $Company_GetContactResult
     * @return \Economic\Company_GetContactResponse
     */
    public function setCompany_GetContactResult($Company_GetContactResult)
    {
      $this->Company_GetContactResult = $Company_GetContactResult;
      return $this;
    }

}
