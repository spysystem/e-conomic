<?php

namespace Economic;

class CurrentInvoice_UpdateFromDataArray
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
     * @return \Economic\CurrentInvoice_UpdateFromDataArray
     */
    public function setDataArray($dataArray)
    {
      $this->dataArray = $dataArray;
      return $this;
    }

}
