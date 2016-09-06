<?php

namespace Economic;

class Company_GetWebSiteResponse
{

    /**
     * @var string $Company_GetWebSiteResult
     */
    protected $Company_GetWebSiteResult = null;

    /**
     * @param string $Company_GetWebSiteResult
     */
    public function __construct($Company_GetWebSiteResult)
    {
      $this->Company_GetWebSiteResult = $Company_GetWebSiteResult;
    }

    /**
     * @return string
     */
    public function getCompany_GetWebSiteResult()
    {
      return $this->Company_GetWebSiteResult;
    }

    /**
     * @param string $Company_GetWebSiteResult
     * @return \Economic\Company_GetWebSiteResponse
     */
    public function setCompany_GetWebSiteResult($Company_GetWebSiteResult)
    {
      $this->Company_GetWebSiteResult = $Company_GetWebSiteResult;
      return $this;
    }

}
