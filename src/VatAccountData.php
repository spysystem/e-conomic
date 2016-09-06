<?php

namespace Economic;

class VatAccountData
{

    /**
     * @var VatAccountHandle $Handle
     */
    protected $Handle = null;

    /**
     * @var string $VatCode
     */
    protected $VatCode = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var VatAccountType $Type
     */
    protected $Type = null;

    /**
     * @var float $RateAsPercent
     */
    protected $RateAsPercent = null;

    /**
     * @var AccountHandle $AccountHandle
     */
    protected $AccountHandle = null;

    /**
     * @var AccountHandle $ContraAccountHandle
     */
    protected $ContraAccountHandle = null;

    /**
     * @param VatAccountType $Type
     * @param float $RateAsPercent
     */
    public function __construct($Type, $RateAsPercent)
    {
      $this->Type = $Type;
      $this->RateAsPercent = $RateAsPercent;
    }

    /**
     * @return VatAccountHandle
     */
    public function getHandle()
    {
      return $this->Handle;
    }

    /**
     * @param VatAccountHandle $Handle
     * @return \Economic\VatAccountData
     */
    public function setHandle($Handle)
    {
      $this->Handle = $Handle;
      return $this;
    }

    /**
     * @return string
     */
    public function getVatCode()
    {
      return $this->VatCode;
    }

    /**
     * @param string $VatCode
     * @return \Economic\VatAccountData
     */
    public function setVatCode($VatCode)
    {
      $this->VatCode = $VatCode;
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
     * @return \Economic\VatAccountData
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return VatAccountType
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param VatAccountType $Type
     * @return \Economic\VatAccountData
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

    /**
     * @return float
     */
    public function getRateAsPercent()
    {
      return $this->RateAsPercent;
    }

    /**
     * @param float $RateAsPercent
     * @return \Economic\VatAccountData
     */
    public function setRateAsPercent($RateAsPercent)
    {
      $this->RateAsPercent = $RateAsPercent;
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
     * @return \Economic\VatAccountData
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
     * @return \Economic\VatAccountData
     */
    public function setContraAccountHandle($ContraAccountHandle)
    {
      $this->ContraAccountHandle = $ContraAccountHandle;
      return $this;
    }

}
