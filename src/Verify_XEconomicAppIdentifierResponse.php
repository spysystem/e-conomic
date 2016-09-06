<?php

namespace Economic;

class Verify_XEconomicAppIdentifierResponse
{

    /**
     * @var boolean $Verify_XEconomicAppIdentifierResult
     */
    protected $Verify_XEconomicAppIdentifierResult = null;

    /**
     * @param boolean $Verify_XEconomicAppIdentifierResult
     */
    public function __construct($Verify_XEconomicAppIdentifierResult)
    {
      $this->Verify_XEconomicAppIdentifierResult = $Verify_XEconomicAppIdentifierResult;
    }

    /**
     * @return boolean
     */
    public function getVerify_XEconomicAppIdentifierResult()
    {
      return $this->Verify_XEconomicAppIdentifierResult;
    }

    /**
     * @param boolean $Verify_XEconomicAppIdentifierResult
     * @return \Economic\Verify_XEconomicAppIdentifierResponse
     */
    public function setVerify_XEconomicAppIdentifierResult($Verify_XEconomicAppIdentifierResult)
    {
      $this->Verify_XEconomicAppIdentifierResult = $Verify_XEconomicAppIdentifierResult;
      return $this;
    }

}
