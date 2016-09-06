<?php

namespace Economic;

class Creditor_GetEntriesByInvoiceNoResponse
{

    /**
     * @var ArrayOfCreditorEntryHandle $Creditor_GetEntriesByInvoiceNoResult
     */
    protected $Creditor_GetEntriesByInvoiceNoResult = null;

    /**
     * @param ArrayOfCreditorEntryHandle $Creditor_GetEntriesByInvoiceNoResult
     */
    public function __construct($Creditor_GetEntriesByInvoiceNoResult)
    {
      $this->Creditor_GetEntriesByInvoiceNoResult = $Creditor_GetEntriesByInvoiceNoResult;
    }

    /**
     * @return ArrayOfCreditorEntryHandle
     */
    public function getCreditor_GetEntriesByInvoiceNoResult()
    {
      return $this->Creditor_GetEntriesByInvoiceNoResult;
    }

    /**
     * @param ArrayOfCreditorEntryHandle $Creditor_GetEntriesByInvoiceNoResult
     * @return \Economic\Creditor_GetEntriesByInvoiceNoResponse
     */
    public function setCreditor_GetEntriesByInvoiceNoResult($Creditor_GetEntriesByInvoiceNoResult)
    {
      $this->Creditor_GetEntriesByInvoiceNoResult = $Creditor_GetEntriesByInvoiceNoResult;
      return $this;
    }

}
