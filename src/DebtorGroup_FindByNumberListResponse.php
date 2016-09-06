<?php

namespace Economic;

class DebtorGroup_FindByNumberListResponse
{

    /**
     * @var ArrayOfDebtorGroupHandle $DebtorGroup_FindByNumberListResult
     */
    protected $DebtorGroup_FindByNumberListResult = null;

    /**
     * @param ArrayOfDebtorGroupHandle $DebtorGroup_FindByNumberListResult
     */
    public function __construct($DebtorGroup_FindByNumberListResult)
    {
      $this->DebtorGroup_FindByNumberListResult = $DebtorGroup_FindByNumberListResult;
    }

    /**
     * @return ArrayOfDebtorGroupHandle
     */
    public function getDebtorGroup_FindByNumberListResult()
    {
      return $this->DebtorGroup_FindByNumberListResult;
    }

    /**
     * @param ArrayOfDebtorGroupHandle $DebtorGroup_FindByNumberListResult
     * @return \Economic\DebtorGroup_FindByNumberListResponse
     */
    public function setDebtorGroup_FindByNumberListResult($DebtorGroup_FindByNumberListResult)
    {
      $this->DebtorGroup_FindByNumberListResult = $DebtorGroup_FindByNumberListResult;
      return $this;
    }

}
