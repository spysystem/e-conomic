<?php

namespace Economic;

class CreditorGroup_CreateFromDataArray
{

    /**
     * @var ArrayOfCreditorGroupData $dataArray
     */
    protected $dataArray = null;

    /**
     * @param ArrayOfCreditorGroupData $dataArray
     */
    public function __construct($dataArray)
    {
      $this->dataArray = $dataArray;
    }

    /**
     * @return ArrayOfCreditorGroupData
     */
    public function getDataArray()
    {
      return $this->dataArray;
    }

    /**
     * @param ArrayOfCreditorGroupData $dataArray
     * @return \Economic\CreditorGroup_CreateFromDataArray
     */
    public function setDataArray($dataArray)
    {
      $this->dataArray = $dataArray;
      return $this;
    }

}
