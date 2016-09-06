<?php

namespace Economic;

class OrderLine_GetDeliveryDateResponse
{

    /**
     * @var \DateTime $OrderLine_GetDeliveryDateResult
     */
    protected $OrderLine_GetDeliveryDateResult = null;

    /**
     * @param \DateTime $OrderLine_GetDeliveryDateResult
     */
    public function __construct(\DateTime $OrderLine_GetDeliveryDateResult)
    {
      $this->OrderLine_GetDeliveryDateResult = $OrderLine_GetDeliveryDateResult->format(\DateTime::ATOM);
    }

    /**
     * @return \DateTime
     */
    public function getOrderLine_GetDeliveryDateResult()
    {
      if ($this->OrderLine_GetDeliveryDateResult == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->OrderLine_GetDeliveryDateResult);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $OrderLine_GetDeliveryDateResult
     * @return \Economic\OrderLine_GetDeliveryDateResponse
     */
    public function setOrderLine_GetDeliveryDateResult(\DateTime $OrderLine_GetDeliveryDateResult)
    {
      $this->OrderLine_GetDeliveryDateResult = $OrderLine_GetDeliveryDateResult->format(\DateTime::ATOM);
      return $this;
    }

}
