<?php

namespace Economic;

class CreditorEntryData
{

    /**
     * @var CreditorEntryHandle $Handle
     */
    protected $Handle = null;

    /**
     * @var int $SerialNumber
     */
    protected $SerialNumber = null;

    /**
     * @var EntryType $Type
     */
    protected $Type = null;

    /**
     * @var \DateTime $Date
     */
    protected $Date = null;

    /**
     * @var CreditorHandle $CreditorHandle
     */
    protected $CreditorHandle = null;

    /**
     * @var AccountHandle $AccountHandle
     */
    protected $AccountHandle = null;

    /**
     * @var int $VoucherNumber
     */
    protected $VoucherNumber = null;

    /**
     * @var string $Text
     */
    protected $Text = null;

    /**
     * @var float $AmountDefaultCurrency
     */
    protected $AmountDefaultCurrency = null;

    /**
     * @var CurrencyHandle $CurrencyHandle
     */
    protected $CurrencyHandle = null;

    /**
     * @var float $Amount
     */
    protected $Amount = null;

    /**
     * @var string $InvoiceNumber
     */
    protected $InvoiceNumber = null;

    /**
     * @var \DateTime $DueDate
     */
    protected $DueDate = null;

    /**
     * @var float $Remainder
     */
    protected $Remainder = null;

    /**
     * @var float $RemainderDefaultCurrency
     */
    protected $RemainderDefaultCurrency = null;

    /**
     * @param int $SerialNumber
     * @param EntryType $Type
     * @param \DateTime $Date
     * @param int $VoucherNumber
     * @param float $AmountDefaultCurrency
     * @param float $Amount
     * @param \DateTime $DueDate
     * @param float $Remainder
     * @param float $RemainderDefaultCurrency
     */
    public function __construct($SerialNumber, $Type, \DateTime $Date, $VoucherNumber, $AmountDefaultCurrency, $Amount, \DateTime $DueDate, $Remainder, $RemainderDefaultCurrency)
    {
      $this->SerialNumber = $SerialNumber;
      $this->Type = $Type;
      $this->Date = $Date->format(\DateTime::ATOM);
      $this->VoucherNumber = $VoucherNumber;
      $this->AmountDefaultCurrency = $AmountDefaultCurrency;
      $this->Amount = $Amount;
      $this->DueDate = $DueDate->format(\DateTime::ATOM);
      $this->Remainder = $Remainder;
      $this->RemainderDefaultCurrency = $RemainderDefaultCurrency;
    }

    /**
     * @return CreditorEntryHandle
     */
    public function getHandle()
    {
      return $this->Handle;
    }

    /**
     * @param CreditorEntryHandle $Handle
     * @return \Economic\CreditorEntryData
     */
    public function setHandle($Handle)
    {
      $this->Handle = $Handle;
      return $this;
    }

    /**
     * @return int
     */
    public function getSerialNumber()
    {
      return $this->SerialNumber;
    }

    /**
     * @param int $SerialNumber
     * @return \Economic\CreditorEntryData
     */
    public function setSerialNumber($SerialNumber)
    {
      $this->SerialNumber = $SerialNumber;
      return $this;
    }

    /**
     * @return EntryType
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param EntryType $Type
     * @return \Economic\CreditorEntryData
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDate()
    {
      if ($this->Date == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->Date);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $Date
     * @return \Economic\CreditorEntryData
     */
    public function setDate(\DateTime $Date)
    {
      $this->Date = $Date->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return CreditorHandle
     */
    public function getCreditorHandle()
    {
      return $this->CreditorHandle;
    }

    /**
     * @param CreditorHandle $CreditorHandle
     * @return \Economic\CreditorEntryData
     */
    public function setCreditorHandle($CreditorHandle)
    {
      $this->CreditorHandle = $CreditorHandle;
      return $this;
    }

    /**
     * @return AccountHandle
     */
    public function getAccountHandle()
    {
      return $this->AccountHandle;
    }

    /**
     * @param AccountHandle $AccountHandle
     * @return \Economic\CreditorEntryData
     */
    public function setAccountHandle($AccountHandle)
    {
      $this->AccountHandle = $AccountHandle;
      return $this;
    }

    /**
     * @return int
     */
    public function getVoucherNumber()
    {
      return $this->VoucherNumber;
    }

    /**
     * @param int $VoucherNumber
     * @return \Economic\CreditorEntryData
     */
    public function setVoucherNumber($VoucherNumber)
    {
      $this->VoucherNumber = $VoucherNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getText()
    {
      return $this->Text;
    }

    /**
     * @param string $Text
     * @return \Economic\CreditorEntryData
     */
    public function setText($Text)
    {
      $this->Text = $Text;
      return $this;
    }

    /**
     * @return float
     */
    public function getAmountDefaultCurrency()
    {
      return $this->AmountDefaultCurrency;
    }

    /**
     * @param float $AmountDefaultCurrency
     * @return \Economic\CreditorEntryData
     */
    public function setAmountDefaultCurrency($AmountDefaultCurrency)
    {
      $this->AmountDefaultCurrency = $AmountDefaultCurrency;
      return $this;
    }

    /**
     * @return CurrencyHandle
     */
    public function getCurrencyHandle()
    {
      return $this->CurrencyHandle;
    }

    /**
     * @param CurrencyHandle $CurrencyHandle
     * @return \Economic\CreditorEntryData
     */
    public function setCurrencyHandle($CurrencyHandle)
    {
      $this->CurrencyHandle = $CurrencyHandle;
      return $this;
    }

    /**
     * @return float
     */
    public function getAmount()
    {
      return $this->Amount;
    }

    /**
     * @param float $Amount
     * @return \Economic\CreditorEntryData
     */
    public function setAmount($Amount)
    {
      $this->Amount = $Amount;
      return $this;
    }

    /**
     * @return string
     */
    public function getInvoiceNumber()
    {
      return $this->InvoiceNumber;
    }

    /**
     * @param string $InvoiceNumber
     * @return \Economic\CreditorEntryData
     */
    public function setInvoiceNumber($InvoiceNumber)
    {
      $this->InvoiceNumber = $InvoiceNumber;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDueDate()
    {
      if ($this->DueDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->DueDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $DueDate
     * @return \Economic\CreditorEntryData
     */
    public function setDueDate(\DateTime $DueDate)
    {
      $this->DueDate = $DueDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return float
     */
    public function getRemainder()
    {
      return $this->Remainder;
    }

    /**
     * @param float $Remainder
     * @return \Economic\CreditorEntryData
     */
    public function setRemainder($Remainder)
    {
      $this->Remainder = $Remainder;
      return $this;
    }

    /**
     * @return float
     */
    public function getRemainderDefaultCurrency()
    {
      return $this->RemainderDefaultCurrency;
    }

    /**
     * @param float $RemainderDefaultCurrency
     * @return \Economic\CreditorEntryData
     */
    public function setRemainderDefaultCurrency($RemainderDefaultCurrency)
    {
      $this->RemainderDefaultCurrency = $RemainderDefaultCurrency;
      return $this;
    }

}
