<?php

namespace Economic;

class Subscription_GetDescriptionResponse
{

    /**
     * @var string $Subscription_GetDescriptionResult
     */
    protected $Subscription_GetDescriptionResult = null;

    /**
     * @param string $Subscription_GetDescriptionResult
     */
    public function __construct($Subscription_GetDescriptionResult)
    {
      $this->Subscription_GetDescriptionResult = $Subscription_GetDescriptionResult;
    }

    /**
     * @return string
     */
    public function getSubscription_GetDescriptionResult()
    {
      return $this->Subscription_GetDescriptionResult;
    }

    /**
     * @param string $Subscription_GetDescriptionResult
     * @return \Economic\Subscription_GetDescriptionResponse
     */
    public function setSubscription_GetDescriptionResult($Subscription_GetDescriptionResult)
    {
      $this->Subscription_GetDescriptionResult = $Subscription_GetDescriptionResult;
      return $this;
    }

}
