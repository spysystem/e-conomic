<?php

namespace Economic;

class AccountData
{

    /**
     * @var AccountHandle $Handle
     */
    protected $Handle = null;

    /**
     * @var int $Number
     */
    protected $Number = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var AccountType $Type
     */
    protected $Type = null;

    /**
     * @var DebitCredit $DebitCredit
     */
    protected $DebitCredit = null;

    /**
     * @var boolean $IsAccessible
     */
    protected $IsAccessible = null;

    /**
     * @var boolean $BlockDirectEntries
     */
    protected $BlockDirectEntries = null;

    /**
     * @var VatAccountHandle $VatAccountHandle
     */
    protected $VatAccountHandle = null;

    /**
     * @var AccountHandle $ContraAccountHandle
     */
    protected $ContraAccountHandle = null;

    /**
     * @var AccountHandle $OpeningAccountHandle
     */
    protected $OpeningAccountHandle = null;

    /**
     * @var AccountHandle $TotalFromHandle
     */
    protected $TotalFromHandle = null;

    /**
     * @var float $Balance
     */
    protected $Balance = null;

    /**
     * @var DepartmentHandle $DepartmentHandle
     */
    protected $DepartmentHandle = null;

    /**
     * @var DistributionKeyHandle $DistributionKeyHandle
     */
    protected $DistributionKeyHandle = null;

    /**
     * @param int $Number
     * @param AccountType $Type
     * @param DebitCredit $DebitCredit
     * @param boolean $IsAccessible
     * @param boolean $BlockDirectEntries
     * @param float $Balance
     */
    public function __construct($Number, $Type, $DebitCredit, $IsAccessible, $BlockDirectEntries, $Balance)
    {
      $this->Number = $Number;
      $this->Type = $Type;
      $this->DebitCredit = $DebitCredit;
      $this->IsAccessible = $IsAccessible;
      $this->BlockDirectEntries = $BlockDirectEntries;
      $this->Balance = $Balance;
    }

    /**
     * @return AccountHandle
     */
    public function getHandle()
    {
      return $this->Handle;
    }

    /**
     * @param AccountHandle $Handle
     * @return \Economic\AccountData
     */
    public function setHandle($Handle)
    {
      $this->Handle = $Handle;
      return $this;
    }

    /**
     * @return int
     */
    public function getNumber()
    {
      return $this->Number;
    }

    /**
     * @param int $Number
     * @return \Economic\AccountData
     */
    public function setNumber($Number)
    {
      $this->Number = $Number;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param string $Name
     * @return \Economic\AccountData
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return AccountType
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param AccountType $Type
     * @return \Economic\AccountData
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

    /**
     * @return DebitCredit
     */
    public function getDebitCredit()
    {
      return $this->DebitCredit;
    }

    /**
     * @param DebitCredit $DebitCredit
     * @return \Economic\AccountData
     */
    public function setDebitCredit($DebitCredit)
    {
      $this->DebitCredit = $DebitCredit;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsAccessible()
    {
      return $this->IsAccessible;
    }

    /**
     * @param boolean $IsAccessible
     * @return \Economic\AccountData
     */
    public function setIsAccessible($IsAccessible)
    {
      $this->IsAccessible = $IsAccessible;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getBlockDirectEntries()
    {
      return $this->BlockDirectEntries;
    }

    /**
     * @param boolean $BlockDirectEntries
     * @return \Economic\AccountData
     */
    public function setBlockDirectEntries($BlockDirectEntries)
    {
      $this->BlockDirectEntries = $BlockDirectEntries;
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
     * @return \Economic\AccountData
     */
    public function setVatAccountHandle($VatAccountHandle)
    {
      $this->VatAccountHandle = $VatAccountHandle;
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
     * @return \Economic\AccountData
     */
    public function setContraAccountHandle($ContraAccountHandle)
    {
      $this->ContraAccountHandle = $ContraAccountHandle;
      return $this;
    }

    /**
     * @return AccountHandle
     */
    public function getOpeningAccountHandle()
    {
      return $this->OpeningAccountHandle;
    }

    /**
     * @param AccountHandle $OpeningAccountHandle
     * @return \Economic\AccountData
     */
    public function setOpeningAccountHandle($OpeningAccountHandle)
    {
      $this->OpeningAccountHandle = $OpeningAccountHandle;
      return $this;
    }

    /**
     * @return AccountHandle
     */
    public function getTotalFromHandle()
    {
      return $this->TotalFromHandle;
    }

    /**
     * @param AccountHandle $TotalFromHandle
     * @return \Economic\AccountData
     */
    public function setTotalFromHandle($TotalFromHandle)
    {
      $this->TotalFromHandle = $TotalFromHandle;
      return $this;
    }

    /**
     * @return float
     */
    public function getBalance()
    {
      return $this->Balance;
    }

    /**
     * @param float $Balance
     * @return \Economic\AccountData
     */
    public function setBalance($Balance)
    {
      $this->Balance = $Balance;
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
     * @return \Economic\AccountData
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
     * @return \Economic\AccountData
     */
    public function setDistributionKeyHandle($DistributionKeyHandle)
    {
      $this->DistributionKeyHandle = $DistributionKeyHandle;
      return $this;
    }

}
