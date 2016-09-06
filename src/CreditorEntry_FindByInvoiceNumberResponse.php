<?php

namespace Economic;

class CreditorEntry_FindByInvoiceNumberResponse
{

    /**
     * @var ArrayOfCreditorEntryHandle $CreditorEntry_FindByInvoiceNumberResult
     */
    protected $CreditorEntry_FindByInvoiceNumberResult = null;

    /**
     * @param ArrayOfCreditorEntryHandle $CreditorEntry_FindByInvoiceNumberResult
     */
    public function __construct($CreditorEntry_FindByInvoiceNumberResult)
    {
      $this->CreditorEntry_FindByInvoiceNumberResult = $CreditorEntry_FindByInvoiceNumberResult;
    }

    /**
     * @return ArrayOfCreditorEntryHandle
     */
    public function getCreditorEntry_FindByInvoiceNumberResult()
    {
      return $this->CreditorEntry_FindByInvoiceNumberResult;
    }

    /**
     * @param ArrayOfCreditorEntryHandle $CreditorEntry_FindByInvoiceNumberResult
     * @return \Economic\CreditorEntry_FindByInvoiceNumberResponse
     */
    public function setCreditorEntry_FindByInvoiceNumberResult($CreditorEntry_FindByInvoiceNumberResult)
    {
      $this->CreditorEntry_FindByInvoiceNumberResult = $CreditorEntry_FindByInvoiceNumberResult;
      return $this;
    }

}
