<?php

namespace Economic;

class Entry_TurnVoucher
{

    /**
     * @var EntryHandle $entryHandle
     */
    protected $entryHandle = null;

    /**
     * @var int $newVoucherNumber
     */
    protected $newVoucherNumber = null;

    /**
     * @var \DateTime $newVoucherDate
     */
    protected $newVoucherDate = null;

    /**
     * @var string $newText
     */
    protected $newText = null;

    /**
     * @var CashBookHandle $newCashBook
     */
    protected $newCashBook = null;

    /**
     * @param EntryHandle $entryHandle
     * @param int $newVoucherNumber
     * @param \DateTime $newVoucherDate
     * @param string $newText
     * @param CashBookHandle $newCashBook
     */
    public function __construct($entryHandle, $newVoucherNumber, \DateTime $newVoucherDate, $newText, $newCashBook)
    {
      $this->entryHandle = $entryHandle;
      $this->newVoucherNumber = $newVoucherNumber;
      $this->newVoucherDate = $newVoucherDate->format(\DateTime::ATOM);
      $this->newText = $newText;
      $this->newCashBook = $newCashBook;
    }

    /**
     * @return EntryHandle
     */
    public function getEntryHandle()
    {
      return $this->entryHandle;
    }

    /**
     * @param EntryHandle $entryHandle
     * @return \Economic\Entry_TurnVoucher
     */
    public function setEntryHandle($entryHandle)
    {
      $this->entryHandle = $entryHandle;
      return $this;
    }

    /**
     * @return int
     */
    public function getNewVoucherNumber()
    {
      return $this->newVoucherNumber;
    }

    /**
     * @param int $newVoucherNumber
     * @return \Economic\Entry_TurnVoucher
     */
    public function setNewVoucherNumber($newVoucherNumber)
    {
      $this->newVoucherNumber = $newVoucherNumber;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getNewVoucherDate()
    {
      if ($this->newVoucherDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->newVoucherDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $newVoucherDate
     * @return \Economic\Entry_TurnVoucher
     */
    public function setNewVoucherDate(\DateTime $newVoucherDate)
    {
      $this->newVoucherDate = $newVoucherDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return string
     */
    public function getNewText()
    {
      return $this->newText;
    }

    /**
     * @param string $newText
     * @return \Economic\Entry_TurnVoucher
     */
    public function setNewText($newText)
    {
      $this->newText = $newText;
      return $this;
    }

    /**
     * @return CashBookHandle
     */
    public function getNewCashBook()
    {
      return $this->newCashBook;
    }

    /**
     * @param CashBookHandle $newCashBook
     * @return \Economic\Entry_TurnVoucher
     */
    public function setNewCashBook($newCashBook)
    {
      $this->newCashBook = $newCashBook;
      return $this;
    }

}
