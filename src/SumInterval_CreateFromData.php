<?php

namespace Economic;

class SumInterval_CreateFromData
{

    /**
     * @var SumIntervalData $data
     */
    protected $data = null;

    /**
     * @param SumIntervalData $data
     */
    public function __construct($data)
    {
      $this->data = $data;
    }

    /**
     * @return SumIntervalData
     */
    public function getData()
    {
      return $this->data;
    }

    /**
     * @param SumIntervalData $data
     * @return \Economic\SumInterval_CreateFromData
     */
    public function setData($data)
    {
      $this->data = $data;
      return $this;
    }

}
