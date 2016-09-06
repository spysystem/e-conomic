<?php

namespace Economic;

class TimeEntry_FindApprovedByDateResponse
{

    /**
     * @var ArrayOfTimeEntryHandle $TimeEntry_FindApprovedByDateResult
     */
    protected $TimeEntry_FindApprovedByDateResult = null;

    /**
     * @param ArrayOfTimeEntryHandle $TimeEntry_FindApprovedByDateResult
     */
    public function __construct($TimeEntry_FindApprovedByDateResult)
    {
      $this->TimeEntry_FindApprovedByDateResult = $TimeEntry_FindApprovedByDateResult;
    }

    /**
     * @return ArrayOfTimeEntryHandle
     */
    public function getTimeEntry_FindApprovedByDateResult()
    {
      return $this->TimeEntry_FindApprovedByDateResult;
    }

    /**
     * @param ArrayOfTimeEntryHandle $TimeEntry_FindApprovedByDateResult
     * @return \Economic\TimeEntry_FindApprovedByDateResponse
     */
    public function setTimeEntry_FindApprovedByDateResult($TimeEntry_FindApprovedByDateResult)
    {
      $this->TimeEntry_FindApprovedByDateResult = $TimeEntry_FindApprovedByDateResult;
      return $this;
    }

}
