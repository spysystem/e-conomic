<?php

namespace Economic;

class DebtorEntry_GetDebtorResponse
{

    /**
     * @var DebtorHandle $DebtorEntry_GetDebtorResult
     */
    protected $DebtorEntry_GetDebtorResult = null;

    /**
     * @param DebtorHandle $DebtorEntry_GetDebtorResult
     */
    public function __construct($DebtorEntry_GetDebtorResult)
    {
      $this->DebtorEntry_GetDebtorResult = $DebtorEntry_GetDebtorResult;
    }

    /**
     * @return DebtorHandle
     */
    public function getDebtorEntry_GetDebtorResult()
    {
      return $this->DebtorEntry_GetDebtorResult;
    }

    /**
     * @param DebtorHandle $DebtorEntry_GetDebtorResult
     * @return \Economic\DebtorEntry_GetDebtorResponse
     */
    public function setDebtorEntry_GetDebtorResult($DebtorEntry_GetDebtorResult)
    {
      $this->DebtorEntry_GetDebtorResult = $DebtorEntry_GetDebtorResult;
      return $this;
    }

}
