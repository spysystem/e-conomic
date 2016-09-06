<?php

namespace Economic;

class Company_GetAffiliationResponse
{

    /**
     * @var string $Company_GetAffiliationResult
     */
    protected $Company_GetAffiliationResult = null;

    /**
     * @param string $Company_GetAffiliationResult
     */
    public function __construct($Company_GetAffiliationResult)
    {
      $this->Company_GetAffiliationResult = $Company_GetAffiliationResult;
    }

    /**
     * @return string
     */
    public function getCompany_GetAffiliationResult()
    {
      return $this->Company_GetAffiliationResult;
    }

    /**
     * @param string $Company_GetAffiliationResult
     * @return \Economic\Company_GetAffiliationResponse
     */
    public function setCompany_GetAffiliationResult($Company_GetAffiliationResult)
    {
      $this->Company_GetAffiliationResult = $Company_GetAffiliationResult;
      return $this;
    }

}
