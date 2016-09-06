<?php

namespace Economic;

class DebtorContact_GetNumberResponse
{

    /**
     * @var int $DebtorContact_GetNumberResult
     */
    protected $DebtorContact_GetNumberResult = null;

    /**
     * @param int $DebtorContact_GetNumberResult
     */
    public function __construct($DebtorContact_GetNumberResult)
    {
      $this->DebtorContact_GetNumberResult = $DebtorContact_GetNumberResult;
    }

    /**
     * @return int
     */
    public function getDebtorContact_GetNumberResult()
    {
      return $this->DebtorContact_GetNumberResult;
    }

    /**
     * @param int $DebtorContact_GetNumberResult
     * @return \Economic\DebtorContact_GetNumberResponse
     */
    public function setDebtorContact_GetNumberResult($DebtorContact_GetNumberResult)
    {
      $this->DebtorContact_GetNumberResult = $DebtorContact_GetNumberResult;
      return $this;
    }

}
