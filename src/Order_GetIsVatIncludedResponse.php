<?php

namespace Economic;

class Order_GetIsVatIncludedResponse
{

    /**
     * @var boolean $Order_GetIsVatIncludedResult
     */
    protected $Order_GetIsVatIncludedResult = null;

    /**
     * @param boolean $Order_GetIsVatIncludedResult
     */
    public function __construct($Order_GetIsVatIncludedResult)
    {
      $this->Order_GetIsVatIncludedResult = $Order_GetIsVatIncludedResult;
    }

    /**
     * @return boolean
     */
    public function getOrder_GetIsVatIncludedResult()
    {
      return $this->Order_GetIsVatIncludedResult;
    }

    /**
     * @param boolean $Order_GetIsVatIncludedResult
     * @return \Economic\Order_GetIsVatIncludedResponse
     */
    public function setOrder_GetIsVatIncludedResult($Order_GetIsVatIncludedResult)
    {
      $this->Order_GetIsVatIncludedResult = $Order_GetIsVatIncludedResult;
      return $this;
    }

}
