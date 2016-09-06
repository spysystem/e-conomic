<?php

namespace Economic;

class TermOfPaymentData
{

    /**
     * @var TermOfPaymentHandle $Handle
     */
    protected $Handle = null;

    /**
     * @var int $Id
     */
    protected $Id = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var TermOfPaymentType $Type
     */
    protected $Type = null;

    /**
     * @var int $Days
     */
    protected $Days = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var AccountHandle $ContraAccountHandle
     */
    protected $ContraAccountHandle = null;

    /**
     * @var AccountHandle $ContraAccount2Handle
     */
    protected $ContraAccount2Handle = null;

    /**
     * @var DebtorHandle $DebtorHandle
     */
    protected $DebtorHandle = null;

    /**
     * @var float $DistributionInPercent
     */
    protected $DistributionInPercent = null;

    /**
     * @var float $DistributionInPercent2
     */
    protected $DistributionInPercent2 = null;

    /**
     * @param TermOfPaymentType $Type
     */
    public function __construct($Type)
    {
      $this->Type = $Type;
    }

    /**
     * @return TermOfPaymentHandle
     */
    public function getHandle()
    {
      return $this->Handle;
    }

    /**
     * @param TermOfPaymentHandle $Handle
     * @return \Economic\TermOfPaymentData
     */
    public function setHandle($Handle)
    {
      $this->Handle = $Handle;
      return $this;
    }

    /**
     * @return int
     */
    public function getId()
    {
      return $this->Id;
    }

    /**
     * @param int $Id
     * @return \Economic\TermOfPaymentData
     */
    public function setId($Id)
    {
      $this->Id = $Id;
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
     * @return \Economic\TermOfPaymentData
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return TermOfPaymentType
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param TermOfPaymentType $Type
     * @return \Economic\TermOfPaymentData
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

    /**
     * @return int
     */
    public function getDays()
    {
      return $this->Days;
    }

    /**
     * @param int $Days
     * @return \Economic\TermOfPaymentData
     */
    public function setDays($Days)
    {
      $this->Days = $Days;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param string $Description
     * @return \Economic\TermOfPaymentData
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
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
     * @return \Economic\TermOfPaymentData
     */
    public function setContraAccountHandle($ContraAccountHandle)
    {
      $this->ContraAccountHandle = $ContraAccountHandle;
      return $this;
    }

    /**
     * @return AccountHandle
     */
    public function getContraAccount2Handle()
    {
      return $this->ContraAccount2Handle;
    }

    /**
     * @param AccountHandle $ContraAccount2Handle
     * @return \Economic\TermOfPaymentData
     */
    public function setContraAccount2Handle($ContraAccount2Handle)
    {
      $this->ContraAccount2Handle = $ContraAccount2Handle;
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
     * @return \Economic\TermOfPaymentData
     */
    public function setDebtorHandle($DebtorHandle)
    {
      $this->DebtorHandle = $DebtorHandle;
      return $this;
    }

    /**
     * @return float
     */
    public function getDistributionInPercent()
    {
      return $this->DistributionInPercent;
    }

    /**
     * @param float $DistributionInPercent
     * @return \Economic\TermOfPaymentData
     */
    public function setDistributionInPercent($DistributionInPercent)
    {
      $this->DistributionInPercent = $DistributionInPercent;
      return $this;
    }

    /**
     * @return float
     */
    public function getDistributionInPercent2()
    {
      return $this->DistributionInPercent2;
    }

    /**
     * @param float $DistributionInPercent2
     * @return \Economic\TermOfPaymentData
     */
    public function setDistributionInPercent2($DistributionInPercent2)
    {
      $this->DistributionInPercent2 = $DistributionInPercent2;
      return $this;
    }

}
