<?php

namespace Economic;

class CreditorEntry_FindBySerialNumberTypeAndInvoiceNumber
{

    /**
     * @var int $fromSerialNumber
     */
    protected $fromSerialNumber = null;

    /**
     * @var int $toSerialNumber
     */
    protected $toSerialNumber = null;

    /**
     * @var EntryType $entryType
     */
    protected $entryType = null;

    /**
     * @var ArrayOfString $invoiceNumbers
     */
    protected $invoiceNumbers = null;

    /**
     * @param int $fromSerialNumber
     * @param int $toSerialNumber
     * @param EntryType $entryType
     * @param ArrayOfString $invoiceNumbers
     */
    public function __construct($fromSerialNumber, $toSerialNumber, $entryType, $invoiceNumbers)
    {
      $this->fromSerialNumber = $fromSerialNumber;
      $this->toSerialNumber = $toSerialNumber;
      $this->entryType = $entryType;
      $this->invoiceNumbers = $invoiceNumbers;
    }

    /**
     * @return int
     */
    public function getFromSerialNumber()
    {
      return $this->fromSerialNumber;
    }

    /**
     * @param int $fromSerialNumber
     * @return \Economic\CreditorEntry_FindBySerialNumberTypeAndInvoiceNumber
     */
    public function setFromSerialNumber($fromSerialNumber)
    {
      $this->fromSerialNumber = $fromSerialNumber;
      return $this;
    }

    /**
     * @return int
     */
    public function getToSerialNumber()
    {
      return $this->toSerialNumber;
    }

    /**
     * @param int $toSerialNumber
     * @return \Economic\CreditorEntry_FindBySerialNumberTypeAndInvoiceNumber
     */
    public function setToSerialNumber($toSerialNumber)
    {
      $this->toSerialNumber = $toSerialNumber;
      return $this;
    }

    /**
     * @return EntryType
     */
    public function getEntryType()
    {
      return $this->entryType;
    }

    /**
     * @param EntryType $entryType
     * @return \Economic\CreditorEntry_FindBySerialNumberTypeAndInvoiceNumber
     */
    public function setEntryType($entryType)
    {
      $this->entryType = $entryType;
      return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getInvoiceNumbers()
    {
      return $this->invoiceNumbers;
    }

    /**
     * @param ArrayOfString $invoiceNumbers
     * @return \Economic\CreditorEntry_FindBySerialNumberTypeAndInvoiceNumber
     */
    public function setInvoiceNumbers($invoiceNumbers)
    {
      $this->invoiceNumbers = $invoiceNumbers;
      return $this;
    }

}
