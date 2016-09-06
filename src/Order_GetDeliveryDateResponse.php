<?php

namespace Economic;

class Order_GetDeliveryDateResponse
{

    /**
     * @var \DateTime $Order_GetDeliveryDateResult
     */
    protected $Order_GetDeliveryDateResult = null;

    /**
     * @param \DateTime $Order_GetDeliveryDateResult
     */
    public function __construct(\DateTime $Order_GetDeliveryDateResult)
    {
      $this->Order_GetDeliveryDateResult = $Order_GetDeliveryDateResult->format(\DateTime::ATOM);
    }

    /**
     * @return \DateTime
     */
    public function getOrder_GetDeliveryDateResult()
    {
      if ($this->Order_GetDeliveryDateResult == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->Order_GetDeliveryDateResult);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $Order_GetDeliveryDateResult
     * @return \Economic\Order_GetDeliveryDateResponse
     */
    public function setOrder_GetDeliveryDateResult(\DateTime $Order_GetDeliveryDateResult)
    {
      $this->Order_GetDeliveryDateResult = $Order_GetDeliveryDateResult->format(\DateTime::ATOM);
      return $this;
    }

}
