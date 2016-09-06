<?php

namespace Economic;

class ProductData
{

    /**
     * @var ProductHandle $Handle
     */
    protected $Handle = null;

    /**
     * @var string $Number
     */
    protected $Number = null;

    /**
     * @var ProductGroupHandle $ProductGroupHandle
     */
    protected $ProductGroupHandle = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var string $BarCode
     */
    protected $BarCode = null;

    /**
     * @var float $SalesPrice
     */
    protected $SalesPrice = null;

    /**
     * @var float $CostPrice
     */
    protected $CostPrice = null;

    /**
     * @var float $RecommendedPrice
     */
    protected $RecommendedPrice = null;

    /**
     * @var UnitHandle $UnitHandle
     */
    protected $UnitHandle = null;

    /**
     * @var boolean $IsAccessible
     */
    protected $IsAccessible = null;

    /**
     * @var float $Volume
     */
    protected $Volume = null;

    /**
     * @var DepartmentHandle $DepartmentHandle
     */
    protected $DepartmentHandle = null;

    /**
     * @var DistributionKeyHandle $DistributionKeyHandle
     */
    protected $DistributionKeyHandle = null;

    /**
     * @var float $InStock
     */
    protected $InStock = null;

    /**
     * @var float $OnOrder
     */
    protected $OnOrder = null;

    /**
     * @var float $Ordered
     */
    protected $Ordered = null;

    /**
     * @var float $Available
     */
    protected $Available = null;

    /**
     * @var \DateTime $LastUpdated
     */
    protected $LastUpdated = null;

    /**
     * @param float $SalesPrice
     * @param float $CostPrice
     * @param float $RecommendedPrice
     * @param boolean $IsAccessible
     * @param float $Volume
     */
    public function __construct($SalesPrice, $CostPrice, $RecommendedPrice, $IsAccessible, $Volume)
    {
      $this->SalesPrice = $SalesPrice;
      $this->CostPrice = $CostPrice;
      $this->RecommendedPrice = $RecommendedPrice;
      $this->IsAccessible = $IsAccessible;
      $this->Volume = $Volume;
    }

    /**
     * @return ProductHandle
     */
    public function getHandle()
    {
      return $this->Handle;
    }

    /**
     * @param ProductHandle $Handle
     * @return \Economic\ProductData
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
     * @return \Economic\ProductData
     */
    public function setNumber($Number)
    {
      $this->Number = $Number;
      return $this;
    }

    /**
     * @return ProductGroupHandle
     */
    public function getProductGroupHandle()
    {
      return $this->ProductGroupHandle;
    }

    /**
     * @param ProductGroupHandle $ProductGroupHandle
     * @return \Economic\ProductData
     */
    public function setProductGroupHandle($ProductGroupHandle)
    {
      $this->ProductGroupHandle = $ProductGroupHandle;
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
     * @return \Economic\ProductData
     */
    public function setName($Name)
    {
      $this->Name = $Name;
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
     * @return \Economic\ProductData
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return string
     */
    public function getBarCode()
    {
      return $this->BarCode;
    }

    /**
     * @param string $BarCode
     * @return \Economic\ProductData
     */
    public function setBarCode($BarCode)
    {
      $this->BarCode = $BarCode;
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
     * @return \Economic\ProductData
     */
    public function setSalesPrice($SalesPrice)
    {
      $this->SalesPrice = $SalesPrice;
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
     * @return \Economic\ProductData
     */
    public function setCostPrice($CostPrice)
    {
      $this->CostPrice = $CostPrice;
      return $this;
    }

    /**
     * @return float
     */
    public function getRecommendedPrice()
    {
      return $this->RecommendedPrice;
    }

    /**
     * @param float $RecommendedPrice
     * @return \Economic\ProductData
     */
    public function setRecommendedPrice($RecommendedPrice)
    {
      $this->RecommendedPrice = $RecommendedPrice;
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
     * @return \Economic\ProductData
     */
    public function setUnitHandle($UnitHandle)
    {
      $this->UnitHandle = $UnitHandle;
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
     * @return \Economic\ProductData
     */
    public function setIsAccessible($IsAccessible)
    {
      $this->IsAccessible = $IsAccessible;
      return $this;
    }

    /**
     * @return float
     */
    public function getVolume()
    {
      return $this->Volume;
    }

    /**
     * @param float $Volume
     * @return \Economic\ProductData
     */
    public function setVolume($Volume)
    {
      $this->Volume = $Volume;
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
     * @return \Economic\ProductData
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
     * @return \Economic\ProductData
     */
    public function setDistributionKeyHandle($DistributionKeyHandle)
    {
      $this->DistributionKeyHandle = $DistributionKeyHandle;
      return $this;
    }

    /**
     * @return float
     */
    public function getInStock()
    {
      return $this->InStock;
    }

    /**
     * @param float $InStock
     * @return \Economic\ProductData
     */
    public function setInStock($InStock)
    {
      $this->InStock = $InStock;
      return $this;
    }

    /**
     * @return float
     */
    public function getOnOrder()
    {
      return $this->OnOrder;
    }

    /**
     * @param float $OnOrder
     * @return \Economic\ProductData
     */
    public function setOnOrder($OnOrder)
    {
      $this->OnOrder = $OnOrder;
      return $this;
    }

    /**
     * @return float
     */
    public function getOrdered()
    {
      return $this->Ordered;
    }

    /**
     * @param float $Ordered
     * @return \Economic\ProductData
     */
    public function setOrdered($Ordered)
    {
      $this->Ordered = $Ordered;
      return $this;
    }

    /**
     * @return float
     */
    public function getAvailable()
    {
      return $this->Available;
    }

    /**
     * @param float $Available
     * @return \Economic\ProductData
     */
    public function setAvailable($Available)
    {
      $this->Available = $Available;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLastUpdated()
    {
      if ($this->LastUpdated == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->LastUpdated);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $LastUpdated
     * @return \Economic\ProductData
     */
    public function setLastUpdated(\DateTime $LastUpdated = null)
    {
      if ($LastUpdated == null) {
       $this->LastUpdated = null;
      } else {
        $this->LastUpdated = $LastUpdated->format(\DateTime::ATOM);
      }
      return $this;
    }

}
