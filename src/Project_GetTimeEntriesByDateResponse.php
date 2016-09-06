<?php

namespace Economic;

class Project_GetTimeEntriesByDateResponse
{

    /**
     * @var ArrayOfTimeEntryHandle $Project_GetTimeEntriesByDateResult
     */
    protected $Project_GetTimeEntriesByDateResult = null;

    /**
     * @param ArrayOfTimeEntryHandle $Project_GetTimeEntriesByDateResult
     */
    public function __construct($Project_GetTimeEntriesByDateResult)
    {
      $this->Project_GetTimeEntriesByDateResult = $Project_GetTimeEntriesByDateResult;
    }

    /**
     * @return ArrayOfTimeEntryHandle
     */
    public function getProject_GetTimeEntriesByDateResult()
    {
      return $this->Project_GetTimeEntriesByDateResult;
    }

    /**
     * @param ArrayOfTimeEntryHandle $Project_GetTimeEntriesByDateResult
     * @return \Economic\Project_GetTimeEntriesByDateResponse
     */
    public function setProject_GetTimeEntriesByDateResult($Project_GetTimeEntriesByDateResult)
    {
      $this->Project_GetTimeEntriesByDateResult = $Project_GetTimeEntriesByDateResult;
      return $this;
    }

}
