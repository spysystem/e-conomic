<?php

namespace Economic;

class Subscriber_GetEndDateResponse
{

    /**
     * @var \DateTime $Subscriber_GetEndDateResult
     */
    protected $Subscriber_GetEndDateResult = null;

    /**
     * @param \DateTime $Subscriber_GetEndDateResult
     */
    public function __construct(\DateTime $Subscriber_GetEndDateResult)
    {
      $this->Subscriber_GetEndDateResult = $Subscriber_GetEndDateResult->format(\DateTime::ATOM);
    }

    /**
     * @return \DateTime
     */
    public function getSubscriber_GetEndDateResult()
    {
      if ($this->Subscriber_GetEndDateResult == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->Subscriber_GetEndDateResult);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $Subscriber_GetEndDateResult
     * @return \Economic\Subscriber_GetEndDateResponse
     */
    public function setSubscriber_GetEndDateResult(\DateTime $Subscriber_GetEndDateResult)
    {
      $this->Subscriber_GetEndDateResult = $Subscriber_GetEndDateResult->format(\DateTime::ATOM);
      return $this;
    }

}
