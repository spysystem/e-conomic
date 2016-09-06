<?php

namespace Economic;

class CurrentSupplierInvoiceLine_CreateFromDataArray
{

    /**
     * @var ArrayOfCurrentSupplierInvoiceLineData $dataArray
     */
    protected $dataArray = null;

    /**
     * @param ArrayOfCurrentSupplierInvoiceLineData $dataArray
     */
    public function __construct($dataArray)
    {
      $this->dataArray = $dataArray;
    }

    /**
     * @return ArrayOfCurrentSupplierInvoiceLineData
     */
    public function getDataArray()
    {
      return $this->dataArray;
    }

    /**
     * @param ArrayOfCurrentSupplierInvoiceLineData $dataArray
     * @return \Economic\CurrentSupplierInvoiceLine_CreateFromDataArray
     */
    public function setDataArray($dataArray)
    {
      $this->dataArray = $dataArray;
      return $this;
    }

}
