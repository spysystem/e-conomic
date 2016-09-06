<?php

namespace Economic;

class InvoiceLine_FindByInvoiceNumberInterval
{

    /**
     * @var int $fromInvoiceNumber
     */
    protected $fromInvoiceNumber = null;

    /**
     * @var int $toInvoiceNumber
     */
    protected $toInvoiceNumber = null;

    /**
     * @param int $fromInvoiceNumber
     * @param int $toInvoiceNumber
     */
    public function __construct($fromInvoiceNumber, $toInvoiceNumber)
    {
      $this->fromInvoiceNumber = $fromInvoiceNumber;
      $this->toInvoiceNumber = $toInvoiceNumber;
    }

    /**
     * @return int
     */
    public function getFromInvoiceNumber()
    {
      return $this->fromInvoiceNumber;
    }

    /**
     * @param int $fromInvoiceNumber
     * @return \Economic\InvoiceLine_FindByInvoiceNumberInterval
     */
    public function setFromInvoiceNumber($fromInvoiceNumber)
    {
      $this->fromInvoiceNumber = $fromInvoiceNumber;
      return $this;
    }

    /**
     * @return int
     */
    public function getToInvoiceNumber()
    {
      return $this->toInvoiceNumber;
    }

    /**
     * @param int $toInvoiceNumber
     * @return \Economic\InvoiceLine_FindByInvoiceNumberInterval
     */
    public function setToInvoiceNumber($toInvoiceNumber)
    {
      $this->toInvoiceNumber = $toInvoiceNumber;
      return $this;
    }

}
