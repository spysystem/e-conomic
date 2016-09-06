<?php

namespace Economic;

class Order_SetDate
{

    /**
     * @var OrderHandle $orderHandle
     */
    protected $orderHandle = null;

    /**
     * @var \DateTime $value
     */
    protected $value = null;

    /**
     * @param OrderHandle $orderHandle
     * @param \DateTime $value
     */
    public function __construct($orderHandle, \DateTime $value)
    {
      $this->orderHandle = $orderHandle;
      $this->value = $value->format(\DateTime::ATOM);
    }

    /**
     * @return OrderHandle
     */
    public function getOrderHandle()
    {
      return $this->orderHandle;
    }

    /**
     * @param OrderHandle $orderHandle
     * @return \Economic\Order_SetDate
     */
    public function setOrderHandle($orderHandle)
    {
      $this->orderHandle = $orderHandle;
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
     * @return \Economic\Order_SetDate
     */
    public function setValue(\DateTime $value)
    {
      $this->value = $value->format(\DateTime::ATOM);
      return $this;
    }

}
