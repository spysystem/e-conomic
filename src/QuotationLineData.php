<?php

namespace Economic;

class QuotationLineData
{

    /**
     * @var QuotationLineHandle $Handle
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
     * @var QuotationHandle $QuotationHandle
     */
    protected $QuotationHandle = null;

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
     * @var float $TotalNetAmount
     */
    protected $TotalNetAmount = null;

    /**
     * @var float $TotalMargin
     */
    protected $TotalMargin = null;

    /**
     * @var float $MarginAsPercent
     */
    protected $MarginAsPercent = null;

    /**
     * @var DepartmentHandle $DepartmentHandle
     */
    protected $DepartmentHandle = null;

    /**
     * @var DistributionKeyHandle $DistributionKeyHandle
     */
    protected $DistributionKeyHandle = null;

    /**
     * @var InventoryLocationHandle $InventoryLocationHandle
     */
    protected $InventoryLocationHandle = null;

    /**
     * @param int $Id
     * @param int $Number
     * @param float $DiscountAsPercent
     * @param float $TotalMargin
     * @param float $MarginAsPercent
     */
    public function __construct($Id, $Number, $DiscountAsPercent, $TotalMargin, $MarginAsPercent)
    {
      $this->Id = $Id;
      $this->Number = $Number;
      $this->DiscountAsPercent = $DiscountAsPercent;
      $this->TotalMargin = $TotalMargin;
      $this->MarginAsPercent = $MarginAsPercent;
    }

    /**
     * @return QuotationLineHandle
     */
    public function getHandle()
    {
      return $this->Handle;
    }

    /**
     * @param QuotationLineHandle $Handle
     * @return \Economic\QuotationLineData
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
     * @return \Economic\QuotationLineData
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
     * @return \Economic\QuotationLineData
     */
    public function setNumber($Number)
    {
      $this->Number = $Number;
      return $this;
    }

    /**
     * @return QuotationHandle
     */
    public function getQuotationHandle()
    {
      return $this->QuotationHandle;
    }

    /**
     * @param QuotationHandle $QuotationHandle
     * @return \Economic\QuotationLineData
     */
    public function setQuotationHandle($QuotationHandle)
    {
      $this->QuotationHandle = $QuotationHandle;
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
     * @return \Economic\QuotationLineData
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
     * @return \Economic\QuotationLineData
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
     * @return \Economic\QuotationLineData
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
     * @return \Economic\QuotationLineData
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
     * @return \Economic\QuotationLineData
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
     * @return \Economic\QuotationLineData
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
     * @return \Economic\QuotationLineData
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
     * @return \Economic\QuotationLineData
     */
    public function setUnitCostPrice($UnitCostPrice)
    {
      $this->UnitCostPrice = $UnitCostPrice;
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
     * @return \Economic\QuotationLineData
     */
    public function setTotalNetAmount($TotalNetAmount)
    {
      $this->TotalNetAmount = $TotalNetAmount;
      return $this;
    }

    /**
     * @return float
     */
    public function getTotalMargin()
    {
      return $this->TotalMargin;
    }

    /**
     * @param float $TotalMargin
     * @return \Economic\QuotationLineData
     */
    public function setTotalMargin($TotalMargin)
    {
      $this->TotalMargin = $TotalMargin;
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
     * @return \Economic\QuotationLineData
     */
    public function setMarginAsPercent($MarginAsPercent)
    {
      $this->MarginAsPercent = $MarginAsPercent;
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
     * @return \Economic\QuotationLineData
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
     * @return \Economic\QuotationLineData
     */
    public function setDistributionKeyHandle($DistributionKeyHandle)
    {
      $this->DistributionKeyHandle = $DistributionKeyHandle;
      return $this;
    }

    /**
     * @return InventoryLocationHandle
     */
    public function getInventoryLocationHandle()
    {
      return $this->InventoryLocationHandle;
    }

    /**
     * @param InventoryLocationHandle $InventoryLocationHandle
     * @return \Economic\QuotationLineData
     */
    public function setInventoryLocationHandle($InventoryLocationHandle)
    {
      $this->InventoryLocationHandle = $InventoryLocationHandle;
      return $this;
    }

}
