<?php

namespace Economic;

class SubscriberHandle
{

    /**
     * @var int $SubscriberId
     */
    protected $SubscriberId = null;

    /**
     * @param int $SubscriberId
     */
    public function __construct($SubscriberId)
    {
      $this->SubscriberId = $SubscriberId;
    }

    /**
     * @return int
     */
    public function getSubscriberId()
    {
      return $this->SubscriberId;
    }

    /**
     * @param int $SubscriberId
     * @return \Economic\SubscriberHandle
     */
    public function setSubscriberId($SubscriberId)
    {
      $this->SubscriberId = $SubscriberId;
      return $this;
    }

}
