<?php

namespace Economic;

class CreditorContact_CreateFromDataArray
{

    /**
     * @var ArrayOfCreditorContactData $dataArray
     */
    protected $dataArray = null;

    /**
     * @param ArrayOfCreditorContactData $dataArray
     */
    public function __construct($dataArray)
    {
      $this->dataArray = $dataArray;
    }

    /**
     * @return ArrayOfCreditorContactData
     */
    public function getDataArray()
    {
      return $this->dataArray;
    }

    /**
     * @param ArrayOfCreditorContactData $dataArray
     * @return \Economic\CreditorContact_CreateFromDataArray
     */
    public function setDataArray($dataArray)
    {
      $this->dataArray = $dataArray;
      return $this;
    }

}
