<?php

namespace Economic;

class CreditorEntry_FindBySerialNumberTypeAndInvoiceNumberResponse
{

    /**
     * @var ArrayOfCreditorEntryHandle $CreditorEntry_FindBySerialNumberTypeAndInvoiceNumberResult
     */
    protected $CreditorEntry_FindBySerialNumberTypeAndInvoiceNumberResult = null;

    /**
     * @param ArrayOfCreditorEntryHandle $CreditorEntry_FindBySerialNumberTypeAndInvoiceNumberResult
     */
    public function __construct($CreditorEntry_FindBySerialNumberTypeAndInvoiceNumberResult)
    {
      $this->CreditorEntry_FindBySerialNumberTypeAndInvoiceNumberResult = $CreditorEntry_FindBySerialNumberTypeAndInvoiceNumberResult;
    }

    /**
     * @return ArrayOfCreditorEntryHandle
     */
    public function getCreditorEntry_FindBySerialNumberTypeAndInvoiceNumberResult()
    {
      return $this->CreditorEntry_FindBySerialNumberTypeAndInvoiceNumberResult;
    }

    /**
     * @param ArrayOfCreditorEntryHandle $CreditorEntry_FindBySerialNumberTypeAndInvoiceNumberResult
     * @return \Economic\CreditorEntry_FindBySerialNumberTypeAndInvoiceNumberResponse
     */
    public function setCreditorEntry_FindBySerialNumberTypeAndInvoiceNumberResult($CreditorEntry_FindBySerialNumberTypeAndInvoiceNumberResult)
    {
      $this->CreditorEntry_FindBySerialNumberTypeAndInvoiceNumberResult = $CreditorEntry_FindBySerialNumberTypeAndInvoiceNumberResult;
      return $this;
    }

}
