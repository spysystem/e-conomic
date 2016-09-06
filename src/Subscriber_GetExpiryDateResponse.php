<?php

namespace Economic;

class Subscriber_GetExpiryDateResponse
{

    /**
     * @var \DateTime $Subscriber_GetExpiryDateResult
     */
    protected $Subscriber_GetExpiryDateResult = null;

    /**
     * @param \DateTime $Subscriber_GetExpiryDateResult
     */
    public function __construct(\DateTime $Subscriber_GetExpiryDateResult)
    {
      $this->Subscriber_GetExpiryDateResult = $Subscriber_GetExpiryDateResult->format(\DateTime::ATOM);
    }

    /**
     * @return \DateTime
     */
    public function getSubscriber_GetExpiryDateResult()
    {
      if ($this->Subscriber_GetExpiryDateResult == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->Subscriber_GetExpiryDateResult);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $Subscriber_GetExpiryDateResult
     * @return \Economic\Subscriber_GetExpiryDateResponse
     */
    public function setSubscriber_GetExpiryDateResult(\DateTime $Subscriber_GetExpiryDateResult)
    {
      $this->Subscriber_GetExpiryDateResult = $Subscriber_GetExpiryDateResult->format(\DateTime::ATOM);
      return $this;
    }

}
