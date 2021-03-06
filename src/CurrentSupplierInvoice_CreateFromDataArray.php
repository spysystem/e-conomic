<?php

namespace Economic;

class CurrentSupplierInvoice_CreateFromDataArray
{

    /**
     * @var ArrayOfCurrentSupplierInvoiceData $dataArray
     */
    protected $dataArray = null;

    /**
     * @param ArrayOfCurrentSupplierInvoiceData $dataArray
     */
    public function __construct($dataArray)
    {
      $this->dataArray = $dataArray;
    }

    /**
     * @return ArrayOfCurrentSupplierInvoiceData
     */
    public function getDataArray()
    {
      return $this->dataArray;
    }

    /**
     * @param ArrayOfCurrentSupplierInvoiceData $dataArray
     * @return \Economic\CurrentSupplierInvoice_CreateFromDataArray
     */
    public function setDataArray($dataArray)
    {
      $this->dataArray = $dataArray;
      return $this;
    }

}
