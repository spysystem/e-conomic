<?php

namespace Economic;

class DebtorGroup_GetDebtorsResponse
{

    /**
     * @var ArrayOfDebtorHandle $DebtorGroup_GetDebtorsResult
     */
    protected $DebtorGroup_GetDebtorsResult = null;

    /**
     * @param ArrayOfDebtorHandle $DebtorGroup_GetDebtorsResult
     */
    public function __construct($DebtorGroup_GetDebtorsResult)
    {
      $this->DebtorGroup_GetDebtorsResult = $DebtorGroup_GetDebtorsResult;
    }

    /**
     * @return ArrayOfDebtorHandle
     */
    public function getDebtorGroup_GetDebtorsResult()
    {
      return $this->DebtorGroup_GetDebtorsResult;
    }

    /**
     * @param ArrayOfDebtorHandle $DebtorGroup_GetDebtorsResult
     * @return \Economic\DebtorGroup_GetDebtorsResponse
     */
    public function setDebtorGroup_GetDebtorsResult($DebtorGroup_GetDebtorsResult)
    {
      $this->DebtorGroup_GetDebtorsResult = $DebtorGroup_GetDebtorsResult;
      return $this;
    }

}
