<?php

namespace Economic;

class DebtorGroup_GetAllResponse
{

    /**
     * @var ArrayOfDebtorGroupHandle $DebtorGroup_GetAllResult
     */
    protected $DebtorGroup_GetAllResult = null;

    /**
     * @param ArrayOfDebtorGroupHandle $DebtorGroup_GetAllResult
     */
    public function __construct($DebtorGroup_GetAllResult)
    {
      $this->DebtorGroup_GetAllResult = $DebtorGroup_GetAllResult;
    }

    /**
     * @return ArrayOfDebtorGroupHandle
     */
    public function getDebtorGroup_GetAllResult()
    {
      return $this->DebtorGroup_GetAllResult;
    }

    /**
     * @param ArrayOfDebtorGroupHandle $DebtorGroup_GetAllResult
     * @return \Economic\DebtorGroup_GetAllResponse
     */
    public function setDebtorGroup_GetAllResult($DebtorGroup_GetAllResult)
    {
      $this->DebtorGroup_GetAllResult = $DebtorGroup_GetAllResult;
      return $this;
    }

}
