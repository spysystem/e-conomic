<?php

namespace Economic;

class DebtorEntry_GetInvoiceNumberResponse
{

    /**
     * @var int $DebtorEntry_GetInvoiceNumberResult
     */
    protected $DebtorEntry_GetInvoiceNumberResult = null;

    /**
     * @param int $DebtorEntry_GetInvoiceNumberResult
     */
    public function __construct($DebtorEntry_GetInvoiceNumberResult)
    {
      $this->DebtorEntry_GetInvoiceNumberResult = $DebtorEntry_GetInvoiceNumberResult;
    }

    /**
     * @return int
     */
    public function getDebtorEntry_GetInvoiceNumberResult()
    {
      return $this->DebtorEntry_GetInvoiceNumberResult;
    }

    /**
     * @param int $DebtorEntry_GetInvoiceNumberResult
     * @return \Economic\DebtorEntry_GetInvoiceNumberResponse
     */
    public function setDebtorEntry_GetInvoiceNumberResult($DebtorEntry_GetInvoiceNumberResult)
    {
      $this->DebtorEntry_GetInvoiceNumberResult = $DebtorEntry_GetInvoiceNumberResult;
      return $this;
    }

}
