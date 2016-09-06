<?php

namespace Economic;

class CurrentInvoiceLine_UpdateFromData
{

    /**
     * @var CurrentInvoiceLineData $data
     */
    protected $data = null;

    /**
     * @param CurrentInvoiceLineData $data
     */
    public function __construct($data)
    {
      $this->data = $data;
    }

    /**
     * @return CurrentInvoiceLineData
     */
    public function getData()
    {
      return $this->data;
    }

    /**
     * @param CurrentInvoiceLineData $data
     * @return \Economic\CurrentInvoiceLine_UpdateFromData
     */
    public function setData($data)
    {
      $this->data = $data;
      return $this;
    }

}
