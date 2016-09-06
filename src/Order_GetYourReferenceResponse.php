<?php

namespace Economic;

class Order_GetYourReferenceResponse
{

    /**
     * @var DebtorContactHandle $Order_GetYourReferenceResult
     */
    protected $Order_GetYourReferenceResult = null;

    /**
     * @param DebtorContactHandle $Order_GetYourReferenceResult
     */
    public function __construct($Order_GetYourReferenceResult)
    {
      $this->Order_GetYourReferenceResult = $Order_GetYourReferenceResult;
    }

    /**
     * @return DebtorContactHandle
     */
    public function getOrder_GetYourReferenceResult()
    {
      return $this->Order_GetYourReferenceResult;
    }

    /**
     * @param DebtorContactHandle $Order_GetYourReferenceResult
     * @return \Economic\Order_GetYourReferenceResponse
     */
    public function setOrder_GetYourReferenceResult($Order_GetYourReferenceResult)
    {
      $this->Order_GetYourReferenceResult = $Order_GetYourReferenceResult;
      return $this;
    }

}
