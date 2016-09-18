<?php

namespace Economic;

/**
 * Class DebtorData
 *
 * @package Economic
 */
class DebtorData
{

    /**
     * @var DebtorHandle $Handle
     */
    protected $Handle = null;

    /**
     * @var string $Number
     */
    protected $Number = null;

    /**
     * @var DebtorGroupHandle $DebtorGroupHandle
     */
    protected $DebtorGroupHandle = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var VatZone $VatZone
     */
    protected $VatZone = null;

    /**
     * @var ExtendedVatZoneHandle $ExtendedVatZone
     */
    protected $ExtendedVatZone = null;

    /**
     * @var CurrencyHandle $CurrencyHandle
     */
    protected $CurrencyHandle = null;

    /**
     * @var PriceGroupHandle $PriceGroupHandle
     */
    protected $PriceGroupHandle = null;

    /**
     * @var boolean $IsAccessible
     */
    protected $IsAccessible = null;

    /**
     * @var string $Ean
     */
    protected $Ean = null;

    /**
     * @var string $PublicEntryNumber
     */
    protected $PublicEntryNumber = null;

    /**
     * @var string $Email
     */
    protected $Email = null;

    /**
     * @var string $TelephoneAndFaxNumber
     */
    protected $TelephoneAndFaxNumber = null;

    /**
     * @var string $Website
     */
    protected $Website = null;

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
     * @var float $CreditMaximum
     */
    protected $CreditMaximum = null;

    /**
     * @var string $VatNumber
     */
    protected $VatNumber = null;

    /**
     * @var string $County
     */
    protected $County = null;

    /**
     * @var string $CINumber
     */
    protected $CINumber = null;

    /**
     * @var TermOfPaymentHandle $TermOfPaymentHandle
     */
    protected $TermOfPaymentHandle = null;

    /**
     * @var TemplateCollectionHandle $LayoutHandle
     */
    protected $LayoutHandle = null;

    /**
     * @var DebtorContactHandle $AttentionHandle
     */
    protected $AttentionHandle = null;

    /**
     * @var DebtorContactHandle $YourReferenceHandle
     */
    protected $YourReferenceHandle = null;

    /**
     * @var EmployeeHandle $OurReferenceHandle
     */
    protected $OurReferenceHandle = null;

    /**
     * @var float $Balance
     */
    protected $Balance = null;

    /**
     * @var DeliveryLocationHandle $DefaultDeliveryLocationHandle
     */
    protected $DefaultDeliveryLocationHandle = null;

    /**
     * @param VatZone|string $VatZone
     * @param boolean        $IsAccessible
     */
    public function __construct($VatZone, $IsAccessible)
    {
      $this->VatZone = $VatZone;
      $this->IsAccessible = $IsAccessible;
    }

	/**
	 * @param string              $strVatZone
	 * @param bool                $bIsAccessible
	 * @param string              $strNumber
	 * @param string              $strName
	 * @param string              $strAddress
	 * @param string              $strPostalCode
	 * @param string              $strCity
	 * @param string              $strCounty
	 * @param string              $strCountry
	 * @param string              $strCINumber (VAT number)
	 * @param string              $strEmail
	 * @param string              $strTelephoneAndFaxNumber
	 * @param TermOfPaymentHandle $oTermOfPaymentHandle
	 * @param CurrencyHandle      $oCurrencyHandle
	 * @param DebtorGroupHandle   $oDebtorGroupHandle
	 * @param string              $strEAN
	 * @param DebtorHandle|null   $oDebtorHandle
	 *
	 * @return DebtorData
	 */
	public static function Create($strVatZone, $bIsAccessible, $strNumber, $strName, $strAddress, $strPostalCode, $strCity,
								  $strCounty, $strCountry, $strCINumber, $strEmail, $strTelephoneAndFaxNumber,
								  TermOfPaymentHandle $oTermOfPaymentHandle, CurrencyHandle $oCurrencyHandle,
								  DebtorGroupHandle $oDebtorGroupHandle, $strEAN, DebtorHandle $oDebtorHandle = null)
	{
		$oDebtorData	= new self($strVatZone, $bIsAccessible);
		$oDebtorData
			->setNumber($strNumber)
			->setName($strName)
			->setAddress($strAddress)
			->setPostalCode($strPostalCode)
			->setCity($strCity)
			->setCounty($strCounty)
			->setCountry($strCountry)
			->setCINumber($strCINumber)
			->setEmail($strEmail)
			->setTelephoneAndFaxNumber($strTelephoneAndFaxNumber)
			->setTermOfPaymentHandle($oTermOfPaymentHandle)
			->setCurrencyHandle($oCurrencyHandle)
			->setDebtorGroupHandle($oDebtorGroupHandle)
			->setEan($strEAN);
		# For Update only
		if ($oDebtorHandle !== null)
		{
			$oDebtorData->setHandle($oDebtorHandle);
		}

		return $oDebtorData;
	}

    /**
     * @return DebtorHandle
     */
    public function getHandle()
    {
      return $this->Handle;
    }

    /**
     * @param DebtorHandle $Handle
     * @return \Economic\DebtorData
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
     * @return \Economic\DebtorData
     */
    public function setNumber($Number)
    {
      $this->Number = $Number;
      return $this;
    }

    /**
     * @return DebtorGroupHandle
     */
    public function getDebtorGroupHandle()
    {
      return $this->DebtorGroupHandle;
    }

    /**
     * @param DebtorGroupHandle $DebtorGroupHandle
     * @return \Economic\DebtorData
     */
    public function setDebtorGroupHandle($DebtorGroupHandle)
    {
      $this->DebtorGroupHandle = $DebtorGroupHandle;
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
     * @return \Economic\DebtorData
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
     * @return \Economic\DebtorData
     */
    public function setVatZone($VatZone)
    {
      $this->VatZone = $VatZone;
      return $this;
    }

    /**
     * @return ExtendedVatZoneHandle
     */
    public function getExtendedVatZone()
    {
      return $this->ExtendedVatZone;
    }

    /**
     * @param ExtendedVatZoneHandle $ExtendedVatZone
     * @return \Economic\DebtorData
     */
    public function setExtendedVatZone($ExtendedVatZone)
    {
      $this->ExtendedVatZone = $ExtendedVatZone;
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
     * @return \Economic\DebtorData
     */
    public function setCurrencyHandle($CurrencyHandle)
    {
      $this->CurrencyHandle = $CurrencyHandle;
      return $this;
    }

    /**
     * @return PriceGroupHandle
     */
    public function getPriceGroupHandle()
    {
      return $this->PriceGroupHandle;
    }

    /**
     * @param PriceGroupHandle $PriceGroupHandle
     * @return \Economic\DebtorData
     */
    public function setPriceGroupHandle($PriceGroupHandle)
    {
      $this->PriceGroupHandle = $PriceGroupHandle;
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
     * @return \Economic\DebtorData
     */
    public function setIsAccessible($IsAccessible)
    {
      $this->IsAccessible = $IsAccessible;
      return $this;
    }

    /**
     * @return string
     */
    public function getEan()
    {
      return $this->Ean;
    }

    /**
     * @param string $Ean
     * @return \Economic\DebtorData
     */
    public function setEan($Ean)
    {
      $this->Ean = $Ean;
      return $this;
    }

    /**
     * @return string
     */
    public function getPublicEntryNumber()
    {
      return $this->PublicEntryNumber;
    }

    /**
     * @param string $PublicEntryNumber
     * @return \Economic\DebtorData
     */
    public function setPublicEntryNumber($PublicEntryNumber)
    {
      $this->PublicEntryNumber = $PublicEntryNumber;
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
     * @return \Economic\DebtorData
     */
    public function setEmail($Email)
    {
      $this->Email = $Email;
      return $this;
    }

    /**
     * @return string
     */
    public function getTelephoneAndFaxNumber()
    {
      return $this->TelephoneAndFaxNumber;
    }

    /**
     * @param string $TelephoneAndFaxNumber
     * @return \Economic\DebtorData
     */
    public function setTelephoneAndFaxNumber($TelephoneAndFaxNumber)
    {
      $this->TelephoneAndFaxNumber = $TelephoneAndFaxNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getWebsite()
    {
      return $this->Website;
    }

    /**
     * @param string $Website
     * @return \Economic\DebtorData
     */
    public function setWebsite($Website)
    {
      $this->Website = $Website;
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
     * @return \Economic\DebtorData
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
     * @return \Economic\DebtorData
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
     * @return \Economic\DebtorData
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
     * @return \Economic\DebtorData
     */
    public function setCountry($Country)
    {
      $this->Country = $Country;
      return $this;
    }

    /**
     * @return float
     */
    public function getCreditMaximum()
    {
      return $this->CreditMaximum;
    }

    /**
     * @param float $CreditMaximum
     * @return \Economic\DebtorData
     */
    public function setCreditMaximum($CreditMaximum)
    {
      $this->CreditMaximum = $CreditMaximum;
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
     * @return \Economic\DebtorData
     */
    public function setVatNumber($VatNumber)
    {
      $this->VatNumber = $VatNumber;
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
     * @return \Economic\DebtorData
     */
    public function setCounty($County)
    {
      $this->County = $County;
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
     * @return \Economic\DebtorData
     */
    public function setCINumber($CINumber)
    {
      $this->CINumber = $CINumber;
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
     * @return \Economic\DebtorData
     */
    public function setTermOfPaymentHandle($TermOfPaymentHandle)
    {
      $this->TermOfPaymentHandle = $TermOfPaymentHandle;
      return $this;
    }

    /**
     * @return TemplateCollectionHandle
     */
    public function getLayoutHandle()
    {
      return $this->LayoutHandle;
    }

    /**
     * @param TemplateCollectionHandle $LayoutHandle
     * @return \Economic\DebtorData
     */
    public function setLayoutHandle($LayoutHandle)
    {
      $this->LayoutHandle = $LayoutHandle;
      return $this;
    }

    /**
     * @return DebtorContactHandle
     */
    public function getAttentionHandle()
    {
      return $this->AttentionHandle;
    }

    /**
     * @param DebtorContactHandle $AttentionHandle
     * @return \Economic\DebtorData
     */
    public function setAttentionHandle($AttentionHandle)
    {
      $this->AttentionHandle = $AttentionHandle;
      return $this;
    }

    /**
     * @return DebtorContactHandle
     */
    public function getYourReferenceHandle()
    {
      return $this->YourReferenceHandle;
    }

    /**
     * @param DebtorContactHandle $YourReferenceHandle
     * @return \Economic\DebtorData
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
     * @return \Economic\DebtorData
     */
    public function setOurReferenceHandle($OurReferenceHandle)
    {
      $this->OurReferenceHandle = $OurReferenceHandle;
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
     * @return \Economic\DebtorData
     */
    public function setBalance($Balance)
    {
      $this->Balance = $Balance;
      return $this;
    }

    /**
     * @return DeliveryLocationHandle
     */
    public function getDefaultDeliveryLocationHandle()
    {
      return $this->DefaultDeliveryLocationHandle;
    }

    /**
     * @param DeliveryLocationHandle $DefaultDeliveryLocationHandle
     * @return \Economic\DebtorData
     */
    public function setDefaultDeliveryLocationHandle($DefaultDeliveryLocationHandle)
    {
      $this->DefaultDeliveryLocationHandle = $DefaultDeliveryLocationHandle;
      return $this;
    }

}
