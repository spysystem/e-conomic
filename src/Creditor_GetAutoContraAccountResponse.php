<?php

namespace Economic;

class Creditor_GetAutoContraAccountResponse
{

    /**
     * @var AccountHandle $Creditor_GetAutoContraAccountResult
     */
    protected $Creditor_GetAutoContraAccountResult = null;

    /**
     * @param AccountHandle $Creditor_GetAutoContraAccountResult
     */
    public function __construct($Creditor_GetAutoContraAccountResult)
    {
      $this->Creditor_GetAutoContraAccountResult = $Creditor_GetAutoContraAccountResult;
    }

    /**
     * @return AccountHandle
     */
    public function getCreditor_GetAutoContraAccountResult()
    {
      return $this->Creditor_GetAutoContraAccountResult;
    }

    /**
     * @param AccountHandle $Creditor_GetAutoContraAccountResult
     * @return \Economic\Creditor_GetAutoContraAccountResponse
     */
    public function setCreditor_GetAutoContraAccountResult($Creditor_GetAutoContraAccountResult)
    {
      $this->Creditor_GetAutoContraAccountResult = $Creditor_GetAutoContraAccountResult;
      return $this;
    }

}
