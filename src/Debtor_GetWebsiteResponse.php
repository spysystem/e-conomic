<?php

namespace Economic;

class Debtor_GetWebsiteResponse
{

    /**
     * @var string $Debtor_GetWebsiteResult
     */
    protected $Debtor_GetWebsiteResult = null;

    /**
     * @param string $Debtor_GetWebsiteResult
     */
    public function __construct($Debtor_GetWebsiteResult)
    {
      $this->Debtor_GetWebsiteResult = $Debtor_GetWebsiteResult;
    }

    /**
     * @return string
     */
    public function getDebtor_GetWebsiteResult()
    {
      return $this->Debtor_GetWebsiteResult;
    }

    /**
     * @param string $Debtor_GetWebsiteResult
     * @return \Economic\Debtor_GetWebsiteResponse
     */
    public function setDebtor_GetWebsiteResult($Debtor_GetWebsiteResult)
    {
      $this->Debtor_GetWebsiteResult = $Debtor_GetWebsiteResult;
      return $this;
    }

}
