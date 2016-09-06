<?php

namespace Economic;

class CreditorEntry_FindByInvoiceNumber
{

    /**
     * @var string $invoiceNumber
     */
    protected $invoiceNumber = null;

    /**
     * @param string $invoiceNumber
     */
    public function __construct($invoiceNumber)
    {
      $this->invoiceNumber = $invoiceNumber;
    }

    /**
     * @return string
     */
    public function getInvoiceNumber()
    {
      return $this->invoiceNumber;
    }

    /**
     * @param string $invoiceNumber
     * @return \Economic\CreditorEntry_FindByInvoiceNumber
     */
    public function setInvoiceNumber($invoiceNumber)
    {
      $this->invoiceNumber = $invoiceNumber;
      return $this;
    }

}
