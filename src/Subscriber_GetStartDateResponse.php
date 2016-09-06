<?php

namespace Economic;

class Subscriber_GetStartDateResponse
{

    /**
     * @var \DateTime $Subscriber_GetStartDateResult
     */
    protected $Subscriber_GetStartDateResult = null;

    /**
     * @param \DateTime $Subscriber_GetStartDateResult
     */
    public function __construct(\DateTime $Subscriber_GetStartDateResult)
    {
      $this->Subscriber_GetStartDateResult = $Subscriber_GetStartDateResult->format(\DateTime::ATOM);
    }

    /**
     * @return \DateTime
     */
    public function getSubscriber_GetStartDateResult()
    {
      if ($this->Subscriber_GetStartDateResult == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->Subscriber_GetStartDateResult);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $Subscriber_GetStartDateResult
     * @return \Economic\Subscriber_GetStartDateResponse
     */
    public function setSubscriber_GetStartDateResult(\DateTime $Subscriber_GetStartDateResult)
    {
      $this->Subscriber_GetStartDateResult = $Subscriber_GetStartDateResult->format(\DateTime::ATOM);
      return $this;
    }

}
