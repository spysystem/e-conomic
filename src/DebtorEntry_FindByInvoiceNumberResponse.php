<?php

namespace Economic;

class DebtorEntry_FindByInvoiceNumberResponse
{

    /**
     * @var ArrayOfDebtorEntryHandle $DebtorEntry_FindByInvoiceNumberResult
     */
    protected $DebtorEntry_FindByInvoiceNumberResult = null;

    /**
     * @param ArrayOfDebtorEntryHandle $DebtorEntry_FindByInvoiceNumberResult
     */
    public function __construct($DebtorEntry_FindByInvoiceNumberResult)
    {
      $this->DebtorEntry_FindByInvoiceNumberResult = $DebtorEntry_FindByInvoiceNumberResult;
    }

    /**
     * @return ArrayOfDebtorEntryHandle
     */
    public function getDebtorEntry_FindByInvoiceNumberResult()
    {
      return $this->DebtorEntry_FindByInvoiceNumberResult;
    }

    /**
     * @param ArrayOfDebtorEntryHandle $DebtorEntry_FindByInvoiceNumberResult
     * @return \Economic\DebtorEntry_FindByInvoiceNumberResponse
     */
    public function setDebtorEntry_FindByInvoiceNumberResult($DebtorEntry_FindByInvoiceNumberResult)
    {
      $this->DebtorEntry_FindByInvoiceNumberResult = $DebtorEntry_FindByInvoiceNumberResult;
      return $this;
    }

}
