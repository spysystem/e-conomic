<?php

namespace Economic;

class Subscriber_GetDiscountAsPercentResponse
{

    /**
     * @var float $Subscriber_GetDiscountAsPercentResult
     */
    protected $Subscriber_GetDiscountAsPercentResult = null;

    /**
     * @param float $Subscriber_GetDiscountAsPercentResult
     */
    public function __construct($Subscriber_GetDiscountAsPercentResult)
    {
      $this->Subscriber_GetDiscountAsPercentResult = $Subscriber_GetDiscountAsPercentResult;
    }

    /**
     * @return float
     */
    public function getSubscriber_GetDiscountAsPercentResult()
    {
      return $this->Subscriber_GetDiscountAsPercentResult;
    }

    /**
     * @param float $Subscriber_GetDiscountAsPercentResult
     * @return \Economic\Subscriber_GetDiscountAsPercentResponse
     */
    public function setSubscriber_GetDiscountAsPercentResult($Subscriber_GetDiscountAsPercentResult)
    {
      $this->Subscriber_GetDiscountAsPercentResult = $Subscriber_GetDiscountAsPercentResult;
      return $this;
    }

}
