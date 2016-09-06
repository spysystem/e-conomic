<?php

namespace Economic;

class Order_GetOtherReferenceResponse
{

    /**
     * @var string $Order_GetOtherReferenceResult
     */
    protected $Order_GetOtherReferenceResult = null;

    /**
     * @param string $Order_GetOtherReferenceResult
     */
    public function __construct($Order_GetOtherReferenceResult)
    {
      $this->Order_GetOtherReferenceResult = $Order_GetOtherReferenceResult;
    }

    /**
     * @return string
     */
    public function getOrder_GetOtherReferenceResult()
    {
      return $this->Order_GetOtherReferenceResult;
    }

    /**
     * @param string $Order_GetOtherReferenceResult
     * @return \Economic\Order_GetOtherReferenceResponse
     */
    public function setOrder_GetOtherReferenceResult($Order_GetOtherReferenceResult)
    {
      $this->Order_GetOtherReferenceResult = $Order_GetOtherReferenceResult;
      return $this;
    }

}
