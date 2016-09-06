<?php

namespace Economic;

class CurrentInvoiceLine_UpdateFromDataArray
{

    /**
     * @var ArrayOfCurrentInvoiceLineData $dataArray
     */
    protected $dataArray = null;

    /**
     * @param ArrayOfCurrentInvoiceLineData $dataArray
     */
    public function __construct($dataArray)
    {
      $this->dataArray = $dataArray;
    }

    /**
     * @return ArrayOfCurrentInvoiceLineData
     */
    public function getDataArray()
    {
      return $this->dataArray;
    }

    /**
     * @param ArrayOfCurrentInvoiceLineData $dataArray
     * @return \Economic\CurrentInvoiceLine_UpdateFromDataArray
     */
    public function setDataArray($dataArray)
    {
      $this->dataArray = $dataArray;
      return $this;
    }

}
