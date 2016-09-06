<?php

namespace Economic;

class Activity_FindByNumberListResponse
{

    /**
     * @var ArrayOfActivityHandle $Activity_FindByNumberListResult
     */
    protected $Activity_FindByNumberListResult = null;

    /**
     * @param ArrayOfActivityHandle $Activity_FindByNumberListResult
     */
    public function __construct($Activity_FindByNumberListResult)
    {
      $this->Activity_FindByNumberListResult = $Activity_FindByNumberListResult;
    }

    /**
     * @return ArrayOfActivityHandle
     */
    public function getActivity_FindByNumberListResult()
    {
      return $this->Activity_FindByNumberListResult;
    }

    /**
     * @param ArrayOfActivityHandle $Activity_FindByNumberListResult
     * @return \Economic\Activity_FindByNumberListResponse
     */
    public function setActivity_FindByNumberListResult($Activity_FindByNumberListResult)
    {
      $this->Activity_FindByNumberListResult = $Activity_FindByNumberListResult;
      return $this;
    }

}
