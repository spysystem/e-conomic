<?php

namespace Economic;

class Activity_FindByNumberResponse
{

    /**
     * @var ActivityHandle $Activity_FindByNumberResult
     */
    protected $Activity_FindByNumberResult = null;

    /**
     * @param ActivityHandle $Activity_FindByNumberResult
     */
    public function __construct($Activity_FindByNumberResult)
    {
      $this->Activity_FindByNumberResult = $Activity_FindByNumberResult;
    }

    /**
     * @return ActivityHandle
     */
    public function getActivity_FindByNumberResult()
    {
      return $this->Activity_FindByNumberResult;
    }

    /**
     * @param ActivityHandle $Activity_FindByNumberResult
     * @return \Economic\Activity_FindByNumberResponse
     */
    public function setActivity_FindByNumberResult($Activity_FindByNumberResult)
    {
      $this->Activity_FindByNumberResult = $Activity_FindByNumberResult;
      return $this;
    }

}
