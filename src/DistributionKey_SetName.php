<?php

namespace Economic;

class DistributionKey_SetName
{

    /**
     * @var DistributionKeyHandle $distributionKeyHandle
     */
    protected $distributionKeyHandle = null;

    /**
     * @var string $value
     */
    protected $value = null;

    /**
     * @param DistributionKeyHandle $distributionKeyHandle
     * @param string $value
     */
    public function __construct($distributionKeyHandle, $value)
    {
      $this->distributionKeyHandle = $distributionKeyHandle;
      $this->value = $value;
    }

    /**
     * @return DistributionKeyHandle
     */
    public function getDistributionKeyHandle()
    {
      return $this->distributionKeyHandle;
    }

    /**
     * @param DistributionKeyHandle $distributionKeyHandle
     * @return \Economic\DistributionKey_SetName
     */
    public function setDistributionKeyHandle($distributionKeyHandle)
    {
      $this->distributionKeyHandle = $distributionKeyHandle;
      return $this;
    }

    /**
     * @return string
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param string $value
     * @return \Economic\DistributionKey_SetName
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

}
