<?php

namespace Economic;

class OrderLine_UpdateFromData
{

    /**
     * @var OrderLineData $data
     */
    protected $data = null;

    /**
     * @param OrderLineData $data
     */
    public function __construct($data)
    {
      $this->data = $data;
    }

    /**
     * @return OrderLineData
     */
    public function getData()
    {
      return $this->data;
    }

    /**
     * @param OrderLineData $data
     * @return \Economic\OrderLine_UpdateFromData
     */
    public function setData($data)
    {
      $this->data = $data;
      return $this;
    }

}
