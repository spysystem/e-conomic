<?php

namespace Economic;

class Creditor_GetEntriesByVoucherNoAndInvoiceNoResponse
{

    /**
     * @var ArrayOfCreditorEntryHandle $Creditor_GetEntriesByVoucherNoAndInvoiceNoResult
     */
    protected $Creditor_GetEntriesByVoucherNoAndInvoiceNoResult = null;

    /**
     * @param ArrayOfCreditorEntryHandle $Creditor_GetEntriesByVoucherNoAndInvoiceNoResult
     */
    public function __construct($Creditor_GetEntriesByVoucherNoAndInvoiceNoResult)
    {
      $this->Creditor_GetEntriesByVoucherNoAndInvoiceNoResult = $Creditor_GetEntriesByVoucherNoAndInvoiceNoResult;
    }

    /**
     * @return ArrayOfCreditorEntryHandle
     */
    public function getCreditor_GetEntriesByVoucherNoAndInvoiceNoResult()
    {
      return $this->Creditor_GetEntriesByVoucherNoAndInvoiceNoResult;
    }

    /**
     * @param ArrayOfCreditorEntryHandle $Creditor_GetEntriesByVoucherNoAndInvoiceNoResult
     * @return \Economic\Creditor_GetEntriesByVoucherNoAndInvoiceNoResponse
     */
    public function setCreditor_GetEntriesByVoucherNoAndInvoiceNoResult($Creditor_GetEntriesByVoucherNoAndInvoiceNoResult)
    {
      $this->Creditor_GetEntriesByVoucherNoAndInvoiceNoResult = $Creditor_GetEntriesByVoucherNoAndInvoiceNoResult;
      return $this;
    }

}
