<?php

namespace Economic;

class Debtor_GetDebtorGroupResponse
{

    /**
     * @var DebtorGroupHandle $Debtor_GetDebtorGroupResult
     */
    protected $Debtor_GetDebtorGroupResult = null;

    /**
     * @param DebtorGroupHandle $Debtor_GetDebtorGroupResult
     */
    public function __construct($Debtor_GetDebtorGroupResult)
    {
      $this->Debtor_GetDebtorGroupResult = $Debtor_GetDebtorGroupResult;
    }

    /**
     * @return DebtorGroupHandle
     */
    public function getDebtor_GetDebtorGroupResult()
    {
      return $this->Debtor_GetDebtorGroupResult;
    }

    /**
     * @param DebtorGroupHandle $Debtor_GetDebtorGroupResult
     * @return \Economic\Debtor_GetDebtorGroupResponse
     */
    public function setDebtor_GetDebtorGroupResult($Debtor_GetDebtorGroupResult)
    {
      $this->Debtor_GetDebtorGroupResult = $Debtor_GetDebtorGroupResult;
      return $this;
    }

}
