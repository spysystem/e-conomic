<?php

namespace Economic;

class DeliveryLocationData
{

    /**
     * @var DeliveryLocationHandle $Handle
     */
    protected $Handle = null;

    /**
     * @var int $Id
     */
    protected $Id = null;

    /**
     * @var DebtorHandle $DebtorHandle
     */
    protected $DebtorHandle = null;

    /**
     * @var int $Number
     */
    protected $Number = null;

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
     * @var string $TermsOfDelivery
     */
    protected $TermsOfDelivery = null;

    /**
     * @var boolean $IsAccessible
     */
    protected $IsAccessible = null;

    /**
     * @var string $ExternalId
     */
    protected $ExternalId = null;

    /**
     * @var string $County
     */
    protected $County = null;

    /**
     * @param int $Number
     * @param boolean $IsAccessible
     */
    public function __construct($Number, $IsAccessible)
    {
      $this->Number = $Number;
      $this->IsAccessible = $IsAccessible;
    }

    /**
     * @return DeliveryLocationHandle
     */
    public function getHandle()
    {
      return $this->Handle;
    }

    /**
     * @param DeliveryLocationHandle $Handle
     * @return \Economic\DeliveryLocationData
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
     * @return \Economic\DeliveryLocationData
     */
    public function setId($Id)
    {
      $this->Id = $Id;
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
     * @return \Economic\DeliveryLocationData
     */
    public function setDebtorHandle($DebtorHandle)
    {
      $this->DebtorHandle = $DebtorHandle;
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
     * @return \Economic\DeliveryLocationData
     */
    public function setNumber($Number)
    {
      $this->Number = $Number;
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
     * @return \Economic\DeliveryLocationData
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
     * @return \Economic\DeliveryLocationData
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
     * @return \Economic\DeliveryLocationData
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
     * @return \Economic\DeliveryLocationData
     */
    public function setCountry($Country)
    {
      $this->Country = $Country;
      return $this;
    }

    /**
     * @return string
     */
    public function getTermsOfDelivery()
    {
      return $this->TermsOfDelivery;
    }

    /**
     * @param string $TermsOfDelivery
     * @return \Economic\DeliveryLocationData
     */
    public function setTermsOfDelivery($TermsOfDelivery)
    {
      $this->TermsOfDelivery = $TermsOfDelivery;
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
     * @return \Economic\DeliveryLocationData
     */
    public function setIsAccessible($IsAccessible)
    {
      $this->IsAccessible = $IsAccessible;
      return $this;
    }

    /**
     * @return string
     */
    public function getExternalId()
    {
      return $this->ExternalId;
    }

    /**
     * @param string $ExternalId
     * @return \Economic\DeliveryLocationData
     */
    public function setExternalId($ExternalId)
    {
      $this->ExternalId = $ExternalId;
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
     * @return \Economic\DeliveryLocationData
     */
    public function setCounty($County)
    {
      $this->County = $County;
      return $this;
    }

}
