<?php

namespace Economic;

class EntryData
{

    /**
     * @var EntryHandle $Handle
     */
    protected $Handle = null;

    /**
     * @var int $SerialNumber
     */
    protected $SerialNumber = null;

    /**
     * @var AccountHandle $AccountHandle
     */
    protected $AccountHandle = null;

    /**
     * @var float $Amount
     */
    protected $Amount = null;

    /**
     * @var float $AmountDefaultCurrency
     */
    protected $AmountDefaultCurrency = null;

    /**
     * @var float $Quantity1
     */
    protected $Quantity1 = null;

    /**
     * @var float $Quantity2
     */
    protected $Quantity2 = null;

    /**
     * @var CurrencyHandle $CurrencyHandle
     */
    protected $CurrencyHandle = null;

    /**
     * @var \DateTime $Date
     */
    protected $Date = null;

    /**
     * @var string $Text
     */
    protected $Text = null;

    /**
     * @var EntryType $Type
     */
    protected $Type = null;

    /**
     * @var DepartmentHandle $DepartmentHandle
     */
    protected $DepartmentHandle = null;

    /**
     * @var DistributionKeyHandle $DistributionKeyHandle
     */
    protected $DistributionKeyHandle = null;

    /**
     * @var VatAccountHandle $VatAccountHandle
     */
    protected $VatAccountHandle = null;

    /**
     * @var int $VoucherNumber
     */
    protected $VoucherNumber = null;

    /**
     * @var ProjectHandle $ProjectHandle
     */
    protected $ProjectHandle = null;

    /**
     * @var ScannedDocumentHandle $DocumentHandle
     */
    protected $DocumentHandle = null;

    /**
     * @var UnitHandle $UnitHandle1
     */
    protected $UnitHandle1 = null;

    /**
     * @var UnitHandle $UnitHandle2
     */
    protected $UnitHandle2 = null;

    /**
     * @param int $SerialNumber
     * @param float $Amount
     * @param float $AmountDefaultCurrency
     * @param \DateTime $Date
     * @param EntryType $Type
     * @param int $VoucherNumber
     */
    public function __construct($SerialNumber, $Amount, $AmountDefaultCurrency, \DateTime $Date, $Type, $VoucherNumber)
    {
      $this->SerialNumber = $SerialNumber;
      $this->Amount = $Amount;
      $this->AmountDefaultCurrency = $AmountDefaultCurrency;
      $this->Date = $Date->format(\DateTime::ATOM);
      $this->Type = $Type;
      $this->VoucherNumber = $VoucherNumber;
    }

    /**
     * @return EntryHandle
     */
    public function getHandle()
    {
      return $this->Handle;
    }

    /**
     * @param EntryHandle $Handle
     * @return \Economic\EntryData
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
     * @return \Economic\EntryData
     */
    public function setSerialNumber($SerialNumber)
    {
      $this->SerialNumber = $SerialNumber;
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
     * @return \Economic\EntryData
     */
    public function setAccountHandle($AccountHandle)
    {
      $this->AccountHandle = $AccountHandle;
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
     * @return \Economic\EntryData
     */
    public function setAmount($Amount)
    {
      $this->Amount = $Amount;
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
     * @return \Economic\EntryData
     */
    public function setAmountDefaultCurrency($AmountDefaultCurrency)
    {
      $this->AmountDefaultCurrency = $AmountDefaultCurrency;
      return $this;
    }

    /**
     * @return float
     */
    public function getQuantity1()
    {
      return $this->Quantity1;
    }

    /**
     * @param float $Quantity1
     * @return \Economic\EntryData
     */
    public function setQuantity1($Quantity1)
    {
      $this->Quantity1 = $Quantity1;
      return $this;
    }

    /**
     * @return float
     */
    public function getQuantity2()
    {
      return $this->Quantity2;
    }

    /**
     * @param float $Quantity2
     * @return \Economic\EntryData
     */
    public function setQuantity2($Quantity2)
    {
      $this->Quantity2 = $Quantity2;
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
     * @return \Economic\EntryData
     */
    public function setCurrencyHandle($CurrencyHandle)
    {
      $this->CurrencyHandle = $CurrencyHandle;
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
     * @return \Economic\EntryData
     */
    public function setDate(\DateTime $Date)
    {
      $this->Date = $Date->format(\DateTime::ATOM);
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
     * @return \Economic\EntryData
     */
    public function setText($Text)
    {
      $this->Text = $Text;
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
     * @return \Economic\EntryData
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

    /**
     * @return DepartmentHandle
     */
    public function getDepartmentHandle()
    {
      return $this->DepartmentHandle;
    }

    /**
     * @param DepartmentHandle $DepartmentHandle
     * @return \Economic\EntryData
     */
    public function setDepartmentHandle($DepartmentHandle)
    {
      $this->DepartmentHandle = $DepartmentHandle;
      return $this;
    }

    /**
     * @return DistributionKeyHandle
     */
    public function getDistributionKeyHandle()
    {
      return $this->DistributionKeyHandle;
    }

    /**
     * @param DistributionKeyHandle $DistributionKeyHandle
     * @return \Economic\EntryData
     */
    public function setDistributionKeyHandle($DistributionKeyHandle)
    {
      $this->DistributionKeyHandle = $DistributionKeyHandle;
      return $this;
    }

    /**
     * @return VatAccountHandle
     */
    public function getVatAccountHandle()
    {
      return $this->VatAccountHandle;
    }

    /**
     * @param VatAccountHandle $VatAccountHandle
     * @return \Economic\EntryData
     */
    public function setVatAccountHandle($VatAccountHandle)
    {
      $this->VatAccountHandle = $VatAccountHandle;
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
     * @return \Economic\EntryData
     */
    public function setVoucherNumber($VoucherNumber)
    {
      $this->VoucherNumber = $VoucherNumber;
      return $this;
    }

    /**
     * @return ProjectHandle
     */
    public function getProjectHandle()
    {
      return $this->ProjectHandle;
    }

    /**
     * @param ProjectHandle $ProjectHandle
     * @return \Economic\EntryData
     */
    public function setProjectHandle($ProjectHandle)
    {
      $this->ProjectHandle = $ProjectHandle;
      return $this;
    }

    /**
     * @return ScannedDocumentHandle
     */
    public function getDocumentHandle()
    {
      return $this->DocumentHandle;
    }

    /**
     * @param ScannedDocumentHandle $DocumentHandle
     * @return \Economic\EntryData
     */
    public function setDocumentHandle($DocumentHandle)
    {
      $this->DocumentHandle = $DocumentHandle;
      return $this;
    }

    /**
     * @return UnitHandle
     */
    public function getUnitHandle1()
    {
      return $this->UnitHandle1;
    }

    /**
     * @param UnitHandle $UnitHandle1
     * @return \Economic\EntryData
     */
    public function setUnitHandle1($UnitHandle1)
    {
      $this->UnitHandle1 = $UnitHandle1;
      return $this;
    }

    /**
     * @return UnitHandle
     */
    public function getUnitHandle2()
    {
      return $this->UnitHandle2;
    }

    /**
     * @param UnitHandle $UnitHandle2
     * @return \Economic\EntryData
     */
    public function setUnitHandle2($UnitHandle2)
    {
      $this->UnitHandle2 = $UnitHandle2;
      return $this;
    }

}
