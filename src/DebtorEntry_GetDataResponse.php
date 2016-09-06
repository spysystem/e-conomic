<?php

namespace Economic;

class DebtorEntry_GetDataResponse
{

    /**
     * @var DebtorEntryData $DebtorEntry_GetDataResult
     */
    protected $DebtorEntry_GetDataResult = null;

    /**
     * @param DebtorEntryData $DebtorEntry_GetDataResult
     */
    public function __construct($DebtorEntry_GetDataResult)
    {
      $this->DebtorEntry_GetDataResult = $DebtorEntry_GetDataResult;
    }

    /**
     * @return DebtorEntryData
     */
    public function getDebtorEntry_GetDataResult()
    {
      return $this->DebtorEntry_GetDataResult;
    }

    /**
     * @param DebtorEntryData $DebtorEntry_GetDataResult
     * @return \Economic\DebtorEntry_GetDataResponse
     */
    public function setDebtorEntry_GetDataResult($DebtorEntry_GetDataResult)
    {
      $this->DebtorEntry_GetDataResult = $DebtorEntry_GetDataResult;
      return $this;
    }

}
