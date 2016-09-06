<?php

namespace Economic;

class Subscriber_GetSpecialPriceResponse
{

    /**
     * @var float $Subscriber_GetSpecialPriceResult
     */
    protected $Subscriber_GetSpecialPriceResult = null;

    /**
     * @param float $Subscriber_GetSpecialPriceResult
     */
    public function __construct($Subscriber_GetSpecialPriceResult)
    {
      $this->Subscriber_GetSpecialPriceResult = $Subscriber_GetSpecialPriceResult;
    }

    /**
     * @return float
     */
    public function getSubscriber_GetSpecialPriceResult()
    {
      return $this->Subscriber_GetSpecialPriceResult;
    }

    /**
     * @param float $Subscriber_GetSpecialPriceResult
     * @return \Economic\Subscriber_GetSpecialPriceResponse
     */
    public function setSubscriber_GetSpecialPriceResult($Subscriber_GetSpecialPriceResult)
    {
      $this->Subscriber_GetSpecialPriceResult = $Subscriber_GetSpecialPriceResult;
      return $this;
    }

}
