<?php

namespace Economic;

class BudgetFigure_UpdateFromDataArray
{

    /**
     * @var ArrayOfBudgetFigureData $dataArray
     */
    protected $dataArray = null;

    /**
     * @param ArrayOfBudgetFigureData $dataArray
     */
    public function __construct($dataArray)
    {
      $this->dataArray = $dataArray;
    }

    /**
     * @return ArrayOfBudgetFigureData
     */
    public function getDataArray()
    {
      return $this->dataArray;
    }

    /**
     * @param ArrayOfBudgetFigureData $dataArray
     * @return \Economic\BudgetFigure_UpdateFromDataArray
     */
    public function setDataArray($dataArray)
    {
      $this->dataArray = $dataArray;
      return $this;
    }

}
