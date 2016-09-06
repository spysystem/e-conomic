<?php

namespace Economic;

class DistributionKey_SetIsAccessible
{

    /**
     * @var DistributionKeyHandle $distributionKeyHandle
     */
    protected $distributionKeyHandle = null;

    /**
     * @var boolean $value
     */
    protected $value = null;

    /**
     * @param DistributionKeyHandle $distributionKeyHandle
     * @param boolean $value
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
     * @return \Economic\DistributionKey_SetIsAccessible
     */
    public function setDistributionKeyHandle($distributionKeyHandle)
    {
      $this->distributionKeyHandle = $distributionKeyHandle;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param boolean $value
     * @return \Economic\DistributionKey_SetIsAccessible
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

}
