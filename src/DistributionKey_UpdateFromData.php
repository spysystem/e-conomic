<?php

namespace Economic;

class DistributionKey_UpdateFromData
{

    /**
     * @var DistributionKeyData $data
     */
    protected $data = null;

    /**
     * @param DistributionKeyData $data
     */
    public function __construct($data)
    {
      $this->data = $data;
    }

    /**
     * @return DistributionKeyData
     */
    public function getData()
    {
      return $this->data;
    }

    /**
     * @param DistributionKeyData $data
     * @return \Economic\DistributionKey_UpdateFromData
     */
    public function setData($data)
    {
      $this->data = $data;
      return $this;
    }

}
