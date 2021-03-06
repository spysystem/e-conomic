<?php

namespace Economic;

class CurrentInvoice_UpdateFromData
{

    /**
     * @var CurrentInvoiceData $data
     */
    protected $data = null;

    /**
     * @param CurrentInvoiceData $data
     */
    public function __construct($data)
    {
      $this->data = $data;
    }

    /**
     * @return CurrentInvoiceData
     */
    public function getData()
    {
      return $this->data;
    }

    /**
     * @param CurrentInvoiceData $data
     * @return \Economic\CurrentInvoice_UpdateFromData
     */
    public function setData($data)
    {
      $this->data = $data;
      return $this;
    }

}
