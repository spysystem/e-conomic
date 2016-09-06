<?php

namespace Economic;

class DebtorEntry_GetDataArrayResponse
{

    /**
     * @var ArrayOfDebtorEntryData $DebtorEntry_GetDataArrayResult
     */
    protected $DebtorEntry_GetDataArrayResult = null;

    /**
     * @param ArrayOfDebtorEntryData $DebtorEntry_GetDataArrayResult
     */
    public function __construct($DebtorEntry_GetDataArrayResult)
    {
      $this->DebtorEntry_GetDataArrayResult = $DebtorEntry_GetDataArrayResult;
    }

    /**
     * @return ArrayOfDebtorEntryData
     */
    public function getDebtorEntry_GetDataArrayResult()
    {
      return $this->DebtorEntry_GetDataArrayResult;
    }

    /**
     * @param ArrayOfDebtorEntryData $DebtorEntry_GetDataArrayResult
     * @return \Economic\DebtorEntry_GetDataArrayResponse
     */
    public function setDebtorEntry_GetDataArrayResult($DebtorEntry_GetDataArrayResult)
    {
      $this->DebtorEntry_GetDataArrayResult = $DebtorEntry_GetDataArrayResult;
      return $this;
    }

}
