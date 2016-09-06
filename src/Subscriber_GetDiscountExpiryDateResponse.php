<?php

namespace Economic;

class Subscriber_GetDiscountExpiryDateResponse
{

    /**
     * @var \DateTime $Subscriber_GetDiscountExpiryDateResult
     */
    protected $Subscriber_GetDiscountExpiryDateResult = null;

    /**
     * @param \DateTime $Subscriber_GetDiscountExpiryDateResult
     */
    public function __construct(\DateTime $Subscriber_GetDiscountExpiryDateResult)
    {
      $this->Subscriber_GetDiscountExpiryDateResult = $Subscriber_GetDiscountExpiryDateResult->format(\DateTime::ATOM);
    }

    /**
     * @return \DateTime
     */
    public function getSubscriber_GetDiscountExpiryDateResult()
    {
      if ($this->Subscriber_GetDiscountExpiryDateResult == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->Subscriber_GetDiscountExpiryDateResult);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $Subscriber_GetDiscountExpiryDateResult
     * @return \Economic\Subscriber_GetDiscountExpiryDateResponse
     */
    public function setSubscriber_GetDiscountExpiryDateResult(\DateTime $Subscriber_GetDiscountExpiryDateResult)
    {
      $this->Subscriber_GetDiscountExpiryDateResult = $Subscriber_GetDiscountExpiryDateResult->format(\DateTime::ATOM);
      return $this;
    }

}
