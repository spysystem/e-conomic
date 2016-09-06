<?php

namespace Economic;

class Product_SetDepartment
{

    /**
     * @var ProductHandle $productHandle
     */
    protected $productHandle = null;

    /**
     * @var DepartmentHandle $valueHandle
     */
    protected $valueHandle = null;

    /**
     * @param ProductHandle $productHandle
     * @param DepartmentHandle $valueHandle
     */
    public function __construct($productHandle, $valueHandle)
    {
      $this->productHandle = $productHandle;
      $this->valueHandle = $valueHandle;
    }

    /**
     * @return ProductHandle
     */
    public function getProductHandle()
    {
      return $this->productHandle;
    }

    /**
     * @param ProductHandle $productHandle
     * @return \Economic\Product_SetDepartment
     */
    public function setProductHandle($productHandle)
    {
      $this->productHandle = $productHandle;
      return $this;
    }

    /**
     * @return DepartmentHandle
     */
    public function getValueHandle()
    {
      return $this->valueHandle;
    }

    /**
     * @param DepartmentHandle $valueHandle
     * @return \Economic\Product_SetDepartment
     */
    public function setValueHandle($valueHandle)
    {
      $this->valueHandle = $valueHandle;
      return $this;
    }

}
