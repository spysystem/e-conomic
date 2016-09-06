<?php

namespace Economic;

class QuotationData
{

    /**
     * @var QuotationHandle $Handle
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
     * @var string $DebtorName
     */
    protected $DebtorName = null;

    /**
     * @var string $DebtorAddress
     */
    protected $DebtorAddress = null;

    /**
     * @var string $DebtorPostalCode
     */
    protected $DebtorPostalCode = null;

    /**
     * @var string $DebtorCity
     */
    protected $DebtorCity = null;

    /**
     * @var string $DebtorCountry
     */
    protected $DebtorCountry = null;

    /**
     * @var string $DebtorEan
     */
    protected $DebtorEan = null;

    /**
     * @var string $PublicEntryNumber
     */
    protected $PublicEntryNumber = null;

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
     * @var EmployeeHandle $OurReference2Handle
     */
    protected $OurReference2Handle = null;

    /**
     * @var \DateTime $Date
     */
    protected $Date = null;

    /**
     * @var TermOfPaymentHandle $TermOfPaymentHandle
     */
    protected $TermOfPaymentHandle = null;

    /**
     * @var \DateTime $DueDate
     */
    protected $DueDate = null;

    /**
     * @var CurrencyHandle $CurrencyHandle
     */
    protected $CurrencyHandle = null;

    /**
     * @var float $ExchangeRate
     */
    protected $ExchangeRate = null;

    /**
     * @var boolean $IsVatIncluded
     */
    protected $IsVatIncluded = null;

    /**
     * @var TemplateCollectionHandle $LayoutHandle
     */
    protected $LayoutHandle = null;

    /**
     * @var DeliveryLocationHandle $DeliveryLocationHandle
     */
    protected $DeliveryLocationHandle = null;

    /**
     * @var string $DeliveryAddress
     */
    protected $DeliveryAddress = null;

    /**
     * @var string $DeliveryPostalCode
     */
    protected $DeliveryPostalCode = null;

    /**
     * @var string $DeliveryCity
     */
    protected $DeliveryCity = null;

    /**
     * @var string $DeliveryCountry
     */
    protected $DeliveryCountry = null;

    /**
     * @var string $TermsOfDelivery
     */
    protected $TermsOfDelivery = null;

    /**
     * @var \DateTime $DeliveryDate
     */
    protected $DeliveryDate = null;

    /**
     * @var string $Heading
     */
    protected $Heading = null;

    /**
     * @var string $TextLine1
     */
    protected $TextLine1 = null;

    /**
     * @var string $TextLine2
     */
    protected $TextLine2 = null;

    /**
     * @var string $OtherReference
     */
    protected $OtherReference = null;

    /**
     * @var boolean $IsArchived
     */
    protected $IsArchived = null;

    /**
     * @var boolean $IsSent
     */
    protected $IsSent = null;

    /**
     * @var float $NetAmount
     */
    protected $NetAmount = null;

    /**
     * @var float $VatAmount
     */
    protected $VatAmount = null;

    /**
     * @var float $GrossAmount
     */
    protected $GrossAmount = null;

    /**
     * @var float $Margin
     */
    protected $Margin = null;

    /**
     * @var float $MarginAsPercent
     */
    protected $MarginAsPercent = null;

    /**
     * @var float $RoundingAmount
     */
    protected $RoundingAmount = null;

    /**
     * @var string $DebtorCounty
     */
    protected $DebtorCounty = null;

    /**
     * @var string $DeliveryCounty
     */
    protected $DeliveryCounty = null;

    /**
     * @var ExtendedVatZoneHandle $VatZone
     */
    protected $VatZone = null;

    /**
     * @param int $Id
     * @param int $Number
     * @param \DateTime $Date
     * @param float $ExchangeRate
     * @param boolean $IsVatIncluded
     * @param boolean $IsArchived
     * @param boolean $IsSent
     * @param float $NetAmount
     * @param float $VatAmount
     * @param float $GrossAmount
     * @param float $Margin
     * @param float $MarginAsPercent
     * @param float $RoundingAmount
     */
    public function __construct($Id, $Number, \DateTime $Date, $ExchangeRate, $IsVatIncluded, $IsArchived, $IsSent, $NetAmount, $VatAmount, $GrossAmount, $Margin, $MarginAsPercent, $RoundingAmount)
    {
      $this->Id = $Id;
      $this->Number = $Number;
      $this->Date = $Date->format(\DateTime::ATOM);
      $this->ExchangeRate = $ExchangeRate;
      $this->IsVatIncluded = $IsVatIncluded;
      $this->IsArchived = $IsArchived;
      $this->IsSent = $IsSent;
      $this->NetAmount = $NetAmount;
      $this->VatAmount = $VatAmount;
      $this->GrossAmount = $GrossAmount;
      $this->Margin = $Margin;
      $this->MarginAsPercent = $MarginAsPercent;
      $this->RoundingAmount = $RoundingAmount;
    }

    /**
     * @return QuotationHandle
     */
    public function getHandle()
    {
      return $this->Handle;
    }

    /**
     * @param QuotationHandle $Handle
     * @return \Economic\QuotationData
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
     * @return \Economic\QuotationData
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
     * @return \Economic\QuotationData
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
     * @return \Economic\QuotationData
     */
    public function setNumber($Number)
    {
      $this->Number = $Number;
      return $this;
    }

    /**
     * @return string
     */
    public function getDebtorName()
    {
      return $this->DebtorName;
    }

    /**
     * @param string $DebtorName
     * @return \Economic\QuotationData
     */
    public function setDebtorName($DebtorName)
    {
      $this->DebtorName = $DebtorName;
      return $this;
    }

    /**
     * @return string
     */
    public function getDebtorAddress()
    {
      return $this->DebtorAddress;
    }

    /**
     * @param string $DebtorAddress
     * @return \Economic\QuotationData
     */
    public function setDebtorAddress($DebtorAddress)
    {
      $this->DebtorAddress = $DebtorAddress;
      return $this;
    }

    /**
     * @return string
     */
    public function getDebtorPostalCode()
    {
      return $this->DebtorPostalCode;
    }

    /**
     * @param string $DebtorPostalCode
     * @return \Economic\QuotationData
     */
    public function setDebtorPostalCode($DebtorPostalCode)
    {
      $this->DebtorPostalCode = $DebtorPostalCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getDebtorCity()
    {
      return $this->DebtorCity;
    }

    /**
     * @param string $DebtorCity
     * @return \Economic\QuotationData
     */
    public function setDebtorCity($DebtorCity)
    {
      $this->DebtorCity = $DebtorCity;
      return $this;
    }

    /**
     * @return string
     */
    public function getDebtorCountry()
    {
      return $this->DebtorCountry;
    }

    /**
     * @param string $DebtorCountry
     * @return \Economic\QuotationData
     */
    public function setDebtorCountry($DebtorCountry)
    {
      $this->DebtorCountry = $DebtorCountry;
      return $this;
    }

    /**
     * @return string
     */
    public function getDebtorEan()
    {
      return $this->DebtorEan;
    }

    /**
     * @param string $DebtorEan
     * @return \Economic\QuotationData
     */
    public function setDebtorEan($DebtorEan)
    {
      $this->DebtorEan = $DebtorEan;
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
     * @return \Economic\QuotationData
     */
    public function setPublicEntryNumber($PublicEntryNumber)
    {
      $this->PublicEntryNumber = $PublicEntryNumber;
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
     * @return \Economic\QuotationData
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
     * @return \Economic\QuotationData
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
     * @return \Economic\QuotationData
     */
    public function setOurReferenceHandle($OurReferenceHandle)
    {
      $this->OurReferenceHandle = $OurReferenceHandle;
      return $this;
    }

    /**
     * @return EmployeeHandle
     */
    public function getOurReference2Handle()
    {
      return $this->OurReference2Handle;
    }

    /**
     * @param EmployeeHandle $OurReference2Handle
     * @return \Economic\QuotationData
     */
    public function setOurReference2Handle($OurReference2Handle)
    {
      $this->OurReference2Handle = $OurReference2Handle;
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
     * @return \Economic\QuotationData
     */
    public function setDate(\DateTime $Date)
    {
      $this->Date = $Date->format(\DateTime::ATOM);
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
     * @return \Economic\QuotationData
     */
    public function setTermOfPaymentHandle($TermOfPaymentHandle)
    {
      $this->TermOfPaymentHandle = $TermOfPaymentHandle;
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
     * @return \Economic\QuotationData
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
     * @return CurrencyHandle
     */
    public function getCurrencyHandle()
    {
      return $this->CurrencyHandle;
    }

    /**
     * @param CurrencyHandle $CurrencyHandle
     * @return \Economic\QuotationData
     */
    public function setCurrencyHandle($CurrencyHandle)
    {
      $this->CurrencyHandle = $CurrencyHandle;
      return $this;
    }

    /**
     * @return float
     */
    public function getExchangeRate()
    {
      return $this->ExchangeRate;
    }

    /**
     * @param float $ExchangeRate
     * @return \Economic\QuotationData
     */
    public function setExchangeRate($ExchangeRate)
    {
      $this->ExchangeRate = $ExchangeRate;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsVatIncluded()
    {
      return $this->IsVatIncluded;
    }

    /**
     * @param boolean $IsVatIncluded
     * @return \Economic\QuotationData
     */
    public function setIsVatIncluded($IsVatIncluded)
    {
      $this->IsVatIncluded = $IsVatIncluded;
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
     * @return \Economic\QuotationData
     */
    public function setLayoutHandle($LayoutHandle)
    {
      $this->LayoutHandle = $LayoutHandle;
      return $this;
    }

    /**
     * @return DeliveryLocationHandle
     */
    public function getDeliveryLocationHandle()
    {
      return $this->DeliveryLocationHandle;
    }

    /**
     * @param DeliveryLocationHandle $DeliveryLocationHandle
     * @return \Economic\QuotationData
     */
    public function setDeliveryLocationHandle($DeliveryLocationHandle)
    {
      $this->DeliveryLocationHandle = $DeliveryLocationHandle;
      return $this;
    }

    /**
     * @return string
     */
    public function getDeliveryAddress()
    {
      return $this->DeliveryAddress;
    }

    /**
     * @param string $DeliveryAddress
     * @return \Economic\QuotationData
     */
    public function setDeliveryAddress($DeliveryAddress)
    {
      $this->DeliveryAddress = $DeliveryAddress;
      return $this;
    }

    /**
     * @return string
     */
    public function getDeliveryPostalCode()
    {
      return $this->DeliveryPostalCode;
    }

    /**
     * @param string $DeliveryPostalCode
     * @return \Economic\QuotationData
     */
    public function setDeliveryPostalCode($DeliveryPostalCode)
    {
      $this->DeliveryPostalCode = $DeliveryPostalCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getDeliveryCity()
    {
      return $this->DeliveryCity;
    }

    /**
     * @param string $DeliveryCity
     * @return \Economic\QuotationData
     */
    public function setDeliveryCity($DeliveryCity)
    {
      $this->DeliveryCity = $DeliveryCity;
      return $this;
    }

    /**
     * @return string
     */
    public function getDeliveryCountry()
    {
      return $this->DeliveryCountry;
    }

    /**
     * @param string $DeliveryCountry
     * @return \Economic\QuotationData
     */
    public function setDeliveryCountry($DeliveryCountry)
    {
      $this->DeliveryCountry = $DeliveryCountry;
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
     * @return \Economic\QuotationData
     */
    public function setTermsOfDelivery($TermsOfDelivery)
    {
      $this->TermsOfDelivery = $TermsOfDelivery;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDeliveryDate()
    {
      if ($this->DeliveryDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->DeliveryDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $DeliveryDate
     * @return \Economic\QuotationData
     */
    public function setDeliveryDate(\DateTime $DeliveryDate = null)
    {
      if ($DeliveryDate == null) {
       $this->DeliveryDate = null;
      } else {
        $this->DeliveryDate = $DeliveryDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return string
     */
    public function getHeading()
    {
      return $this->Heading;
    }

    /**
     * @param string $Heading
     * @return \Economic\QuotationData
     */
    public function setHeading($Heading)
    {
      $this->Heading = $Heading;
      return $this;
    }

    /**
     * @return string
     */
    public function getTextLine1()
    {
      return $this->TextLine1;
    }

    /**
     * @param string $TextLine1
     * @return \Economic\QuotationData
     */
    public function setTextLine1($TextLine1)
    {
      $this->TextLine1 = $TextLine1;
      return $this;
    }

    /**
     * @return string
     */
    public function getTextLine2()
    {
      return $this->TextLine2;
    }

    /**
     * @param string $TextLine2
     * @return \Economic\QuotationData
     */
    public function setTextLine2($TextLine2)
    {
      $this->TextLine2 = $TextLine2;
      return $this;
    }

    /**
     * @return string
     */
    public function getOtherReference()
    {
      return $this->OtherReference;
    }

    /**
     * @param string $OtherReference
     * @return \Economic\QuotationData
     */
    public function setOtherReference($OtherReference)
    {
      $this->OtherReference = $OtherReference;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsArchived()
    {
      return $this->IsArchived;
    }

    /**
     * @param boolean $IsArchived
     * @return \Economic\QuotationData
     */
    public function setIsArchived($IsArchived)
    {
      $this->IsArchived = $IsArchived;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsSent()
    {
      return $this->IsSent;
    }

    /**
     * @param boolean $IsSent
     * @return \Economic\QuotationData
     */
    public function setIsSent($IsSent)
    {
      $this->IsSent = $IsSent;
      return $this;
    }

    /**
     * @return float
     */
    public function getNetAmount()
    {
      return $this->NetAmount;
    }

    /**
     * @param float $NetAmount
     * @return \Economic\QuotationData
     */
    public function setNetAmount($NetAmount)
    {
      $this->NetAmount = $NetAmount;
      return $this;
    }

    /**
     * @return float
     */
    public function getVatAmount()
    {
      return $this->VatAmount;
    }

    /**
     * @param float $VatAmount
     * @return \Economic\QuotationData
     */
    public function setVatAmount($VatAmount)
    {
      $this->VatAmount = $VatAmount;
      return $this;
    }

    /**
     * @return float
     */
    public function getGrossAmount()
    {
      return $this->GrossAmount;
    }

    /**
     * @param float $GrossAmount
     * @return \Economic\QuotationData
     */
    public function setGrossAmount($GrossAmount)
    {
      $this->GrossAmount = $GrossAmount;
      return $this;
    }

    /**
     * @return float
     */
    public function getMargin()
    {
      return $this->Margin;
    }

    /**
     * @param float $Margin
     * @return \Economic\QuotationData
     */
    public function setMargin($Margin)
    {
      $this->Margin = $Margin;
      return $this;
    }

    /**
     * @return float
     */
    public function getMarginAsPercent()
    {
      return $this->MarginAsPercent;
    }

    /**
     * @param float $MarginAsPercent
     * @return \Economic\QuotationData
     */
    public function setMarginAsPercent($MarginAsPercent)
    {
      $this->MarginAsPercent = $MarginAsPercent;
      return $this;
    }

    /**
     * @return float
     */
    public function getRoundingAmount()
    {
      return $this->RoundingAmount;
    }

    /**
     * @param float $RoundingAmount
     * @return \Economic\QuotationData
     */
    public function setRoundingAmount($RoundingAmount)
    {
      $this->RoundingAmount = $RoundingAmount;
      return $this;
    }

    /**
     * @return string
     */
    public function getDebtorCounty()
    {
      return $this->DebtorCounty;
    }

    /**
     * @param string $DebtorCounty
     * @return \Economic\QuotationData
     */
    public function setDebtorCounty($DebtorCounty)
    {
      $this->DebtorCounty = $DebtorCounty;
      return $this;
    }

    /**
     * @return string
     */
    public function getDeliveryCounty()
    {
      return $this->DeliveryCounty;
    }

    /**
     * @param string $DeliveryCounty
     * @return \Economic\QuotationData
     */
    public function setDeliveryCounty($DeliveryCounty)
    {
      $this->DeliveryCounty = $DeliveryCounty;
      return $this;
    }

    /**
     * @return ExtendedVatZoneHandle
     */
    public function getVatZone()
    {
      return $this->VatZone;
    }

    /**
     * @param ExtendedVatZoneHandle $VatZone
     * @return \Economic\QuotationData
     */
    public function setVatZone($VatZone)
    {
      $this->VatZone = $VatZone;
      return $this;
    }

}
