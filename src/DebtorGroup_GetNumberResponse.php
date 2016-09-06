<?php

namespace Economic;

class DebtorGroup_GetNumberResponse
{

    /**
     * @var int $DebtorGroup_GetNumberResult
     */
    protected $DebtorGroup_GetNumberResult = null;

    /**
     * @param int $DebtorGroup_GetNumberResult
     */
    public function __construct($DebtorGroup_GetNumberResult)
    {
      $this->DebtorGroup_GetNumberResult = $DebtorGroup_GetNumberResult;
    }

    /**
     * @return int
     */
    public function getDebtorGroup_GetNumberResult()
    {
      return $this->DebtorGroup_GetNumberResult;
    }

    /**
     * @param int $DebtorGroup_GetNumberResult
     * @return \Economic\DebtorGroup_GetNumberResponse
     */
    public function setDebtorGroup_GetNumberResult($DebtorGroup_GetNumberResult)
    {
      $this->DebtorGroup_GetNumberResult = $DebtorGroup_GetNumberResult;
      return $this;
    }

}
