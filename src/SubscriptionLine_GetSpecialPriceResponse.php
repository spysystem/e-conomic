<?php

namespace Economic;

class SubscriptionLine_GetSpecialPriceResponse
{

    /**
     * @var float $SubscriptionLine_GetSpecialPriceResult
     */
    protected $SubscriptionLine_GetSpecialPriceResult = null;

    /**
     * @param float $SubscriptionLine_GetSpecialPriceResult
     */
    public function __construct($SubscriptionLine_GetSpecialPriceResult)
    {
      $this->SubscriptionLine_GetSpecialPriceResult = $SubscriptionLine_GetSpecialPriceResult;
    }

    /**
     * @return float
     */
    public function getSubscriptionLine_GetSpecialPriceResult()
    {
      return $this->SubscriptionLine_GetSpecialPriceResult;
    }

    /**
     * @param float $SubscriptionLine_GetSpecialPriceResult
     * @return \Economic\SubscriptionLine_GetSpecialPriceResponse
     */
    public function setSubscriptionLine_GetSpecialPriceResult($SubscriptionLine_GetSpecialPriceResult)
    {
      $this->SubscriptionLine_GetSpecialPriceResult = $SubscriptionLine_GetSpecialPriceResult;
      return $this;
    }

}
