<?php

namespace Economic;

class DebtorContact_GetDebtorResponse
{

    /**
     * @var DebtorHandle $DebtorContact_GetDebtorResult
     */
    protected $DebtorContact_GetDebtorResult = null;

    /**
     * @param DebtorHandle $DebtorContact_GetDebtorResult
     */
    public function __construct($DebtorContact_GetDebtorResult)
    {
      $this->DebtorContact_GetDebtorResult = $DebtorContact_GetDebtorResult;
    }

    /**
     * @return DebtorHandle
     */
    public function getDebtorContact_GetDebtorResult()
    {
      return $this->DebtorContact_GetDebtorResult;
    }

    /**
     * @param DebtorHandle $DebtorContact_GetDebtorResult
     * @return \Economic\DebtorContact_GetDebtorResponse
     */
    public function setDebtorContact_GetDebtorResult($DebtorContact_GetDebtorResult)
    {
      $this->DebtorContact_GetDebtorResult = $DebtorContact_GetDebtorResult;
      return $this;
    }

}
