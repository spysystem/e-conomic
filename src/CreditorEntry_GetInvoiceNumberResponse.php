<?php

namespace Economic;

class CreditorEntry_GetInvoiceNumberResponse
{

    /**
     * @var string $CreditorEntry_GetInvoiceNumberResult
     */
    protected $CreditorEntry_GetInvoiceNumberResult = null;

    /**
     * @param string $CreditorEntry_GetInvoiceNumberResult
     */
    public function __construct($CreditorEntry_GetInvoiceNumberResult)
    {
      $this->CreditorEntry_GetInvoiceNumberResult = $CreditorEntry_GetInvoiceNumberResult;
    }

    /**
     * @return string
     */
    public function getCreditorEntry_GetInvoiceNumberResult()
    {
      return $this->CreditorEntry_GetInvoiceNumberResult;
    }

    /**
     * @param string $CreditorEntry_GetInvoiceNumberResult
     * @return \Economic\CreditorEntry_GetInvoiceNumberResponse
     */
    public function setCreditorEntry_GetInvoiceNumberResult($CreditorEntry_GetInvoiceNumberResult)
    {
      $this->CreditorEntry_GetInvoiceNumberResult = $CreditorEntry_GetInvoiceNumberResult;
      return $this;
    }

}
