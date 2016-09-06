<?php

namespace Economic;

class Product_GetInventoryLocationStatusResponse
{

    /**
     * @var ArrayOfProductInventoryLocationStatusData $Product_GetInventoryLocationStatusResult
     */
    protected $Product_GetInventoryLocationStatusResult = null;

    /**
     * @param ArrayOfProductInventoryLocationStatusData $Product_GetInventoryLocationStatusResult
     */
    public function __construct($Product_GetInventoryLocationStatusResult)
    {
      $this->Product_GetInventoryLocationStatusResult = $Product_GetInventoryLocationStatusResult;
    }

    /**
     * @return ArrayOfProductInventoryLocationStatusData
     */
    public function getProduct_GetInventoryLocationStatusResult()
    {
      return $this->Product_GetInventoryLocationStatusResult;
    }

    /**
     * @param ArrayOfProductInventoryLocationStatusData $Product_GetInventoryLocationStatusResult
     * @return \Economic\Product_GetInventoryLocationStatusResponse
     */
    public function setProduct_GetInventoryLocationStatusResult($Product_GetInventoryLocationStatusResult)
    {
      $this->Product_GetInventoryLocationStatusResult = $Product_GetInventoryLocationStatusResult;
      return $this;
    }

}
