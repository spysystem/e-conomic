<?php

namespace Economic;

class CreditorGroup_GetCreditorsResponse
{

    /**
     * @var ArrayOfCreditorHandle $CreditorGroup_GetCreditorsResult
     */
    protected $CreditorGroup_GetCreditorsResult = null;

    /**
     * @param ArrayOfCreditorHandle $CreditorGroup_GetCreditorsResult
     */
    public function __construct($CreditorGroup_GetCreditorsResult)
    {
      $this->CreditorGroup_GetCreditorsResult = $CreditorGroup_GetCreditorsResult;
    }

    /**
     * @return ArrayOfCreditorHandle
     */
    public function getCreditorGroup_GetCreditorsResult()
    {
      return $this->CreditorGroup_GetCreditorsResult;
    }

    /**
     * @param ArrayOfCreditorHandle $CreditorGroup_GetCreditorsResult
     * @return \Economic\CreditorGroup_GetCreditorsResponse
     */
    public function setCreditorGroup_GetCreditorsResult($CreditorGroup_GetCreditorsResult)
    {
      $this->CreditorGroup_GetCreditorsResult = $CreditorGroup_GetCreditorsResult;
      return $this;
    }

}
