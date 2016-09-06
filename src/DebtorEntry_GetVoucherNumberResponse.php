<?php

namespace Economic;

class DebtorEntry_GetVoucherNumberResponse
{

    /**
     * @var int $DebtorEntry_GetVoucherNumberResult
     */
    protected $DebtorEntry_GetVoucherNumberResult = null;

    /**
     * @param int $DebtorEntry_GetVoucherNumberResult
     */
    public function __construct($DebtorEntry_GetVoucherNumberResult)
    {
      $this->DebtorEntry_GetVoucherNumberResult = $DebtorEntry_GetVoucherNumberResult;
    }

    /**
     * @return int
     */
    public function getDebtorEntry_GetVoucherNumberResult()
    {
      return $this->DebtorEntry_GetVoucherNumberResult;
    }

    /**
     * @param int $DebtorEntry_GetVoucherNumberResult
     * @return \Economic\DebtorEntry_GetVoucherNumberResponse
     */
    public function setDebtorEntry_GetVoucherNumberResult($DebtorEntry_GetVoucherNumberResult)
    {
      $this->DebtorEntry_GetVoucherNumberResult = $DebtorEntry_GetVoucherNumberResult;
      return $this;
    }

}
