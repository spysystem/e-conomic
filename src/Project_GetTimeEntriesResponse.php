<?php

namespace Economic;

class Project_GetTimeEntriesResponse
{

    /**
     * @var ArrayOfTimeEntryHandle $Project_GetTimeEntriesResult
     */
    protected $Project_GetTimeEntriesResult = null;

    /**
     * @param ArrayOfTimeEntryHandle $Project_GetTimeEntriesResult
     */
    public function __construct($Project_GetTimeEntriesResult)
    {
      $this->Project_GetTimeEntriesResult = $Project_GetTimeEntriesResult;
    }

    /**
     * @return ArrayOfTimeEntryHandle
     */
    public function getProject_GetTimeEntriesResult()
    {
      return $this->Project_GetTimeEntriesResult;
    }

    /**
     * @param ArrayOfTimeEntryHandle $Project_GetTimeEntriesResult
     * @return \Economic\Project_GetTimeEntriesResponse
     */
    public function setProject_GetTimeEntriesResult($Project_GetTimeEntriesResult)
    {
      $this->Project_GetTimeEntriesResult = $Project_GetTimeEntriesResult;
      return $this;
    }

}
