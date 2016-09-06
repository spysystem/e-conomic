<?php

namespace Economic;

class CurrentInvoice_BookWithNumberResponse
{

    /**
     * @var InvoiceHandle $CurrentInvoice_BookWithNumberResult
     */
    protected $CurrentInvoice_BookWithNumberResult = null;

    /**
     * @param InvoiceHandle $CurrentInvoice_BookWithNumberResult
     */
    public function __construct($CurrentInvoice_BookWithNumberResult)
    {
      $this->CurrentInvoice_BookWithNumberResult = $CurrentInvoice_BookWithNumberResult;
    }

    /**
     * @return InvoiceHandle
     */
    public function getCurrentInvoice_BookWithNumberResult()
    {
      return $this->CurrentInvoice_BookWithNumberResult;
    }

    /**
     * @param InvoiceHandle $CurrentInvoice_BookWithNumberResult
     * @return \Economic\CurrentInvoice_BookWithNumberResponse
     */
    public function setCurrentInvoice_BookWithNumberResult($CurrentInvoice_BookWithNumberResult)
    {
      $this->CurrentInvoice_BookWithNumberResult = $CurrentInvoice_BookWithNumberResult;
      return $this;
    }

}
