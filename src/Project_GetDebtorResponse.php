<?php

namespace Economic;

class Project_GetDebtorResponse
{

    /**
     * @var DebtorHandle $Project_GetDebtorResult
     */
    protected $Project_GetDebtorResult = null;

    /**
     * @param DebtorHandle $Project_GetDebtorResult
     */
    public function __construct($Project_GetDebtorResult)
    {
      $this->Project_GetDebtorResult = $Project_GetDebtorResult;
    }

    /**
     * @return DebtorHandle
     */
    public function getProject_GetDebtorResult()
    {
      return $this->Project_GetDebtorResult;
    }

    /**
     * @param DebtorHandle $Project_GetDebtorResult
     * @return \Economic\Project_GetDebtorResponse
     */
    public function setProject_GetDebtorResult($Project_GetDebtorResult)
    {
      $this->Project_GetDebtorResult = $Project_GetDebtorResult;
      return $this;
    }

}
