<?php

namespace Economic;

class CreditorData
{

    /**
     * @var CreditorHandle $Handle
     */
    protected $Handle = null;

    /**
     * @var string $Number
     */
    protected $Number = null;

    /**
     * @var CreditorGroupHandle $CreditorGroupHandle
     */
    protected $CreditorGroupHandle = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var VatZone $VatZone
     */
    protected $VatZone = null;

    /**
     * @var CurrencyHandle $CurrencyHandle
     */
    protected $CurrencyHandle = null;

    /**
     * @var TermOfPaymentHandle $TermOfPaymentHandle
     */
    protected $TermOfPaymentHandle = null;

    /**
     * @var boolean $IsAccessible
     */
    protected $IsAccessible = null;

    /**
     * @var string $CINumber
     */
    protected $CINumber = null;

    /**
     * @var string $Email
     */
    protected $Email = null;

    /**
     * @var string $Address
     */
    protected $Address = null;

    /**
     * @var string $PostalCode
     */
    protected $PostalCode = null;

    /**
     * @var string $City
     */
    protected $City = null;

    /**
     * @var string $Country
     */
    protected $Country = null;

    /**
     * @var string $BankAccount
     */
    protected $BankAccount = null;

    /**
     * @var CreditorContactHandle $AttentionHandle
     */
    protected $AttentionHandle = null;

    /**
     * @var CreditorContactHandle $YourReferenceHandle
     */
    protected $YourReferenceHandle = null;

    /**
     * @var EmployeeHandle $OurReferenceHandle
     */
    protected $OurReferenceHandle = null;

    /**
     * @var BankPaymentTypeHandle $DefaultPaymentTypeHandle
     */
    protected $DefaultPaymentTypeHandle = null;

    /**
     * @var string $DefaultPaymentCreditorId
     */
    protected $DefaultPaymentCreditorId = null;

    /**
     * @var string $County
     */
    protected $County = null;

    /**
     * @var AccountHandle $AutoContraAccountHandle
     */
    protected $AutoContraAccountHandle = null;

    /**
     * @var string $DefaultInvoiceText
     */
    protected $DefaultInvoiceText = null;

    /**
     * @param VatZone $VatZone
     * @param boolean $IsAccessible
     */
    public function __construct($VatZone, $IsAccessible)
    {
      $this->VatZone = $VatZone;
      $this->IsAccessible = $IsAccessible;
    }

    /**
     * @return CreditorHandle
     */
    public function getHandle()
    {
      return $this->Handle;
    }

    /**
     * @param CreditorHandle $Handle
     * @return \Economic\CreditorData
     */
    public function setHandle($Handle)
    {
      $this->Handle = $Handle;
      return $this;
    }

    /**
     * @return string
     */
    public function getNumber()
    {
      return $this->Number;
    }

    /**
     * @param string $Number
     * @return \Economic\CreditorData
     */
    public function setNumber($Number)
    {
      $this->Number = $Number;
      return $this;
    }

    /**
     * @return CreditorGroupHandle
     */
    public function getCreditorGroupHandle()
    {
      return $this->CreditorGroupHandle;
    }

    /**
     * @param CreditorGroupHandle $CreditorGroupHandle
     * @return \Economic\CreditorData
     */
    public function setCreditorGroupHandle($CreditorGroupHandle)
    {
      $this->CreditorGroupHandle = $CreditorGroupHandle;
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
     * @return \Economic\CreditorData
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return VatZone
     */
    public function getVatZone()
    {
      return $this->VatZone;
    }

    /**
     * @param VatZone $VatZone
     * @return \Economic\CreditorData
     */
    public function setVatZone($VatZone)
    {
      $this->VatZone = $VatZone;
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
     * @return \Economic\CreditorData
     */
    public function setCurrencyHandle($CurrencyHandle)
    {
      $this->CurrencyHandle = $CurrencyHandle;
      return $this;
    }

    /**
     * @return TermOfPaymentHandle
     */
    public function getTermOfPaymentHandle()
    {
      return $this->TermOfPaymentHandle;
    }

    /**
     * @param TermOfPaymentHandle $TermOfPaymentHandle
     * @return \Economic\CreditorData
     */
    public function setTermOfPaymentHandle($TermOfPaymentHandle)
    {
      $this->TermOfPaymentHandle = $TermOfPaymentHandle;
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
     * @return \Economic\CreditorData
     */
    public function setIsAccessible($IsAccessible)
    {
      $this->IsAccessible = $IsAccessible;
      return $this;
    }

    /**
     * @return string
     */
    public function getCINumber()
    {
      return $this->CINumber;
    }

    /**
     * @param string $CINumber
     * @return \Economic\CreditorData
     */
    public function setCINumber($CINumber)
    {
      $this->CINumber = $CINumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
      return $this->Email;
    }

    /**
     * @param string $Email
     * @return \Economic\CreditorData
     */
    public function setEmail($Email)
    {
      $this->Email = $Email;
      return $this;
    }

    /**
     * @return string
     */
    public function getAddress()
    {
      return $this->Address;
    }

    /**
     * @param string $Address
     * @return \Economic\CreditorData
     */
    public function setAddress($Address)
    {
      $this->Address = $Address;
      return $this;
    }

    /**
     * @return string
     */
    public function getPostalCode()
    {
      return $this->PostalCode;
    }

    /**
     * @param string $PostalCode
     * @return \Economic\CreditorData
     */
    public function setPostalCode($PostalCode)
    {
      $this->PostalCode = $PostalCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getCity()
    {
      return $this->City;
    }

    /**
     * @param string $City
     * @return \Economic\CreditorData
     */
    public function setCity($City)
    {
      $this->City = $City;
      return $this;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
      return $this->Country;
    }

    /**
     * @param string $Country
     * @return \Economic\CreditorData
     */
    public function setCountry($Country)
    {
      $this->Country = $Country;
      return $this;
    }

    /**
     * @return string
     */
    public function getBankAccount()
    {
      return $this->BankAccount;
    }

    /**
     * @param string $BankAccount
     * @return \Economic\CreditorData
     */
    public function setBankAccount($BankAccount)
    {
      $this->BankAccount = $BankAccount;
      return $this;
    }

    /**
     * @return CreditorContactHandle
     */
    public function getAttentionHandle()
    {
      return $this->AttentionHandle;
    }

    /**
     * @param CreditorContactHandle $AttentionHandle
     * @return \Economic\CreditorData
     */
    public function setAttentionHandle($AttentionHandle)
    {
      $this->AttentionHandle = $AttentionHandle;
      return $this;
    }

    /**
     * @return CreditorContactHandle
     */
    public function getYourReferenceHandle()
    {
      return $this->YourReferenceHandle;
    }

    /**
     * @param CreditorContactHandle $YourReferenceHandle
     * @return \Economic\CreditorData
     */
    public function setYourReferenceHandle($YourReferenceHandle)
    {
      $this->YourReferenceHandle = $YourReferenceHandle;
      return $this;
    }

    /**
     * @return EmployeeHandle
     */
    public function getOurReferenceHandle()
    {
      return $this->OurReferenceHandle;
    }

    /**
     * @param EmployeeHandle $OurReferenceHandle
     * @return \Economic\CreditorData
     */
    public function setOurReferenceHandle($OurReferenceHandle)
    {
      $this->OurReferenceHandle = $OurReferenceHandle;
      return $this;
    }

    /**
     * @return BankPaymentTypeHandle
     */
    public function getDefaultPaymentTypeHandle()
    {
      return $this->DefaultPaymentTypeHandle;
    }

    /**
     * @param BankPaymentTypeHandle $DefaultPaymentTypeHandle
     * @return \Economic\CreditorData
     */
    public function setDefaultPaymentTypeHandle($DefaultPaymentTypeHandle)
    {
      $this->DefaultPaymentTypeHandle = $DefaultPaymentTypeHandle;
      return $this;
    }

    /**
     * @return string
     */
    public function getDefaultPaymentCreditorId()
    {
      return $this->DefaultPaymentCreditorId;
    }

    /**
     * @param string $DefaultPaymentCreditorId
     * @return \Economic\CreditorData
     */
    public function setDefaultPaymentCreditorId($DefaultPaymentCreditorId)
    {
      $this->DefaultPaymentCreditorId = $DefaultPaymentCreditorId;
      return $this;
    }

    /**
     * @return string
     */
    public function getCounty()
    {
      return $this->County;
    }

    /**
     * @param string $County
     * @return \Economic\CreditorData
     */
    public function setCounty($County)
    {
      $this->County = $County;
      return $this;
    }

    /**
     * @return AccountHandle
     */
    public function getAutoContraAccountHandle()
    {
      return $this->AutoContraAccountHandle;
    }

    /**
     * @param AccountHandle $AutoContraAccountHandle
     * @return \Economic\CreditorData
     */
    public function setAutoContraAccountHandle($AutoContraAccountHandle)
    {
      $this->AutoContraAccountHandle = $AutoContraAccountHandle;
      return $this;
    }

    /**
     * @return string
     */
    public function getDefaultInvoiceText()
    {
      return $this->DefaultInvoiceText;
    }

    /**
     * @param string $DefaultInvoiceText
     * @return \Economic\CreditorData
     */
    public function setDefaultInvoiceText($DefaultInvoiceText)
    {
      $this->DefaultInvoiceText = $DefaultInvoiceText;
      return $this;
    }

}
