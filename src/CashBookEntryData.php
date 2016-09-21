<?php

namespace Economic;

/**
 * Class CashBookEntryData
 *
 * @package Economic
 */
class CashBookEntryData
{

    /**
     * @var CashBookEntryHandle $Handle
     */
    protected $Handle = null;

    /**
     * @var int $Id1
     */
    protected $Id1 = null;

    /**
     * @var int $Id2
     */
    protected $Id2 = null;

    /**
     * @var CashBookEntryType $Type
     */
    protected $Type = null;

    /**
     * @var CashBookHandle $CashBookHandle
     */
    protected $CashBookHandle = null;

    /**
     * @var DebtorHandle $DebtorHandle
     */
    protected $DebtorHandle = null;

    /**
     * @var CreditorHandle $CreditorHandle
     */
    protected $CreditorHandle = null;

    /**
     * @var AccountHandle $AccountHandle
     */
    protected $AccountHandle = null;

    /**
     * @var AccountHandle $ContraAccountHandle
     */
    protected $ContraAccountHandle = null;

    /**
     * @var \DateTime $Date
     */
    protected $Date = null;

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
     * @var VatAccountHandle $VatAccountHandle
     */
    protected $VatAccountHandle = null;

    /**
     * @var VatAccountHandle $ContraVatAccountHandle
     */
    protected $ContraVatAccountHandle = null;

    /**
     * @var int $DebtorInvoiceNumber
     */
    protected $DebtorInvoiceNumber = null;

    /**
     * @var string $CreditorInvoiceNumber
     */
    protected $CreditorInvoiceNumber = null;

    /**
     * @var \DateTime $DueDate
     */
    protected $DueDate = null;

    /**
     * @var DepartmentHandle $DepartmentHandle
     */
    protected $DepartmentHandle = null;

    /**
     * @var DistributionKeyHandle $DistributionKeyHandle
     */
    protected $DistributionKeyHandle = null;

    /**
     * @var ProjectHandle $ProjectHandle
     */
    protected $ProjectHandle = null;

    /**
     * @var CostTypeHandle $CostTypeHandle
     */
    protected $CostTypeHandle = null;

    /**
     * @var BankPaymentTypeHandle $BankPaymentTypeHandle
     */
    protected $BankPaymentTypeHandle = null;

    /**
     * @var string $BankPaymentCreditorId
     */
    protected $BankPaymentCreditorId = null;

    /**
     * @var string $BankPaymentCreditorInvoiceId
     */
    protected $BankPaymentCreditorInvoiceId = null;

    /**
     * @var AccountHandle $CapitaliseHandle
     */
    protected $CapitaliseHandle = null;

    /**
     * @var \DateTime $StartDate
     */
    protected $StartDate = null;

    /**
     * @var \DateTime $EndDate
     */
    protected $EndDate = null;

    /**
     * @var EmployeeHandle $EmployeeHandle
     */
    protected $EmployeeHandle = null;

    /**
     * @param CashBookEntryType|string $Type
     * @param \DateTime $Date
     * @param int $VoucherNumber
     * @param float $AmountDefaultCurrency
     * @param float $Amount
     */
    public function __construct($Type, \DateTime $Date, $VoucherNumber, $AmountDefaultCurrency, $Amount)
    {
      $this->Type = $Type;
      $this->Date = $Date->format(\DateTime::ATOM);
      $this->VoucherNumber = $VoucherNumber;
      $this->AmountDefaultCurrency = $AmountDefaultCurrency;
      $this->Amount = $Amount;
    }

    /**
     * @return CashBookEntryHandle
     */
    public function getHandle()
    {
      return $this->Handle;
    }

    /**
     * @param CashBookEntryHandle $Handle
     * @return \Economic\CashBookEntryData
     */
    public function setHandle($Handle)
    {
      $this->Handle = $Handle;
      return $this;
    }

    /**
     * @return int
     */
    public function getId1()
    {
      return $this->Id1;
    }

    /**
     * @param int $Id1
     * @return \Economic\CashBookEntryData
     */
    public function setId1($Id1)
    {
      $this->Id1 = $Id1;
      return $this;
    }

    /**
     * @return int
     */
    public function getId2()
    {
      return $this->Id2;
    }

    /**
     * @param int $Id2
     * @return \Economic\CashBookEntryData
     */
    public function setId2($Id2)
    {
      $this->Id2 = $Id2;
      return $this;
    }

    /**
     * @return CashBookEntryType
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param CashBookEntryType $Type
     * @return \Economic\CashBookEntryData
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

    /**
     * @return CashBookHandle
     */
    public function getCashBookHandle()
    {
      return $this->CashBookHandle;
    }

    /**
     * @param CashBookHandle $CashBookHandle
     * @return \Economic\CashBookEntryData
     */
    public function setCashBookHandle($CashBookHandle)
    {
      $this->CashBookHandle = $CashBookHandle;
      return $this;
    }

    /**
     * @return DebtorHandle
     */
    public function getDebtorHandle()
    {
      return $this->DebtorHandle;
    }

    /**
     * @param DebtorHandle $DebtorHandle
     * @return \Economic\CashBookEntryData
     */
    public function setDebtorHandle($DebtorHandle)
    {
      $this->DebtorHandle = $DebtorHandle;
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
     * @return \Economic\CashBookEntryData
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
     * @return \Economic\CashBookEntryData
     */
    public function setAccountHandle($AccountHandle)
    {
      $this->AccountHandle = $AccountHandle;
      return $this;
    }

    /**
     * @return AccountHandle
     */
    public function getContraAccountHandle()
    {
      return $this->ContraAccountHandle;
    }

    /**
     * @param AccountHandle $ContraAccountHandle
     * @return \Economic\CashBookEntryData
     */
    public function setContraAccountHandle($ContraAccountHandle)
    {
      $this->ContraAccountHandle = $ContraAccountHandle;
      return $this;
    }

    /**
     * @return \DateTime|bool
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
     * @return \Economic\CashBookEntryData
     */
    public function setDate(\DateTime $Date)
    {
      $this->Date = $Date->format(\DateTime::ATOM);
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
     * @return \Economic\CashBookEntryData
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
     * @return \Economic\CashBookEntryData
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
     * @return \Economic\CashBookEntryData
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
     * @return \Economic\CashBookEntryData
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
     * @return \Economic\CashBookEntryData
     */
    public function setAmount($Amount)
    {
      $this->Amount = $Amount;
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
     * @return \Economic\CashBookEntryData
     */
    public function setVatAccountHandle($VatAccountHandle)
    {
      $this->VatAccountHandle = $VatAccountHandle;
      return $this;
    }

    /**
     * @return VatAccountHandle
     */
    public function getContraVatAccountHandle()
    {
      return $this->ContraVatAccountHandle;
    }

    /**
     * @param VatAccountHandle $ContraVatAccountHandle
     * @return \Economic\CashBookEntryData
     */
    public function setContraVatAccountHandle($ContraVatAccountHandle)
    {
      $this->ContraVatAccountHandle = $ContraVatAccountHandle;
      return $this;
    }

    /**
     * @return int
     */
    public function getDebtorInvoiceNumber()
    {
      return $this->DebtorInvoiceNumber;
    }

    /**
     * @param int $DebtorInvoiceNumber
     * @return \Economic\CashBookEntryData
     */
    public function setDebtorInvoiceNumber($DebtorInvoiceNumber)
    {
      $this->DebtorInvoiceNumber = $DebtorInvoiceNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getCreditorInvoiceNumber()
    {
      return $this->CreditorInvoiceNumber;
    }

    /**
     * @param string $CreditorInvoiceNumber
     * @return \Economic\CashBookEntryData
     */
    public function setCreditorInvoiceNumber($CreditorInvoiceNumber)
    {
      $this->CreditorInvoiceNumber = $CreditorInvoiceNumber;
      return $this;
    }

    /**
     * @return \DateTime|bool
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
     * @return \Economic\CashBookEntryData
     */
    public function setDueDate(\DateTime $DueDate = null)
    {
      if ($DueDate == null) {
       $this->DueDate = null;
      } else {
        $this->DueDate = $DueDate->format(\DateTime::ATOM);
      }
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
     * @return \Economic\CashBookEntryData
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
     * @return \Economic\CashBookEntryData
     */
    public function setDistributionKeyHandle($DistributionKeyHandle)
    {
      $this->DistributionKeyHandle = $DistributionKeyHandle;
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
     * @return \Economic\CashBookEntryData
     */
    public function setProjectHandle($ProjectHandle)
    {
      $this->ProjectHandle = $ProjectHandle;
      return $this;
    }

    /**
     * @return CostTypeHandle
     */
    public function getCostTypeHandle()
    {
      return $this->CostTypeHandle;
    }

    /**
     * @param CostTypeHandle $CostTypeHandle
     * @return \Economic\CashBookEntryData
     */
    public function setCostTypeHandle($CostTypeHandle)
    {
      $this->CostTypeHandle = $CostTypeHandle;
      return $this;
    }

    /**
     * @return BankPaymentTypeHandle
     */
    public function getBankPaymentTypeHandle()
    {
      return $this->BankPaymentTypeHandle;
    }

    /**
     * @param BankPaymentTypeHandle $BankPaymentTypeHandle
     * @return \Economic\CashBookEntryData
     */
    public function setBankPaymentTypeHandle($BankPaymentTypeHandle)
    {
      $this->BankPaymentTypeHandle = $BankPaymentTypeHandle;
      return $this;
    }

    /**
     * @return string
     */
    public function getBankPaymentCreditorId()
    {
      return $this->BankPaymentCreditorId;
    }

    /**
     * @param string $BankPaymentCreditorId
     * @return \Economic\CashBookEntryData
     */
    public function setBankPaymentCreditorId($BankPaymentCreditorId)
    {
      $this->BankPaymentCreditorId = $BankPaymentCreditorId;
      return $this;
    }

    /**
     * @return string
     */
    public function getBankPaymentCreditorInvoiceId()
    {
      return $this->BankPaymentCreditorInvoiceId;
    }

    /**
     * @param string $BankPaymentCreditorInvoiceId
     * @return \Economic\CashBookEntryData
     */
    public function setBankPaymentCreditorInvoiceId($BankPaymentCreditorInvoiceId)
    {
      $this->BankPaymentCreditorInvoiceId = $BankPaymentCreditorInvoiceId;
      return $this;
    }

    /**
     * @return AccountHandle
     */
    public function getCapitaliseHandle()
    {
      return $this->CapitaliseHandle;
    }

    /**
     * @param AccountHandle $CapitaliseHandle
     * @return \Economic\CashBookEntryData
     */
    public function setCapitaliseHandle($CapitaliseHandle)
    {
      $this->CapitaliseHandle = $CapitaliseHandle;
      return $this;
    }

    /**
     * @return \DateTime|bool
     */
    public function getStartDate()
    {
      if ($this->StartDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->StartDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $StartDate
     * @return \Economic\CashBookEntryData
     */
    public function setStartDate(\DateTime $StartDate = null)
    {
      if ($StartDate == null) {
       $this->StartDate = null;
      } else {
        $this->StartDate = $StartDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime|bool
     */
    public function getEndDate()
    {
      if ($this->EndDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->EndDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $EndDate
     * @return \Economic\CashBookEntryData
     */
    public function setEndDate(\DateTime $EndDate = null)
    {
      if ($EndDate == null) {
       $this->EndDate = null;
      } else {
        $this->EndDate = $EndDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return EmployeeHandle
     */
    public function getEmployeeHandle()
    {
      return $this->EmployeeHandle;
    }

    /**
     * @param EmployeeHandle $EmployeeHandle
     * @return \Economic\CashBookEntryData
     */
    public function setEmployeeHandle($EmployeeHandle)
    {
      $this->EmployeeHandle = $EmployeeHandle;
      return $this;
    }

}
