<?php

namespace Economic;

class SubscriptionLineData
{

    /**
     * @var SubscriptionLineHandle $Handle
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
     * @var SubscriptionHandle $SubscriptionHandle
     */
    protected $SubscriptionHandle = null;

    /**
     * @var ProductHandle $ProductHandle
     */
    protected $ProductHandle = null;

    /**
     * @var float $Quantity
     */
    protected $Quantity = null;

    /**
     * @var DepartmentHandle $DepartmentHandle
     */
    protected $DepartmentHandle = null;

    /**
     * @var string $ProductName
     */
    protected $ProductName = null;

    /**
     * @var float $SpecialPrice
     */
    protected $SpecialPrice = null;

    /**
     * @param int $Id
     * @param int $Number
     */
    public function __construct($Id, $Number)
    {
      $this->Id = $Id;
      $this->Number = $Number;
    }

    /**
     * @return SubscriptionLineHandle
     */
    public function getHandle()
    {
      return $this->Handle;
    }

    /**
     * @param SubscriptionLineHandle $Handle
     * @return \Economic\SubscriptionLineData
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
     * @return \Economic\SubscriptionLineData
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
     * @return \Economic\SubscriptionLineData
     */
    public function setNumber($Number)
    {
      $this->Number = $Number;
      return $this;
    }

    /**
     * @return SubscriptionHandle
     */
    public function getSubscriptionHandle()
    {
      return $this->SubscriptionHandle;
    }

    /**
     * @param SubscriptionHandle $SubscriptionHandle
     * @return \Economic\SubscriptionLineData
     */
    public function setSubscriptionHandle($SubscriptionHandle)
    {
      $this->SubscriptionHandle = $SubscriptionHandle;
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
     * @return \Economic\SubscriptionLineData
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
     * @return \Economic\SubscriptionLineData
     */
    public function setQuantity($Quantity)
    {
      $this->Quantity = $Quantity;
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
     * @return \Economic\SubscriptionLineData
     */
    public function setDepartmentHandle($DepartmentHandle)
    {
      $this->DepartmentHandle = $DepartmentHandle;
      return $this;
    }

    /**
     * @return string
     */
    public function getProductName()
    {
      return $this->ProductName;
    }

    /**
     * @param string $ProductName
     * @return \Economic\SubscriptionLineData
     */
    public function setProductName($ProductName)
    {
      $this->ProductName = $ProductName;
      return $this;
    }

    /**
     * @return float
     */
    public function getSpecialPrice()
    {
      return $this->SpecialPrice;
    }

    /**
     * @param float $SpecialPrice
     * @return \Economic\SubscriptionLineData
     */
    public function setSpecialPrice($SpecialPrice)
    {
      $this->SpecialPrice = $SpecialPrice;
      return $this;
    }

}
