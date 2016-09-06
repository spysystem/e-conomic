<?php

namespace Economic;

class InvoiceLineData
{

    /**
     * @var InvoiceLineHandle $Handle
     */
    protected $Handle = null;

    /**
     * @var int $Id
     */
    protected $Id = null;

    /**
     * @var int $Number
     */
    protected $Number = null;

    /**
     * @var InvoiceHandle $InvoiceHandle
     */
    protected $InvoiceHandle = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var \DateTime $DeliveryDate
     */
    protected $DeliveryDate = null;

    /**
     * @var UnitHandle $UnitHandle
     */
    protected $UnitHandle = null;

    /**
     * @var ProductHandle $ProductHandle
     */
    protected $ProductHandle = null;

    /**
     * @var float $Quantity
     */
    protected $Quantity = null;

    /**
     * @var float $UnitNetPrice
     */
    protected $UnitNetPrice = null;

    /**
     * @var float $DiscountAsPercent
     */
    protected $DiscountAsPercent = null;

    /**
     * @var float $UnitCostPrice
     */
    protected $UnitCostPrice = null;

    /**
     * @var float $VatRate
     */
    protected $VatRate = null;

    /**
     * @var float $VatAmount
     */
    protected $VatAmount = null;

    /**
     * @var float $TotalNetAmount
     */
    protected $TotalNetAmount = null;

    /**
     * @var DepartmentHandle $DepartmentHandle
     */
    protected $DepartmentHandle = null;

    /**
     * @var DistributionKeyHandle $DistributionKeyHandle
     */
    protected $DistributionKeyHandle = null;

    /**
     * @param int $Id
     * @param int $Number
     * @param float $Quantity
     * @param float $UnitNetPrice
     * @param float $DiscountAsPercent
     * @param float $UnitCostPrice
     * @param float $VatRate
     * @param float $VatAmount
     * @param float $TotalNetAmount
     */
    public function __construct($Id, $Number, $Quantity, $UnitNetPrice, $DiscountAsPercent, $UnitCostPrice, $VatRate, $VatAmount, $TotalNetAmount)
    {
      $this->Id = $Id;
      $this->Number = $Number;
      $this->Quantity = $Quantity;
      $this->UnitNetPrice = $UnitNetPrice;
      $this->DiscountAsPercent = $DiscountAsPercent;
      $this->UnitCostPrice = $UnitCostPrice;
      $this->VatRate = $VatRate;
      $this->VatAmount = $VatAmount;
      $this->TotalNetAmount = $TotalNetAmount;
    }

    /**
     * @return InvoiceLineHandle
     */
    public function getHandle()
    {
      return $this->Handle;
    }

    /**
     * @param InvoiceLineHandle $Handle
     * @return \Economic\InvoiceLineData
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
     * @return \Economic\InvoiceLineData
     */
    public function setId($Id)
    {
      $this->Id = $Id;
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
     * @return \Economic\InvoiceLineData
     */
    public function setNumber($Number)
    {
      $this->Number = $Number;
      return $this;
    }

    /**
     * @return InvoiceHandle
     */
    public function getInvoiceHandle()
    {
      return $this->InvoiceHandle;
    }

    /**
     * @param InvoiceHandle $InvoiceHandle
     * @return \Economic\InvoiceLineData
     */
    public function setInvoiceHandle($InvoiceHandle)
    {
      $this->InvoiceHandle = $InvoiceHandle;
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
     * @return \Economic\InvoiceLineData
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
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
     * @return \Economic\InvoiceLineData
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
     * @return UnitHandle
     */
    public function getUnitHandle()
    {
      return $this->UnitHandle;
    }

    /**
     * @param UnitHandle $UnitHandle
     * @return \Economic\InvoiceLineData
     */
    public function setUnitHandle($UnitHandle)
    {
      $this->UnitHandle = $UnitHandle;
      return $this;
    }

    /**
     * @return ProductHandle
     */
    public function getProductHandle()
    {
      return $this->ProductHandle;
    }

    /**
     * @param ProductHandle $ProductHandle
     * @return \Economic\InvoiceLineData
     */
    public function setProductHandle($ProductHandle)
    {
      $this->ProductHandle = $ProductHandle;
      return $this;
    }

    /**
     * @return float
     */
    public function getQuantity()
    {
      return $this->Quantity;
    }

    /**
     * @param float $Quantity
     * @return \Economic\InvoiceLineData
     */
    public function setQuantity($Quantity)
    {
      $this->Quantity = $Quantity;
      return $this;
    }

    /**
     * @return float
     */
    public function getUnitNetPrice()
    {
      return $this->UnitNetPrice;
    }

    /**
     * @param float $UnitNetPrice
     * @return \Economic\InvoiceLineData
     */
    public function setUnitNetPrice($UnitNetPrice)
    {
      $this->UnitNetPrice = $UnitNetPrice;
      return $this;
    }

    /**
     * @return float
     */
    public function getDiscountAsPercent()
    {
      return $this->DiscountAsPercent;
    }

    /**
     * @param float $DiscountAsPercent
     * @return \Economic\InvoiceLineData
     */
    public function setDiscountAsPercent($DiscountAsPercent)
    {
      $this->DiscountAsPercent = $DiscountAsPercent;
      return $this;
    }

    /**
     * @return float
     */
    public function getUnitCostPrice()
    {
      return $this->UnitCostPrice;
    }

    /**
     * @param float $UnitCostPrice
     * @return \Economic\InvoiceLineData
     */
    public function setUnitCostPrice($UnitCostPrice)
    {
      $this->UnitCostPrice = $UnitCostPrice;
      return $this;
    }

    /**
     * @return float
     */
    public function getVatRate()
    {
      return $this->VatRate;
    }

    /**
     * @param float $VatRate
     * @return \Economic\InvoiceLineData
     */
    public function setVatRate($VatRate)
    {
      $this->VatRate = $VatRate;
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
     * @return \Economic\InvoiceLineData
     */
    public function setVatAmount($VatAmount)
    {
      $this->VatAmount = $VatAmount;
      return $this;
    }

    /**
     * @return float
     */
    public function getTotalNetAmount()
    {
      return $this->TotalNetAmount;
    }

    /**
     * @param float $TotalNetAmount
     * @return \Economic\InvoiceLineData
     */
    public function setTotalNetAmount($TotalNetAmount)
    {
      $this->TotalNetAmount = $TotalNetAmount;
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
     * @return \Economic\InvoiceLineData
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
     * @return \Economic\InvoiceLineData
     */
    public function setDistributionKeyHandle($DistributionKeyHandle)
    {
      $this->DistributionKeyHandle = $DistributionKeyHandle;
      return $this;
    }

}
