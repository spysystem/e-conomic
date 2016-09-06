<?php

namespace Economic;

class CashBookEntry_SetProjectAndCostType
{

    /**
     * @var CashBookEntryHandle $cashBookEntryHandle
     */
    protected $cashBookEntryHandle = null;

    /**
     * @var ProjectHandle $projectHandle
     */
    protected $projectHandle = null;

    /**
     * @var CostTypeHandle $costTypeHandle
     */
    protected $costTypeHandle = null;

    /**
     * @param CashBookEntryHandle $cashBookEntryHandle
     * @param ProjectHandle $projectHandle
     * @param CostTypeHandle $costTypeHandle
     */
    public function __construct($cashBookEntryHandle, $projectHandle, $costTypeHandle)
    {
      $this->cashBookEntryHandle = $cashBookEntryHandle;
      $this->projectHandle = $projectHandle;
      $this->costTypeHandle = $costTypeHandle;
    }

    /**
     * @return CashBookEntryHandle
     */
    public function getCashBookEntryHandle()
    {
      return $this->cashBookEntryHandle;
    }

    /**
     * @param CashBookEntryHandle $cashBookEntryHandle
     * @return \Economic\CashBookEntry_SetProjectAndCostType
     */
    public function setCashBookEntryHandle($cashBookEntryHandle)
    {
      $this->cashBookEntryHandle = $cashBookEntryHandle;
      return $this;
    }

    /**
     * @return ProjectHandle
     */
    public function getProjectHandle()
    {
      return $this->projectHandle;
    }

    /**
     * @param ProjectHandle $projectHandle
     * @return \Economic\CashBookEntry_SetProjectAndCostType
     */
    public function setProjectHandle($projectHandle)
    {
      $this->projectHandle = $projectHandle;
      return $this;
    }

    /**
     * @return CostTypeHandle
     */
    public function getCostTypeHandle()
    {
      return $this->costTypeHandle;
    }

    /**
     * @param CostTypeHandle $costTypeHandle
     * @return \Economic\CashBookEntry_SetProjectAndCostType
     */
    public function setCostTypeHandle($costTypeHandle)
    {
      $this->costTypeHandle = $costTypeHandle;
      return $this;
    }

}
