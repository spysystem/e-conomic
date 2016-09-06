<?php

namespace Economic;

class Project_GetEntriesByDateResponse
{

    /**
     * @var ArrayOfEntryHandle $Project_GetEntriesByDateResult
     */
    protected $Project_GetEntriesByDateResult = null;

    /**
     * @param ArrayOfEntryHandle $Project_GetEntriesByDateResult
     */
    public function __construct($Project_GetEntriesByDateResult)
    {
      $this->Project_GetEntriesByDateResult = $Project_GetEntriesByDateResult;
    }

    /**
     * @return ArrayOfEntryHandle
     */
    public function getProject_GetEntriesByDateResult()
    {
      return $this->Project_GetEntriesByDateResult;
    }

    /**
     * @param ArrayOfEntryHandle $Project_GetEntriesByDateResult
     * @return \Economic\Project_GetEntriesByDateResponse
     */
    public function setProject_GetEntriesByDateResult($Project_GetEntriesByDateResult)
    {
      $this->Project_GetEntriesByDateResult = $Project_GetEntriesByDateResult;
      return $this;
    }

}
