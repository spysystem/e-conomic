<?php

namespace Economic;

class CurrentInvoice_CreateFromDataArray
{

    /**
     * @var ArrayOfCurrentInvoiceData $dataArray
     */
    protected $dataArray = null;

    /**
     * @param ArrayOfCurrentInvoiceData $dataArray
     */
    public function __construct($dataArray)
    {
      $this->dataArray = $dataArray;
    }

    /**
     * @return ArrayOfCurrentInvoiceData
     */
    public function getDataArray()
    {
      return $this->dataArray;
    }

    /**
     * @param ArrayOfCurrentInvoiceData $dataArray
     * @return \Economic\CurrentInvoice_CreateFromDataArray
     */
    public function setDataArray($dataArray)
    {
      $this->dataArray = $dataArray;
      return $this;
    }

}
