<?php

namespace Economic;

class Creditor_GetEntriesByVoucherNoAndInvoiceNo
{

    /**
     * @var CreditorHandle $creditorHandle
     */
    protected $creditorHandle = null;

    /**
     * @var int $voucherNo
     */
    protected $voucherNo = null;

    /**
     * @var string $invoiceNo
     */
    protected $invoiceNo = null;

    /**
     * @param CreditorHandle $creditorHandle
     * @param int $voucherNo
     * @param string $invoiceNo
     */
    public function __construct($creditorHandle, $voucherNo, $invoiceNo)
    {
      $this->creditorHandle = $creditorHandle;
      $this->voucherNo = $voucherNo;
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
     * @return \Economic\Creditor_GetEntriesByVoucherNoAndInvoiceNo
     */
    public function setCreditorHandle($creditorHandle)
    {
      $this->creditorHandle = $creditorHandle;
      return $this;
    }

    /**
     * @return int
     */
    public function getVoucherNo()
    {
      return $this->voucherNo;
    }

    /**
     * @param int $voucherNo
     * @return \Economic\Creditor_GetEntriesByVoucherNoAndInvoiceNo
     */
    public function setVoucherNo($voucherNo)
    {
      $this->voucherNo = $voucherNo;
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
     * @return \Economic\Creditor_GetEntriesByVoucherNoAndInvoiceNo
     */
    public function setInvoiceNo($invoiceNo)
    {
      $this->invoiceNo = $invoiceNo;
      return $this;
    }

}
