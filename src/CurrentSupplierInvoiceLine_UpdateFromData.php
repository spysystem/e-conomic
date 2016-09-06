<?php

namespace Economic;

class CurrentSupplierInvoiceLine_UpdateFromData
{

    /**
     * @var CurrentSupplierInvoiceLineData $data
     */
    protected $data = null;

    /**
     * @param CurrentSupplierInvoiceLineData $data
     */
    public function __construct($data)
    {
      $this->data = $data;
    }

    /**
     * @return CurrentSupplierInvoiceLineData
     */
    public function getData()
    {
      return $this->data;
    }

    /**
     * @param CurrentSupplierInvoiceLineData $data
     * @return \Economic\CurrentSupplierInvoiceLine_UpdateFromData
     */
    public function setData($data)
    {
      $this->data = $data;
      return $this;
    }

}
