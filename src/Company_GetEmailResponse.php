<?php

namespace Economic;

class Company_GetEmailResponse
{

    /**
     * @var string $Company_GetEmailResult
     */
    protected $Company_GetEmailResult = null;

    /**
     * @param string $Company_GetEmailResult
     */
    public function __construct($Company_GetEmailResult)
    {
      $this->Company_GetEmailResult = $Company_GetEmailResult;
    }

    /**
     * @return string
     */
    public function getCompany_GetEmailResult()
    {
      return $this->Company_GetEmailResult;
    }

    /**
     * @param string $Company_GetEmailResult
     * @return \Economic\Company_GetEmailResponse
     */
    public function setCompany_GetEmailResult($Company_GetEmailResult)
    {
      $this->Company_GetEmailResult = $Company_GetEmailResult;
      return $this;
    }

}
