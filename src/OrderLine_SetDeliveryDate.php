<?php

namespace Economic;

class OrderLine_SetDeliveryDate
{

    /**
     * @var OrderLineHandle $orderLineHandle
     */
    protected $orderLineHandle = null;

    /**
     * @var \DateTime $value
     */
    protected $value = null;

    /**
     * @param OrderLineHandle $orderLineHandle
     * @param \DateTime $value
     */
    public function __construct($orderLineHandle, \DateTime $value)
    {
      $this->orderLineHandle = $orderLineHandle;
      $this->value = $value->format(\DateTime::ATOM);
    }

    /**
     * @return OrderLineHandle
     */
    public function getOrderLineHandle()
    {
      return $this->orderLineHandle;
    }

    /**
     * @param OrderLineHandle $orderLineHandle
     * @return \Economic\OrderLine_SetDeliveryDate
     */
    public function setOrderLineHandle($orderLineHandle)
    {
      $this->orderLineHandle = $orderLineHandle;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getValue()
    {
      if ($this->value == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->value);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $value
     * @return \Economic\OrderLine_SetDeliveryDate
     */
    public function setValue(\DateTime $value)
    {
      $this->value = $value->format(\DateTime::ATOM);
      return $this;
    }

}
