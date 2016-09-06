<?php

namespace Economic;

class CurrentSupplierInvoiceLineHandle
{

    /**
     * @var int $InvoiceId
     */
    protected $InvoiceId = null;

    /**
     * @var int $Number
     */
    protected $Number = null;

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
     * @return int
     */
    public function getInvoiceId()
    {
      return $this->InvoiceId;
    }

    /**
     * @param int $InvoiceId
     * @return \Economic\CurrentSupplierInvoiceLineHandle
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
     * @return \Economic\CurrentSupplierInvoiceLineHandle
     */
    public function setNumber($Number)
    {
      $this->Number = $Number;
      return $this;
    }

}
