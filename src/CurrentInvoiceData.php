<?php

namespace Economic;

class CurrentInvoiceData
{

    /**
     * @var CurrentInvoiceHandle $Handle
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
     * @var ProjectHandle $ProjectHandle
     */
    protected $ProjectHandle = null;

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
     * @var float $DeductionAmount
     */
    protected $DeductionAmount = null;

    /**
     * @var ExtendedVatZoneHandle $VatZone
     */
    protected $VatZone = null;

    /**
     * @param \DateTime $Date
     * @param float $ExchangeRate
     * @param boolean $IsVatIncluded
     * @param float $NetAmount
     * @param float $VatAmount
     * @param float $GrossAmount
     * @param float $Margin
     * @param float $MarginAsPercent
     */
    public function __construct(\DateTime $Date, $ExchangeRate, $IsVatIncluded, $NetAmount, $VatAmount, $GrossAmount, $Margin, $MarginAsPercent)
    {
      $this->Date = $Date->format(\DateTime::ATOM);
      $this->ExchangeRate = $ExchangeRate;
      $this->IsVatIncluded = $IsVatIncluded;
      $this->NetAmount = $NetAmount;
      $this->VatAmount = $VatAmount;
      $this->GrossAmount = $GrossAmount;
      $this->Margin = $Margin;
      $this->MarginAsPercent = $MarginAsPercent;
    }

    /**
     * @return CurrentInvoiceHandle
     */
    public function getHandle()
    {
      return $this->Handle;
    }

    /**
     * @param CurrentInvoiceHandle $Handle
     * @return \Economic\CurrentInvoiceData
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
     * @return \Economic\CurrentInvoiceData
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
     * @return \Economic\CurrentInvoiceData
     */
    public function setDebtorHandle($DebtorHandle)
    {
      $this->DebtorHandle = $DebtorHandle;
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
     * @return \Economic\CurrentInvoiceData
     */
    public function setProjectHandle($ProjectHandle)
    {
      $this->ProjectHandle = $ProjectHandle;
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
     * @return \Economic\CurrentInvoiceData
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
     * @return \Economic\CurrentInvoiceData
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
     * @return \Economic\CurrentInvoiceData
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
     * @return \Economic\CurrentInvoiceData
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
     * @return \Economic\CurrentInvoiceData
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
     * @return \Economic\CurrentInvoiceData
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
     * @return \Economic\CurrentInvoiceData
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
     * @return \Economic\CurrentInvoiceData
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
     * @return \Economic\CurrentInvoiceData
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
     * @return \Economic\CurrentInvoiceData
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
     * @return \Economic\CurrentInvoiceData
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
     * @return \Economic\CurrentInvoiceData
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
     * @return \Economic\CurrentInvoiceData
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
     * @return \Economic\CurrentInvoiceData
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
     * @return \Economic\CurrentInvoiceData
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
     * @return \Economic\CurrentInvoiceData
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
     * @return \Economic\CurrentInvoiceData
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
     * @return \Economic\CurrentInvoiceData
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
     * @return \Economic\CurrentInvoiceData
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
     * @return \Economic\CurrentInvoiceData
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
     * @return \Economic\CurrentInvoiceData
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
     * @return \Economic\CurrentInvoiceData
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
     * @return \Economic\CurrentInvoiceData
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
     * @return \Economic\CurrentInvoiceData
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
     * @return \Economic\CurrentInvoiceData
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
     * @return \Economic\CurrentInvoiceData
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
     * @return \Economic\CurrentInvoiceData
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
     * @return \Economic\CurrentInvoiceData
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
     * @return \Economic\CurrentInvoiceData
     */
    public function setOtherReference($OtherReference)
    {
      $this->OtherReference = $OtherReference;
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
     * @return \Economic\CurrentInvoiceData
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
     * @return \Economic\CurrentInvoiceData
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
     * @return \Economic\CurrentInvoiceData
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
     * @return \Economic\CurrentInvoiceData
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
     * @return \Economic\CurrentInvoiceData
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
     * @return \Economic\CurrentInvoiceData
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
     * @return \Economic\CurrentInvoiceData
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
     * @return \Economic\CurrentInvoiceData
     */
    public function setDeliveryCounty($DeliveryCounty)
    {
      $this->DeliveryCounty = $DeliveryCounty;
      return $this;
    }

    /**
     * @return float
     */
    public function getDeductionAmount()
    {
      return $this->DeductionAmount;
    }

    /**
     * @param float $DeductionAmount
     * @return \Economic\CurrentInvoiceData
     */
    public function setDeductionAmount($DeductionAmount)
    {
      $this->DeductionAmount = $DeductionAmount;
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
     * @return \Economic\CurrentInvoiceData
     */
    public function setVatZone($VatZone)
    {
      $this->VatZone = $VatZone;
      return $this;
    }

}
