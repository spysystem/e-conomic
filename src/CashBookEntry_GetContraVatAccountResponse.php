<?php

namespace Economic;

class CashBookEntry_GetContraVatAccountResponse
{

    /**
     * @var VatAccountHandle $CashBookEntry_GetContraVatAccountResult
     */
    protected $CashBookEntry_GetContraVatAccountResult = null;

    /**
     * @param VatAccountHandle $CashBookEntry_GetContraVatAccountResult
     */
    public function __construct($CashBookEntry_GetContraVatAccountResult)
    {
      $this->CashBookEntry_GetContraVatAccountResult = $CashBookEntry_GetContraVatAccountResult;
    }

    /**
     * @return VatAccountHandle
     */
    public function getCashBookEntry_GetContraVatAccountResult()
    {
      return $this->CashBookEntry_GetContraVatAccountResult;
    }

    /**
     * @param VatAccountHandle $CashBookEntry_GetContraVatAccountResult
     * @return \Economic\CashBookEntry_GetContraVatAccountResponse
     */
    public function setCashBookEntry_GetContraVatAccountResult($CashBookEntry_GetContraVatAccountResult)
    {
      $this->CashBookEntry_GetContraVatAccountResult = $CashBookEntry_GetContraVatAccountResult;
      return $this;
    }

}
