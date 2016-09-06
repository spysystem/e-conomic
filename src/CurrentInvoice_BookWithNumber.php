<?php

namespace Economic;

class CurrentInvoice_BookWithNumber
{

    /**
     * @var CurrentInvoiceHandle $currentInvoiceHandle
     */
    protected $currentInvoiceHandle = null;

    /**
     * @var int $number
     */
    protected $number = null;

    /**
     * @param CurrentInvoiceHandle $currentInvoiceHandle
     * @param int $number
     */
    public function __construct($currentInvoiceHandle, $number)
    {
      $this->currentInvoiceHandle = $currentInvoiceHandle;
      $this->number = $number;
    }

    /**
     * @return CurrentInvoiceHandle
     */
    public function getCurrentInvoiceHandle()
    {
      return $this->currentInvoiceHandle;
    }

    /**
     * @param CurrentInvoiceHandle $currentInvoiceHandle
     * @return \Economic\CurrentInvoice_BookWithNumber
     */
    public function setCurrentInvoiceHandle($currentInvoiceHandle)
    {
      $this->currentInvoiceHandle = $currentInvoiceHandle;
      return $this;
    }

    /**
     * @return int
     */
    public function getNumber()
    {
      return $this->number;
    }

    /**
     * @param int $number
     * @return \Economic\CurrentInvoice_BookWithNumber
     */
    public function setNumber($number)
    {
      $this->number = $number;
      return $this;
    }

}
