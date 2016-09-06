<?php

namespace Economic;

class CurrentSupplierInvoiceLineData
{

    /**
     * @var CurrentSupplierInvoiceLineHandle $Handle
     */
    protected $Handle = null;

    /**
     * @var int $InvoiceId
     */
    protected $InvoiceId = null;

    /**
     * @var int $Number
     */
    protected $Number = null;

    /**
     * @var CurrentSupplierInvoiceHandle $InvoiceHandle
     */
    protected $InvoiceHandle = null;

    /**
     * @var ProductHandle $ProductHandle
     */
    protected $ProductHandle = null;

    /**
     * @var float $Quantity
     */
    protected $Quantity = null;

    /**
     * @var float $UnitPrice
     */
    protected $UnitPrice = null;

    /**
     * @param int $InvoiceId
     * @param int $Number
     */
    public function __construct($InvoiceId, $Number)
    {
      $this->InvoiceId = $InvoiceId;
      $this->Number = $Number;
    }

    /**
     * @return CurrentSupplierInvoiceLineHandle
     */
    public function getHandle()
    {
      return $this->Handle;
    }

    /**
     * @param CurrentSupplierInvoiceLineHandle $Handle
     * @return \Economic\CurrentSupplierInvoiceLineData
     */
    public function setHandle($Handle)
    {
      $this->Handle = $Handle;
      return $this;
    }

    /**
     * @return int
     */
    public function getInvoiceId()
    {
      return $this->InvoiceId;
    }

    /**
     * @param int $InvoiceId
     * @return \Economic\CurrentSupplierInvoiceLineData
     */
    public function setInvoiceId($InvoiceId)
    {
      $this->InvoiceId = $InvoiceId;
      return $this;
    }

    /**
     * @return int
     */
    public function getNumber()
    {
      return $this->Number;
    }

    /**
     * @param int $Number
     * @return \Economic\CurrentSupplierInvoiceLineData
     */
    public function setNumber($Number)
    {
      $this->Number = $Number;
      return $this;
    }

    /**
     * @return CurrentSupplierInvoiceHandle
     */
    public function getInvoiceHandle()
    {
      return $this->InvoiceHandle;
    }

    /**
     * @param CurrentSupplierInvoiceHandle $InvoiceHandle
     * @return \Economic\CurrentSupplierInvoiceLineData
     */
    public function setInvoiceHandle($InvoiceHandle)
    {
      $this->InvoiceHandle = $InvoiceHandle;
      return $this;
    }

    /**
     * @return ProductHandle
     */
    public function getProductHandle()
    {
      return $this->ProductHandle;
    }

    /**
     * @param ProductHandle $ProductHandle
     * @return \Economic\CurrentSupplierInvoiceLineData
     */
    public function setProductHandle($ProductHandle)
    {
      $this->ProductHandle = $ProductHandle;
      return $this;
    }

    /**
     * @return float
     */
    public function getQuantity()
    {
      return $this->Quantity;
    }

    /**
     * @param float $Quantity
     * @return \Economic\CurrentSupplierInvoiceLineData
     */
    public function setQuantity($Quantity)
    {
      $this->Quantity = $Quantity;
      return $this;
    }

    /**
     * @return float
     */
    public function getUnitPrice()
    {
      return $this->UnitPrice;
    }

    /**
     * @param float $UnitPrice
     * @return \Economic\CurrentSupplierInvoiceLineData
     */
    public function setUnitPrice($UnitPrice)
    {
      $this->UnitPrice = $UnitPrice;
      return $this;
    }

}
