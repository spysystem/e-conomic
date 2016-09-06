<?php

namespace Economic;

class DebtorEntry_FindBySerialNumberResponse
{

    /**
     * @var ArrayOfDebtorEntryHandle $DebtorEntry_FindBySerialNumberResult
     */
    protected $DebtorEntry_FindBySerialNumberResult = null;

    /**
     * @param ArrayOfDebtorEntryHandle $DebtorEntry_FindBySerialNumberResult
     */
    public function __construct($DebtorEntry_FindBySerialNumberResult)
    {
      $this->DebtorEntry_FindBySerialNumberResult = $DebtorEntry_FindBySerialNumberResult;
    }

    /**
     * @return ArrayOfDebtorEntryHandle
     */
    public function getDebtorEntry_FindBySerialNumberResult()
    {
      return $this->DebtorEntry_FindBySerialNumberResult;
    }

    /**
     * @param ArrayOfDebtorEntryHandle $DebtorEntry_FindBySerialNumberResult
     * @return \Economic\DebtorEntry_FindBySerialNumberResponse
     */
    public function setDebtorEntry_FindBySerialNumberResult($DebtorEntry_FindBySerialNumberResult)
    {
      $this->DebtorEntry_FindBySerialNumberResult = $DebtorEntry_FindBySerialNumberResult;
      return $this;
    }

}
