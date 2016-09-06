<?php

namespace Economic;

class Company_DeleteCustomField
{

    /**
     * @var string $dataKey
     */
    protected $dataKey = null;

    /**
     * @param string $dataKey
     */
    public function __construct($dataKey)
    {
      $this->dataKey = $dataKey;
    }

    /**
     * @return string
     */
    public function getDataKey()
    {
      return $this->dataKey;
    }

    /**
     * @param string $dataKey
     * @return \Economic\Company_DeleteCustomField
     */
    public function setDataKey($dataKey)
    {
      $this->dataKey = $dataKey;
      return $this;
    }

}
