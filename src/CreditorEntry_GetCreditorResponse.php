<?php

namespace Economic;

class CreditorEntry_GetCreditorResponse
{

    /**
     * @var CreditorHandle $CreditorEntry_GetCreditorResult
     */
    protected $CreditorEntry_GetCreditorResult = null;

    /**
     * @param CreditorHandle $CreditorEntry_GetCreditorResult
     */
    public function __construct($CreditorEntry_GetCreditorResult)
    {
      $this->CreditorEntry_GetCreditorResult = $CreditorEntry_GetCreditorResult;
    }

    /**
     * @return CreditorHandle
     */
    public function getCreditorEntry_GetCreditorResult()
    {
      return $this->CreditorEntry_GetCreditorResult;
    }

    /**
     * @param CreditorHandle $CreditorEntry_GetCreditorResult
     * @return \Economic\CreditorEntry_GetCreditorResponse
     */
    public function setCreditorEntry_GetCreditorResult($CreditorEntry_GetCreditorResult)
    {
      $this->CreditorEntry_GetCreditorResult = $CreditorEntry_GetCreditorResult;
      return $this;
    }

}
