<?php

namespace Economic;

class OrderLineData
{

    /**
     * @var OrderLineHandle $Handle
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
     * @var OrderHandle $OrderHandle
     */
    protected $OrderHandle = null;

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
     * @param int $Number
     * @param float $DiscountAsPercent
     * @param float $TotalMargin
     * @param float $MarginAsPercent
     */
    public function __construct($Number, $DiscountAsPercent, $TotalMargin, $MarginAsPercent)
    {
      $this->Number = $Number;
      $this->DiscountAsPercent = $DiscountAsPercent;
      $this->TotalMargin = $TotalMargin;
      $this->MarginAsPercent = $MarginAsPercent;
    }

    /**
     * @return OrderLineHandle
     */
    public function getHandle()
    {
      return $this->Handle;
    }

    /**
     * @param OrderLineHandle $Handle
     * @return \Economic\OrderLineData
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
     * @return \Economic\OrderLineData
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
     * @return \Economic\OrderLineData
     */
    public function setNumber($Number)
    {
      $this->Number = $Number;
      return $this;
    }

    /**
     * @return OrderHandle
     */
    public function getOrderHandle()
    {
      return $this->OrderHandle;
    }

    /**
     * @param OrderHandle $OrderHandle
     * @return \Economic\OrderLineData
     */
    public function setOrderHandle($OrderHandle)
    {
      $this->OrderHandle = $OrderHandle;
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
     * @return \Economic\OrderLineData
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
     * @return \Economic\OrderLineData
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
     * @return \Economic\OrderLineData
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
     * @return \Economic\OrderLineData
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
     * @return \Economic\OrderLineData
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
     * @return \Economic\OrderLineData
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
     * @return \Economic\OrderLineData
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
     * @return \Economic\OrderLineData
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
     * @return \Economic\OrderLineData
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
     * @return \Economic\OrderLineData
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
     * @return \Economic\OrderLineData
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
     * @return \Economic\OrderLineData
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
     * @return \Economic\OrderLineData
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
     * @return \Economic\OrderLineData
     */
    public function setInventoryLocationHandle($InventoryLocationHandle)
    {
      $this->InventoryLocationHandle = $InventoryLocationHandle;
      return $this;
    }

}
