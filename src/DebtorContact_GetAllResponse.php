<?php

namespace Economic;

class DebtorContact_GetAllResponse
{

    /**
     * @var ArrayOfDebtorContactHandle $DebtorContact_GetAllResult
     */
    protected $DebtorContact_GetAllResult = null;

    /**
     * @param ArrayOfDebtorContactHandle $DebtorContact_GetAllResult
     */
    public function __construct($DebtorContact_GetAllResult)
    {
      $this->DebtorContact_GetAllResult = $DebtorContact_GetAllResult;
    }

    /**
     * @return ArrayOfDebtorContactHandle
     */
    public function getDebtorContact_GetAllResult()
    {
      return $this->DebtorContact_GetAllResult;
    }

    /**
     * @param ArrayOfDebtorContactHandle $DebtorContact_GetAllResult
     * @return \Economic\DebtorContact_GetAllResponse
     */
    public function setDebtorContact_GetAllResult($DebtorContact_GetAllResult)
    {
      $this->DebtorContact_GetAllResult = $DebtorContact_GetAllResult;
      return $this;
    }

}
