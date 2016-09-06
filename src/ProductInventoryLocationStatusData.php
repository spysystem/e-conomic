<?php

namespace Economic;

class ProductInventoryLocationStatusData
{

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
     * @var ProductHandle $ProductHandle
     */
    protected $ProductHandle = null;

    /**
     * @var InventoryLocationHandle $InventoryLocationHandle
     */
    protected $InventoryLocationHandle = null;

    /**
     * @param float $InStock
     * @param float $OnOrder
     * @param float $Ordered
     * @param float $Available
     */
    public function __construct($InStock, $OnOrder, $Ordered, $Available)
    {
      $this->InStock = $InStock;
      $this->OnOrder = $OnOrder;
      $this->Ordered = $Ordered;
      $this->Available = $Available;
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
     * @return \Economic\ProductInventoryLocationStatusData
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
     * @return \Economic\ProductInventoryLocationStatusData
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
     * @return \Economic\ProductInventoryLocationStatusData
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
     * @return \Economic\ProductInventoryLocationStatusData
     */
    public function setAvailable($Available)
    {
      $this->Available = $Available;
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
     * @return \Economic\ProductInventoryLocationStatusData
     */
    public function setProductHandle($ProductHandle)
    {
      $this->ProductHandle = $ProductHandle;
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
     * @return \Economic\ProductInventoryLocationStatusData
     */
    public function setInventoryLocationHandle($InventoryLocationHandle)
    {
      $this->InventoryLocationHandle = $InventoryLocationHandle;
      return $this;
    }

}
