<?php

namespace Economic;

class Order_GetTermOfPaymentResponse
{

    /**
     * @var TermOfPaymentHandle $Order_GetTermOfPaymentResult
     */
    protected $Order_GetTermOfPaymentResult = null;

    /**
     * @param TermOfPaymentHandle $Order_GetTermOfPaymentResult
     */
    public function __construct($Order_GetTermOfPaymentResult)
    {
      $this->Order_GetTermOfPaymentResult = $Order_GetTermOfPaymentResult;
    }

    /**
     * @return TermOfPaymentHandle
     */
    public function getOrder_GetTermOfPaymentResult()
    {
      return $this->Order_GetTermOfPaymentResult;
    }

    /**
     * @param TermOfPaymentHandle $Order_GetTermOfPaymentResult
     * @return \Economic\Order_GetTermOfPaymentResponse
     */
    public function setOrder_GetTermOfPaymentResult($Order_GetTermOfPaymentResult)
    {
      $this->Order_GetTermOfPaymentResult = $Order_GetTermOfPaymentResult;
      return $this;
    }

}
