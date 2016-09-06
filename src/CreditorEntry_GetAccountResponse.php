<?php

namespace Economic;

class CreditorEntry_GetAccountResponse
{

    /**
     * @var AccountHandle $CreditorEntry_GetAccountResult
     */
    protected $CreditorEntry_GetAccountResult = null;

    /**
     * @param AccountHandle $CreditorEntry_GetAccountResult
     */
    public function __construct($CreditorEntry_GetAccountResult)
    {
      $this->CreditorEntry_GetAccountResult = $CreditorEntry_GetAccountResult;
    }

    /**
     * @return AccountHandle
     */
    public function getCreditorEntry_GetAccountResult()
    {
      return $this->CreditorEntry_GetAccountResult;
    }

    /**
     * @param AccountHandle $CreditorEntry_GetAccountResult
     * @return \Economic\CreditorEntry_GetAccountResponse
     */
    public function setCreditorEntry_GetAccountResult($CreditorEntry_GetAccountResult)
    {
      $this->CreditorEntry_GetAccountResult = $CreditorEntry_GetAccountResult;
      return $this;
    }

}
