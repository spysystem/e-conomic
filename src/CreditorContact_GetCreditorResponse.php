<?php

namespace Economic;

class CreditorContact_GetCreditorResponse
{

    /**
     * @var CreditorHandle $CreditorContact_GetCreditorResult
     */
    protected $CreditorContact_GetCreditorResult = null;

    /**
     * @param CreditorHandle $CreditorContact_GetCreditorResult
     */
    public function __construct($CreditorContact_GetCreditorResult)
    {
      $this->CreditorContact_GetCreditorResult = $CreditorContact_GetCreditorResult;
    }

    /**
     * @return CreditorHandle
     */
    public function getCreditorContact_GetCreditorResult()
    {
      return $this->CreditorContact_GetCreditorResult;
    }

    /**
     * @param CreditorHandle $CreditorContact_GetCreditorResult
     * @return \Economic\CreditorContact_GetCreditorResponse
     */
    public function setCreditorContact_GetCreditorResult($CreditorContact_GetCreditorResult)
    {
      $this->CreditorContact_GetCreditorResult = $CreditorContact_GetCreditorResult;
      return $this;
    }

}
