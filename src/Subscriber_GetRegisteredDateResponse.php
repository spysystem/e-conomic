<?php

namespace Economic;

class Subscriber_GetRegisteredDateResponse
{

    /**
     * @var \DateTime $Subscriber_GetRegisteredDateResult
     */
    protected $Subscriber_GetRegisteredDateResult = null;

    /**
     * @param \DateTime $Subscriber_GetRegisteredDateResult
     */
    public function __construct(\DateTime $Subscriber_GetRegisteredDateResult)
    {
      $this->Subscriber_GetRegisteredDateResult = $Subscriber_GetRegisteredDateResult->format(\DateTime::ATOM);
    }

    /**
     * @return \DateTime
     */
    public function getSubscriber_GetRegisteredDateResult()
    {
      if ($this->Subscriber_GetRegisteredDateResult == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->Subscriber_GetRegisteredDateResult);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $Subscriber_GetRegisteredDateResult
     * @return \Economic\Subscriber_GetRegisteredDateResponse
     */
    public function setSubscriber_GetRegisteredDateResult(\DateTime $Subscriber_GetRegisteredDateResult)
    {
      $this->Subscriber_GetRegisteredDateResult = $Subscriber_GetRegisteredDateResult->format(\DateTime::ATOM);
      return $this;
    }

}
