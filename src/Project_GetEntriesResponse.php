<?php

namespace Economic;

class Project_GetEntriesResponse
{

    /**
     * @var ArrayOfEntryHandle $Project_GetEntriesResult
     */
    protected $Project_GetEntriesResult = null;

    /**
     * @param ArrayOfEntryHandle $Project_GetEntriesResult
     */
    public function __construct($Project_GetEntriesResult)
    {
      $this->Project_GetEntriesResult = $Project_GetEntriesResult;
    }

    /**
     * @return ArrayOfEntryHandle
     */
    public function getProject_GetEntriesResult()
    {
      return $this->Project_GetEntriesResult;
    }

    /**
     * @param ArrayOfEntryHandle $Project_GetEntriesResult
     * @return \Economic\Project_GetEntriesResponse
     */
    public function setProject_GetEntriesResult($Project_GetEntriesResult)
    {
      $this->Project_GetEntriesResult = $Project_GetEntriesResult;
      return $this;
    }

}
