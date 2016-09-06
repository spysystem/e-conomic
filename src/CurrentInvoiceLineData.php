<?php

namespace Economic;

class CurrentInvoiceLineData
{

    /**
     * @var CurrentInvoiceLineHandle $Handle
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
     * @var CurrentInvoiceHandle $InvoiceHandle
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
     * @var \DateTime $AccrualStartDate
     */
    protected $AccrualStartDate = null;

    /**
     * @var \DateTime $AccrualEndDate
     */
    protected $AccrualEndDate = null;

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
     * @return CurrentInvoiceLineHandle
     */
    public function getHandle()
    {
      return $this->Handle;
    }

    /**
     * @param CurrentInvoiceLineHandle $Handle
     * @return \Economic\CurrentInvoiceLineData
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
     * @return \Economic\CurrentInvoiceLineData
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
     * @return \Economic\CurrentInvoiceLineData
     */
    public function setNumber($Number)
    {
      $this->Number = $Number;
      return $this;
    }

    /**
     * @return CurrentInvoiceHandle
     */
    public function getInvoiceHandle()
    {
      return $this->InvoiceHandle;
    }

    /**
     * @param CurrentInvoiceHandle $InvoiceHandle
     * @return \Economic\CurrentInvoiceLineData
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
     * @return \Economic\CurrentInvoiceLineData
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
     * @return \Economic\CurrentInvoiceLineData
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
     * @return \Economic\CurrentInvoiceLineData
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
     * @return \Economic\CurrentInvoiceLineData
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
     * @return \Economic\CurrentInvoiceLineData
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
     * @return \Economic\CurrentInvoiceLineData
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
     * @return \Economic\CurrentInvoiceLineData
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
     * @return \Economic\CurrentInvoiceLineData
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
     * @return \Economic\CurrentInvoiceLineData
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
     * @return \Economic\CurrentInvoiceLineData
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
     * @return \Economic\CurrentInvoiceLineData
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
     * @return \Economic\CurrentInvoiceLineData
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
     * @return \Economic\CurrentInvoiceLineData
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
     * @return \Economic\CurrentInvoiceLineData
     */
    public function setInventoryLocationHandle($InventoryLocationHandle)
    {
      $this->InventoryLocationHandle = $InventoryLocationHandle;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getAccrualStartDate()
    {
      if ($this->AccrualStartDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->AccrualStartDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $AccrualStartDate
     * @return \Economic\CurrentInvoiceLineData
     */
    public function setAccrualStartDate(\DateTime $AccrualStartDate = null)
    {
      if ($AccrualStartDate == null) {
       $this->AccrualStartDate = null;
      } else {
        $this->AccrualStartDate = $AccrualStartDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getAccrualEndDate()
    {
      if ($this->AccrualEndDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->AccrualEndDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $AccrualEndDate
     * @return \Economic\CurrentInvoiceLineData
     */
    public function setAccrualEndDate(\DateTime $AccrualEndDate = null)
    {
      if ($AccrualEndDate == null) {
       $this->AccrualEndDate = null;
      } else {
        $this->AccrualEndDate = $AccrualEndDate->format(\DateTime::ATOM);
      }
      return $this;
    }

}
