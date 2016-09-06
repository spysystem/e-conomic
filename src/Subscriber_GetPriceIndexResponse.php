<?php

namespace Economic;

class Subscriber_GetPriceIndexResponse
{

    /**
     * @var float $Subscriber_GetPriceIndexResult
     */
    protected $Subscriber_GetPriceIndexResult = null;

    /**
     * @param float $Subscriber_GetPriceIndexResult
     */
    public function __construct($Subscriber_GetPriceIndexResult)
    {
      $this->Subscriber_GetPriceIndexResult = $Subscriber_GetPriceIndexResult;
    }

    /**
     * @return float
     */
    public function getSubscriber_GetPriceIndexResult()
    {
      return $this->Subscriber_GetPriceIndexResult;
    }

    /**
     * @param float $Subscriber_GetPriceIndexResult
     * @return \Economic\Subscriber_GetPriceIndexResponse
     */
    public function setSubscriber_GetPriceIndexResult($Subscriber_GetPriceIndexResult)
    {
      $this->Subscriber_GetPriceIndexResult = $Subscriber_GetPriceIndexResult;
      return $this;
    }

}
