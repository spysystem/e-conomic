<?php

namespace Economic;

class Order_SetLayout
{

    /**
     * @var OrderHandle $orderHandle
     */
    protected $orderHandle = null;

    /**
     * @var TemplateCollectionHandle $valueHandle
     */
    protected $valueHandle = null;

    /**
     * @param OrderHandle $orderHandle
     * @param TemplateCollectionHandle $valueHandle
     */
    public function __construct($orderHandle, $valueHandle)
    {
      $this->orderHandle = $orderHandle;
      $this->valueHandle = $valueHandle;
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
     * @return \Economic\Order_SetLayout
     */
    public function setOrderHandle($orderHandle)
    {
      $this->orderHandle = $orderHandle;
      return $this;
    }

    /**
     * @return TemplateCollectionHandle
     */
    public function getValueHandle()
    {
      return $this->valueHandle;
    }

    /**
     * @param TemplateCollectionHandle $valueHandle
     * @return \Economic\Order_SetLayout
     */
    public function setValueHandle($valueHandle)
    {
      $this->valueHandle = $valueHandle;
      return $this;
    }

}
