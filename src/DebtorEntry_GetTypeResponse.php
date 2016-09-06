<?php

namespace Economic;

class DebtorEntry_GetTypeResponse
{

    /**
     * @var EntryType $DebtorEntry_GetTypeResult
     */
    protected $DebtorEntry_GetTypeResult = null;

    /**
     * @param EntryType $DebtorEntry_GetTypeResult
     */
    public function __construct($DebtorEntry_GetTypeResult)
    {
      $this->DebtorEntry_GetTypeResult = $DebtorEntry_GetTypeResult;
    }

    /**
     * @return EntryType
     */
    public function getDebtorEntry_GetTypeResult()
    {
      return $this->DebtorEntry_GetTypeResult;
    }

    /**
     * @param EntryType $DebtorEntry_GetTypeResult
     * @return \Economic\DebtorEntry_GetTypeResponse
     */
    public function setDebtorEntry_GetTypeResult($DebtorEntry_GetTypeResult)
    {
      $this->DebtorEntry_GetTypeResult = $DebtorEntry_GetTypeResult;
      return $this;
    }

}
