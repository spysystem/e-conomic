<?php

namespace Economic;

class Activity_GetAllResponse
{

    /**
     * @var ArrayOfActivityHandle $Activity_GetAllResult
     */
    protected $Activity_GetAllResult = null;

    /**
     * @param ArrayOfActivityHandle $Activity_GetAllResult
     */
    public function __construct($Activity_GetAllResult)
    {
      $this->Activity_GetAllResult = $Activity_GetAllResult;
    }

    /**
     * @return ArrayOfActivityHandle
     */
    public function getActivity_GetAllResult()
    {
      return $this->Activity_GetAllResult;
    }

    /**
     * @param ArrayOfActivityHandle $Activity_GetAllResult
     * @return \Economic\Activity_GetAllResponse
     */
    public function setActivity_GetAllResult($Activity_GetAllResult)
    {
      $this->Activity_GetAllResult = $Activity_GetAllResult;
      return $this;
    }

}
