<?php

namespace Economic;

class CurrentSupplierInvoice_CreateFromData
{

    /**
     * @var CurrentSupplierInvoiceData $data
     */
    protected $data = null;

    /**
     * @param CurrentSupplierInvoiceData $data
     */
    public function __construct($data)
    {
      $this->data = $data;
    }

    /**
     * @return CurrentSupplierInvoiceData
     */
    public function getData()
    {
      return $this->data;
    }

    /**
     * @param CurrentSupplierInvoiceData $data
     * @return \Economic\CurrentSupplierInvoice_CreateFromData
     */
    public function setData($data)
    {
      $this->data = $data;
      return $this;
    }

}
