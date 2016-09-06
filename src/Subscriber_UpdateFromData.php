<?php

namespace Economic;

class Subscriber_UpdateFromData
{

    /**
     * @var SubscriberData $data
     */
    protected $data = null;

    /**
     * @param SubscriberData $data
     */
    public function __construct($data)
    {
      $this->data = $data;
    }

    /**
     * @return SubscriberData
     */
    public function getData()
    {
      return $this->data;
    }

    /**
     * @param SubscriberData $data
     * @return \Economic\Subscriber_UpdateFromData
     */
    public function setData($data)
    {
      $this->data = $data;
      return $this;
    }

}
