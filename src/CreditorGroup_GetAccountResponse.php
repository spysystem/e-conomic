<?php

namespace Economic;

class CreditorGroup_GetAccountResponse
{

    /**
     * @var AccountHandle $CreditorGroup_GetAccountResult
     */
    protected $CreditorGroup_GetAccountResult = null;

    /**
     * @param AccountHandle $CreditorGroup_GetAccountResult
     */
    public function __construct($CreditorGroup_GetAccountResult)
    {
      $this->CreditorGroup_GetAccountResult = $CreditorGroup_GetAccountResult;
    }

    /**
     * @return AccountHandle
     */
    public function getCreditorGroup_GetAccountResult()
    {
      return $this->CreditorGroup_GetAccountResult;
    }

    /**
     * @param AccountHandle $CreditorGroup_GetAccountResult
     * @return \Economic\CreditorGroup_GetAccountResponse
     */
    public function setCreditorGroup_GetAccountResult($CreditorGroup_GetAccountResult)
    {
      $this->CreditorGroup_GetAccountResult = $CreditorGroup_GetAccountResult;
      return $this;
    }

}
