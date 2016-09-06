<?php

namespace Economic;

class DebtorEntry_GetSerialNumberResponse
{

    /**
     * @var int $DebtorEntry_GetSerialNumberResult
     */
    protected $DebtorEntry_GetSerialNumberResult = null;

    /**
     * @param int $DebtorEntry_GetSerialNumberResult
     */
    public function __construct($DebtorEntry_GetSerialNumberResult)
    {
      $this->DebtorEntry_GetSerialNumberResult = $DebtorEntry_GetSerialNumberResult;
    }

    /**
     * @return int
     */
    public function getDebtorEntry_GetSerialNumberResult()
    {
      return $this->DebtorEntry_GetSerialNumberResult;
    }

    /**
     * @param int $DebtorEntry_GetSerialNumberResult
     * @return \Economic\DebtorEntry_GetSerialNumberResponse
     */
    public function setDebtorEntry_GetSerialNumberResult($DebtorEntry_GetSerialNumberResult)
    {
      $this->DebtorEntry_GetSerialNumberResult = $DebtorEntry_GetSerialNumberResult;
      return $this;
    }

}
