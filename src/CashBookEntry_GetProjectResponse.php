<?php

namespace Economic;

class CashBookEntry_GetProjectResponse
{

    /**
     * @var ProjectHandle $CashBookEntry_GetProjectResult
     */
    protected $CashBookEntry_GetProjectResult = null;

    /**
     * @param ProjectHandle $CashBookEntry_GetProjectResult
     */
    public function __construct($CashBookEntry_GetProjectResult)
    {
      $this->CashBookEntry_GetProjectResult = $CashBookEntry_GetProjectResult;
    }

    /**
     * @return ProjectHandle
     */
    public function getCashBookEntry_GetProjectResult()
    {
      return $this->CashBookEntry_GetProjectResult;
    }

    /**
     * @param ProjectHandle $CashBookEntry_GetProjectResult
     * @return \Economic\CashBookEntry_GetProjectResponse
     */
    public function setCashBookEntry_GetProjectResult($CashBookEntry_GetProjectResult)
    {
      $this->CashBookEntry_GetProjectResult = $CashBookEntry_GetProjectResult;
      return $this;
    }

}
