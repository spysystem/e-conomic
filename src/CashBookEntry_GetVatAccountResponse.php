<?php

namespace Economic;

class CashBookEntry_GetVatAccountResponse
{

    /**
     * @var VatAccountHandle $CashBookEntry_GetVatAccountResult
     */
    protected $CashBookEntry_GetVatAccountResult = null;

    /**
     * @param VatAccountHandle $CashBookEntry_GetVatAccountResult
     */
    public function __construct($CashBookEntry_GetVatAccountResult)
    {
      $this->CashBookEntry_GetVatAccountResult = $CashBookEntry_GetVatAccountResult;
    }

    /**
     * @return VatAccountHandle
     */
    public function getCashBookEntry_GetVatAccountResult()
    {
      return $this->CashBookEntry_GetVatAccountResult;
    }

    /**
     * @param VatAccountHandle $CashBookEntry_GetVatAccountResult
     * @return \Economic\CashBookEntry_GetVatAccountResponse
     */
    public function setCashBookEntry_GetVatAccountResult($CashBookEntry_GetVatAccountResult)
    {
      $this->CashBookEntry_GetVatAccountResult = $CashBookEntry_GetVatAccountResult;
      return $this;
    }

}
