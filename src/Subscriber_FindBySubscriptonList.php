<?php

namespace Economic;

class Subscriber_FindBySubscriptonList
{

    /**
     * @var ArrayOfSubscriptionHandle $subscriptions
     */
    protected $subscriptions = null;

    /**
     * @param ArrayOfSubscriptionHandle $subscriptions
     */
    public function __construct($subscriptions)
    {
      $this->subscriptions = $subscriptions;
    }

    /**
     * @return ArrayOfSubscriptionHandle
     */
    public function getSubscriptions()
    {
      return $this->subscriptions;
    }

    /**
     * @param ArrayOfSubscriptionHandle $subscriptions
     * @return \Economic\Subscriber_FindBySubscriptonList
     */
    public function setSubscriptions($subscriptions)
    {
      $this->subscriptions = $subscriptions;
      return $this;
    }

}
