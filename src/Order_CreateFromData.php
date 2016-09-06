<?php

namespace Economic;

class Order_CreateFromData
{

    /**
     * @var OrderData $data
     */
    protected $data = null;

    /**
     * @param OrderData $data
     */
    public function __construct($data)
    {
      $this->data = $data;
    }

    /**
     * @return OrderData
     */
    public function getData()
    {
      return $this->data;
    }

    /**
     * @param OrderData $data
     * @return \Economic\Order_CreateFromData
     */
    public function setData($data)
    {
      $this->data = $data;
      return $this;
    }

}
