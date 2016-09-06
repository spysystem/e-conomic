<?php

namespace Economic;

class TimeEntry_GetApprovedResponse
{

    /**
     * @var boolean $TimeEntry_GetApprovedResult
     */
    protected $TimeEntry_GetApprovedResult = null;

    /**
     * @param boolean $TimeEntry_GetApprovedResult
     */
    public function __construct($TimeEntry_GetApprovedResult)
    {
      $this->TimeEntry_GetApprovedResult = $TimeEntry_GetApprovedResult;
    }

    /**
     * @return boolean
     */
    public function getTimeEntry_GetApprovedResult()
    {
      return $this->TimeEntry_GetApprovedResult;
    }

    /**
     * @param boolean $TimeEntry_GetApprovedResult
     * @return \Economic\TimeEntry_GetApprovedResponse
     */
    public function setTimeEntry_GetApprovedResult($TimeEntry_GetApprovedResult)
    {
      $this->TimeEntry_GetApprovedResult = $TimeEntry_GetApprovedResult;
      return $this;
    }

}
