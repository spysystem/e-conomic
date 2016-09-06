<?php

namespace Economic;

class ProductPrice_CreateFromDataArrayResponse
{

    /**
     * @var ArrayOfProductPriceHandle $ProductPrice_CreateFromDataArrayResult
     */
    protected $ProductPrice_CreateFromDataArrayResult = null;

    /**
     * @param ArrayOfProductPriceHandle $ProductPrice_CreateFromDataArrayResult
     */
    public function __construct($ProductPrice_CreateFromDataArrayResult)
    {
      $this->ProductPrice_CreateFromDataArrayResult = $ProductPrice_CreateFromDataArrayResult;
    }

    /**
     * @return ArrayOfProductPriceHandle
     */
    public function getProductPrice_CreateFromDataArrayResult()
    {
      return $this->ProductPrice_CreateFromDataArrayResult;
    }

    /**
     * @param ArrayOfProductPriceHandle $ProductPrice_CreateFromDataArrayResult
     * @return \Economic\ProductPrice_CreateFromDataArrayResponse
     */
    public function setProductPrice_CreateFromDataArrayResult($ProductPrice_CreateFromDataArrayResult)
    {
      $this->ProductPrice_CreateFromDataArrayResult = $ProductPrice_CreateFromDataArrayResult;
      return $this;
    }

}
