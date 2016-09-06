<?php

namespace Economic;

class CurrentSupplierInvoiceData
{

    /**
     * @var CurrentSupplierInvoiceHandle $Handle
     */
    protected $Handle = null;

    /**
     * @var int $Id
     */
    protected $Id = null;

    /**
     * @var CreditorHandle $CreditorHandle
     */
    protected $CreditorHandle = null;

    /**
     * @var string $InvoiceNo
     */
    protected $InvoiceNo = null;

    /**
     * @param int $Id
     */
    public function __construct($Id)
    {
      $this->Id = $Id;
    }

    /**
     * @return CurrentSupplierInvoiceHandle
     */
    public function getHandle()
    {
      return $this->Handle;
    }

    /**
     * @param CurrentSupplierInvoiceHandle $Handle
     * @return \Economic\CurrentSupplierInvoiceData
     */
    public function setHandle($Handle)
    {
      $this->Handle = $Handle;
      return $this;
    }

    /**
     * @return int
     */
    public function getId()
    {
      return $this->Id;
    }

    /**
     * @param int $Id
     * @return \Economic\CurrentSupplierInvoiceData
     */
    public function setId($Id)
    {
      $this->Id = $Id;
      return $this;
    }

    /**
     * @return CreditorHandle
     */
    public function getCreditorHandle()
    {
      return $this->CreditorHandle;
    }

    /**
     * @param CreditorHandle $CreditorHandle
     * @return \Economic\CurrentSupplierInvoiceData
     */
    public function setCreditorHandle($CreditorHandle)
    {
      $this->CreditorHandle = $CreditorHandle;
      return $this;
    }

    /**
     * @return string
     */
    public function getInvoiceNo()
    {
      return $this->InvoiceNo;
    }

    /**
     * @param string $InvoiceNo
     * @return \Economic\CurrentSupplierInvoiceData
     */
    public function setInvoiceNo($InvoiceNo)
    {
      $this->InvoiceNo = $InvoiceNo;
      return $this;
    }

}
