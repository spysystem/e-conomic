<?php

namespace Economic;

class Order_UpdateFromData
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
     * @return \Economic\Order_UpdateFromData
     */
    public function setData($data)
    {
      $this->data = $data;
      return $this;
    }

}
