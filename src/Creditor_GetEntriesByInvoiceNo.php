<?php

namespace Economic;

class Creditor_GetEntriesByInvoiceNo
{

    /**
     * @var CreditorHandle $creditorHandle
     */
    protected $creditorHandle = null;

    /**
     * @var string $invoiceNo
     */
    protected $invoiceNo = null;

    /**
     * @param CreditorHandle $creditorHandle
     * @param string $invoiceNo
     */
    public function __construct($creditorHandle, $invoiceNo)
    {
      $this->creditorHandle = $creditorHandle;
      $this->invoiceNo = $invoiceNo;
    }

    /**
     * @return CreditorHandle
     */
    public function getCreditorHandle()
    {
      return $this->creditorHandle;
    }

    /**
     * @param CreditorHandle $creditorHandle
     * @return \Economic\Creditor_GetEntriesByInvoiceNo
     */
    public function setCreditorHandle($creditorHandle)
    {
      $this->creditorHandle = $creditorHandle;
      return $this;
    }

    /**
     * @return string
     */
    public function getInvoiceNo()
    {
      return $this->invoiceNo;
    }

    /**
     * @param string $invoiceNo
     * @return \Economic\Creditor_GetEntriesByInvoiceNo
     */
    public function setInvoiceNo($invoiceNo)
    {
      $this->invoiceNo = $invoiceNo;
      return $this;
    }

}
