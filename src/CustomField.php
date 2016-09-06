<?php

namespace Economic;

class CustomField
{

    /**
     * @var string $DataKey
     */
    protected $DataKey = null;

    /**
     * @var string $DataValue
     */
    protected $DataValue = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getDataKey()
    {
      return $this->DataKey;
    }

    /**
     * @param string $DataKey
     * @return \Economic\CustomField
     */
    public function setDataKey($DataKey)
    {
      $this->DataKey = $DataKey;
      return $this;
    }

    /**
     * @return string
     */
    public function getDataValue()
    {
      return $this->DataValue;
    }

    /**
     * @param string $DataValue
     * @return \Economic\CustomField
     */
    public function setDataValue($DataValue)
    {
      $this->DataValue = $DataValue;
      return $this;
    }

}
