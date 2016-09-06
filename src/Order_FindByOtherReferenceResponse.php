<?php

namespace Economic;

class Order_FindByOtherReferenceResponse
{

    /**
     * @var ArrayOfOrderHandle $Order_FindByOtherReferenceResult
     */
    protected $Order_FindByOtherReferenceResult = null;

    /**
     * @param ArrayOfOrderHandle $Order_FindByOtherReferenceResult
     */
    public function __construct($Order_FindByOtherReferenceResult)
    {
      $this->Order_FindByOtherReferenceResult = $Order_FindByOtherReferenceResult;
    }

    /**
     * @return ArrayOfOrderHandle
     */
    public function getOrder_FindByOtherReferenceResult()
    {
      return $this->Order_FindByOtherReferenceResult;
    }

    /**
     * @param ArrayOfOrderHandle $Order_FindByOtherReferenceResult
     * @return \Economic\Order_FindByOtherReferenceResponse
     */
    public function setOrder_FindByOtherReferenceResult($Order_FindByOtherReferenceResult)
    {
      $this->Order_FindByOtherReferenceResult = $Order_FindByOtherReferenceResult;
      return $this;
    }

}
