<?php

namespace Economic;

class BudgetFigure_CreateFromDataArray
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
     * @return \Economic\BudgetFigure_CreateFromDataArray
     */
    public function setDataArray($dataArray)
    {
      $this->dataArray = $dataArray;
      return $this;
    }

}
