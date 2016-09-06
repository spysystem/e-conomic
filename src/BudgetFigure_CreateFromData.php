<?php

namespace Economic;

class BudgetFigure_CreateFromData
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
     * @return \Economic\BudgetFigure_CreateFromData
     */
    public function setData($data)
    {
      $this->data = $data;
      return $this;
    }

}
