<?php

namespace Economic;

class BudgetFigure_GetDataArray
{

    /**
     * @var ArrayOfBudgetFigureHandle $entityHandles
     */
    protected $entityHandles = null;

    /**
     * @param ArrayOfBudgetFigureHandle $entityHandles
     */
    public function __construct($entityHandles)
    {
      $this->entityHandles = $entityHandles;
    }

    /**
     * @return ArrayOfBudgetFigureHandle
     */
    public function getEntityHandles()
    {
      return $this->entityHandles;
    }

    /**
     * @param ArrayOfBudgetFigureHandle $entityHandles
     * @return \Economic\BudgetFigure_GetDataArray
     */
    public function setEntityHandles($entityHandles)
    {
      $this->entityHandles = $entityHandles;
      return $this;
    }

}
