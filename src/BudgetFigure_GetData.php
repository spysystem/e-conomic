<?php

namespace Economic;

class BudgetFigure_GetData
{

    /**
     * @var BudgetFigureHandle $entityHandle
     */
    protected $entityHandle = null;

    /**
     * @param BudgetFigureHandle $entityHandle
     */
    public function __construct($entityHandle)
    {
      $this->entityHandle = $entityHandle;
    }

    /**
     * @return BudgetFigureHandle
     */
    public function getEntityHandle()
    {
      return $this->entityHandle;
    }

    /**
     * @param BudgetFigureHandle $entityHandle
     * @return \Economic\BudgetFigure_GetData
     */
    public function setEntityHandle($entityHandle)
    {
      $this->entityHandle = $entityHandle;
      return $this;
    }

}
