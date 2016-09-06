<?php

namespace Economic;

class CompanyData
{

    /**
     * @var CompanyHandle $Handle
     */
    protected $Handle = null;

    /**
     * @var string $Number
     */
    protected $Number = null;

    /**
     * @var CurrencyHandle $BaseCurrencyHandle
     */
    protected $BaseCurrencyHandle = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var string $Address1
     */
    protected $Address1 = null;

    /**
     * @var string $Address2
     */
    protected $Address2 = null;

    /**
     * @var string $PostalCode
     */
    protected $PostalCode = null;

    /**
     * @var string $City
     */
    protected $City = null;

    /**
     * @var string $County
     */
    protected $County = null;

    /**
     * @var string $Country
     */
    protected $Country = null;

    /**
     * @var string $TelephoneNumber
     */
    protected $TelephoneNumber = null;

    /**
     * @var string $FaxNumber
     */
    protected $FaxNumber = null;

    /**
     * @var string $MobileNumber
     */
    protected $MobileNumber = null;

    /**
     * @var string $Contact
     */
    protected $Contact = null;

    /**
     * @var string $WebSite
     */
    protected $WebSite = null;

    /**
     * @var string $Email
     */
    protected $Email = null;

    /**
     * @var string $CINumber
     */
    protected $CINumber = null;

    /**
     * @var string $VatNumber
     */
    protected $VatNumber = null;

    /**
     * @var \DateTime $SignUpDate
     */
    protected $SignUpDate = null;

    /**
     * @param \DateTime $SignUpDate
     */
    public function __construct(\DateTime $SignUpDate)
    {
      $this->SignUpDate = $SignUpDate->format(\DateTime::ATOM);
    }

    /**
     * @return CompanyHandle
     */
    public function getHandle()
    {
      return $this->Handle;
    }

    /**
     * @param CompanyHandle $Handle
     * @return \Economic\CompanyData
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
     * @return \Economic\CompanyData
     */
    public function setNumber($Number)
    {
      $this->Number = $Number;
      return $this;
    }

    /**
     * @return CurrencyHandle
     */
    public function getBaseCurrencyHandle()
    {
      return $this->BaseCurrencyHandle;
    }

    /**
     * @param CurrencyHandle $BaseCurrencyHandle
     * @return \Economic\CompanyData
     */
    public function setBaseCurrencyHandle($BaseCurrencyHandle)
    {
      $this->BaseCurrencyHandle = $BaseCurrencyHandle;
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
     * @return \Economic\CompanyData
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return string
     */
    public function getAddress1()
    {
      return $this->Address1;
    }

    /**
     * @param string $Address1
     * @return \Economic\CompanyData
     */
    public function setAddress1($Address1)
    {
      $this->Address1 = $Address1;
      return $this;
    }

    /**
     * @return string
     */
    public function getAddress2()
    {
      return $this->Address2;
    }

    /**
     * @param string $Address2
     * @return \Economic\CompanyData
     */
    public function setAddress2($Address2)
    {
      $this->Address2 = $Address2;
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
     * @return \Economic\CompanyData
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
     * @return \Economic\CompanyData
     */
    public function setCity($City)
    {
      $this->City = $City;
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
     * @return \Economic\CompanyData
     */
    public function setCounty($County)
    {
      $this->County = $County;
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
     * @return \Economic\CompanyData
     */
    public function setCountry($Country)
    {
      $this->Country = $Country;
      return $this;
    }

    /**
     * @return string
     */
    public function getTelephoneNumber()
    {
      return $this->TelephoneNumber;
    }

    /**
     * @param string $TelephoneNumber
     * @return \Economic\CompanyData
     */
    public function setTelephoneNumber($TelephoneNumber)
    {
      $this->TelephoneNumber = $TelephoneNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getFaxNumber()
    {
      return $this->FaxNumber;
    }

    /**
     * @param string $FaxNumber
     * @return \Economic\CompanyData
     */
    public function setFaxNumber($FaxNumber)
    {
      $this->FaxNumber = $FaxNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getMobileNumber()
    {
      return $this->MobileNumber;
    }

    /**
     * @param string $MobileNumber
     * @return \Economic\CompanyData
     */
    public function setMobileNumber($MobileNumber)
    {
      $this->MobileNumber = $MobileNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getContact()
    {
      return $this->Contact;
    }

    /**
     * @param string $Contact
     * @return \Economic\CompanyData
     */
    public function setContact($Contact)
    {
      $this->Contact = $Contact;
      return $this;
    }

    /**
     * @return string
     */
    public function getWebSite()
    {
      return $this->WebSite;
    }

    /**
     * @param string $WebSite
     * @return \Economic\CompanyData
     */
    public function setWebSite($WebSite)
    {
      $this->WebSite = $WebSite;
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
     * @return \Economic\CompanyData
     */
    public function setEmail($Email)
    {
      $this->Email = $Email;
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
     * @return \Economic\CompanyData
     */
    public function setCINumber($CINumber)
    {
      $this->CINumber = $CINumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getVatNumber()
    {
      return $this->VatNumber;
    }

    /**
     * @param string $VatNumber
     * @return \Economic\CompanyData
     */
    public function setVatNumber($VatNumber)
    {
      $this->VatNumber = $VatNumber;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getSignUpDate()
    {
      if ($this->SignUpDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->SignUpDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $SignUpDate
     * @return \Economic\CompanyData
     */
    public function setSignUpDate(\DateTime $SignUpDate)
    {
      $this->SignUpDate = $SignUpDate->format(\DateTime::ATOM);
      return $this;
    }

}
