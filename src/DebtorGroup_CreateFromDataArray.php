<?php

namespace Economic;

class DebtorGroup_CreateFromDataArray
{

    /**
     * @var ArrayOfDebtorGroupData $dataArray
     */
    protected $dataArray = null;

    /**
     * @param ArrayOfDebtorGroupData $dataArray
     */
    public function __construct($dataArray)
    {
      $this->dataArray = $dataArray;
    }

    /**
     * @return ArrayOfDebtorGroupData
     */
    public function getDataArray()
    {
      return $this->dataArray;
    }

    /**
     * @param ArrayOfDebtorGroupData $dataArray
     * @return \Economic\DebtorGroup_CreateFromDataArray
     */
    public function setDataArray($dataArray)
    {
      $this->dataArray = $dataArray;
      return $this;
    }

}
