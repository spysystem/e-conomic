<?php

namespace Economic;

class Project_GetMileageEntriesByDateResponse
{

    /**
     * @var ArrayOfMileageEntryHandle $Project_GetMileageEntriesByDateResult
     */
    protected $Project_GetMileageEntriesByDateResult = null;

    /**
     * @param ArrayOfMileageEntryHandle $Project_GetMileageEntriesByDateResult
     */
    public function __construct($Project_GetMileageEntriesByDateResult)
    {
      $this->Project_GetMileageEntriesByDateResult = $Project_GetMileageEntriesByDateResult;
    }

    /**
     * @return ArrayOfMileageEntryHandle
     */
    public function getProject_GetMileageEntriesByDateResult()
    {
      return $this->Project_GetMileageEntriesByDateResult;
    }

    /**
     * @param ArrayOfMileageEntryHandle $Project_GetMileageEntriesByDateResult
     * @return \Economic\Project_GetMileageEntriesByDateResponse
     */
    public function setProject_GetMileageEntriesByDateResult($Project_GetMileageEntriesByDateResult)
    {
      $this->Project_GetMileageEntriesByDateResult = $Project_GetMileageEntriesByDateResult;
      return $this;
    }

}
