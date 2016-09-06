<?php

namespace Economic;

class EmployeeData
{

    /**
     * @var EmployeeHandle $Handle
     */
    protected $Handle = null;

    /**
     * @var int $Number
     */
    protected $Number = null;

    /**
     * @var EmployeeGroupHandle $GroupHandle
     */
    protected $GroupHandle = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var float $CostPrice
     */
    protected $CostPrice = null;

    /**
     * @var float $SalesPrice
     */
    protected $SalesPrice = null;

    /**
     * @var float $CostPriceBefore
     */
    protected $CostPriceBefore = null;

    /**
     * @var float $SalesPriceBefore
     */
    protected $SalesPriceBefore = null;

    /**
     * @var float $CostPriceAfter
     */
    protected $CostPriceAfter = null;

    /**
     * @var float $SalesPriceAfter
     */
    protected $SalesPriceAfter = null;

    /**
     * @var \DateTime $CutoffDate
     */
    protected $CutoffDate = null;

    /**
     * @var EmployeeType $EmployeeType
     */
    protected $EmployeeType = null;

    /**
     * @param int $Number
     */
    public function __construct($Number)
    {
      $this->Number = $Number;
    }

    /**
     * @return EmployeeHandle
     */
    public function getHandle()
    {
      return $this->Handle;
    }

    /**
     * @param EmployeeHandle $Handle
     * @return \Economic\EmployeeData
     */
    public function setHandle($Handle)
    {
      $this->Handle = $Handle;
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
     * @return \Economic\EmployeeData
     */
    public function setNumber($Number)
    {
      $this->Number = $Number;
      return $this;
    }

    /**
     * @return EmployeeGroupHandle
     */
    public function getGroupHandle()
    {
      return $this->GroupHandle;
    }

    /**
     * @param EmployeeGroupHandle $GroupHandle
     * @return \Economic\EmployeeData
     */
    public function setGroupHandle($GroupHandle)
    {
      $this->GroupHandle = $GroupHandle;
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
     * @return \Economic\EmployeeData
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return float
     */
    public function getCostPrice()
    {
      return $this->CostPrice;
    }

    /**
     * @param float $CostPrice
     * @return \Economic\EmployeeData
     */
    public function setCostPrice($CostPrice)
    {
      $this->CostPrice = $CostPrice;
      return $this;
    }

    /**
     * @return float
     */
    public function getSalesPrice()
    {
      return $this->SalesPrice;
    }

    /**
     * @param float $SalesPrice
     * @return \Economic\EmployeeData
     */
    public function setSalesPrice($SalesPrice)
    {
      $this->SalesPrice = $SalesPrice;
      return $this;
    }

    /**
     * @return float
     */
    public function getCostPriceBefore()
    {
      return $this->CostPriceBefore;
    }

    /**
     * @param float $CostPriceBefore
     * @return \Economic\EmployeeData
     */
    public function setCostPriceBefore($CostPriceBefore)
    {
      $this->CostPriceBefore = $CostPriceBefore;
      return $this;
    }

    /**
     * @return float
     */
    public function getSalesPriceBefore()
    {
      return $this->SalesPriceBefore;
    }

    /**
     * @param float $SalesPriceBefore
     * @return \Economic\EmployeeData
     */
    public function setSalesPriceBefore($SalesPriceBefore)
    {
      $this->SalesPriceBefore = $SalesPriceBefore;
      return $this;
    }

    /**
     * @return float
     */
    public function getCostPriceAfter()
    {
      return $this->CostPriceAfter;
    }

    /**
     * @param float $CostPriceAfter
     * @return \Economic\EmployeeData
     */
    public function setCostPriceAfter($CostPriceAfter)
    {
      $this->CostPriceAfter = $CostPriceAfter;
      return $this;
    }

    /**
     * @return float
     */
    public function getSalesPriceAfter()
    {
      return $this->SalesPriceAfter;
    }

    /**
     * @param float $SalesPriceAfter
     * @return \Economic\EmployeeData
     */
    public function setSalesPriceAfter($SalesPriceAfter)
    {
      $this->SalesPriceAfter = $SalesPriceAfter;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCutoffDate()
    {
      if ($this->CutoffDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->CutoffDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $CutoffDate
     * @return \Economic\EmployeeData
     */
    public function setCutoffDate(\DateTime $CutoffDate = null)
    {
      if ($CutoffDate == null) {
       $this->CutoffDate = null;
      } else {
        $this->CutoffDate = $CutoffDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return EmployeeType
     */
    public function getEmployeeType()
    {
      return $this->EmployeeType;
    }

    /**
     * @param EmployeeType $EmployeeType
     * @return \Economic\EmployeeData
     */
    public function setEmployeeType($EmployeeType)
    {
      $this->EmployeeType = $EmployeeType;
      return $this;
    }

}
