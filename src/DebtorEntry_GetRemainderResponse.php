<?php

namespace Economic;

class DebtorEntry_GetRemainderResponse
{

    /**
     * @var float $DebtorEntry_GetRemainderResult
     */
    protected $DebtorEntry_GetRemainderResult = null;

    /**
     * @param float $DebtorEntry_GetRemainderResult
     */
    public function __construct($DebtorEntry_GetRemainderResult)
    {
      $this->DebtorEntry_GetRemainderResult = $DebtorEntry_GetRemainderResult;
    }

    /**
     * @return float
     */
    public function getDebtorEntry_GetRemainderResult()
    {
      return $this->DebtorEntry_GetRemainderResult;
    }

    /**
     * @param float $DebtorEntry_GetRemainderResult
     * @return \Economic\DebtorEntry_GetRemainderResponse
     */
    public function setDebtorEntry_GetRemainderResult($DebtorEntry_GetRemainderResult)
    {
      $this->DebtorEntry_GetRemainderResult = $DebtorEntry_GetRemainderResult;
      return $this;
    }

}
