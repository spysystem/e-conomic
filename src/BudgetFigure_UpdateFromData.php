<?php

namespace Economic;

class BudgetFigure_UpdateFromData
{

    /**
     * @var BudgetFigureData $data
     */
    protected $data = null;

    /**
     * @param BudgetFigureData $data
     */
    public function __construct($data)
    {
      $this->data = $data;
    }

    /**
     * @return BudgetFigureData
     */
    public function getData()
    {
      return $this->data;
    }

    /**
     * @param BudgetFigureData $data
     * @return \Economic\BudgetFigure_UpdateFromData
     */
    public function setData($data)
    {
      $this->data = $data;
      return $this;
    }

}
