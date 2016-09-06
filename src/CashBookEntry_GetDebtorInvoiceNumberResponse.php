<?php

namespace Economic;

class CashBookEntry_GetDebtorInvoiceNumberResponse
{

    /**
     * @var int $CashBookEntry_GetDebtorInvoiceNumberResult
     */
    protected $CashBookEntry_GetDebtorInvoiceNumberResult = null;

    /**
     * @param int $CashBookEntry_GetDebtorInvoiceNumberResult
     */
    public function __construct($CashBookEntry_GetDebtorInvoiceNumberResult)
    {
      $this->CashBookEntry_GetDebtorInvoiceNumberResult = $CashBookEntry_GetDebtorInvoiceNumberResult;
    }

    /**
     * @return int
     */
    public function getCashBookEntry_GetDebtorInvoiceNumberResult()
    {
      return $this->CashBookEntry_GetDebtorInvoiceNumberResult;
    }

    /**
     * @param int $CashBookEntry_GetDebtorInvoiceNumberResult
     * @return \Economic\CashBookEntry_GetDebtorInvoiceNumberResponse
     */
    public function setCashBookEntry_GetDebtorInvoiceNumberResult($CashBookEntry_GetDebtorInvoiceNumberResult)
    {
      $this->CashBookEntry_GetDebtorInvoiceNumberResult = $CashBookEntry_GetDebtorInvoiceNumberResult;
      return $this;
    }

}
