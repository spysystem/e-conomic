<?php

namespace Economic;

class Order_GetOurReferenceResponse
{

    /**
     * @var EmployeeHandle $Order_GetOurReferenceResult
     */
    protected $Order_GetOurReferenceResult = null;

    /**
     * @param EmployeeHandle $Order_GetOurReferenceResult
     */
    public function __construct($Order_GetOurReferenceResult)
    {
      $this->Order_GetOurReferenceResult = $Order_GetOurReferenceResult;
    }

    /**
     * @return EmployeeHandle
     */
    public function getOrder_GetOurReferenceResult()
    {
      return $this->Order_GetOurReferenceResult;
    }

    /**
     * @param EmployeeHandle $Order_GetOurReferenceResult
     * @return \Economic\Order_GetOurReferenceResponse
     */
    public function setOrder_GetOurReferenceResult($Order_GetOurReferenceResult)
    {
      $this->Order_GetOurReferenceResult = $Order_GetOurReferenceResult;
      return $this;
    }

}
