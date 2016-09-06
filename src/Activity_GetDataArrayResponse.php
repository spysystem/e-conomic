<?php

namespace Economic;

class Activity_GetDataArrayResponse
{

    /**
     * @var ArrayOfActivityData $Activity_GetDataArrayResult
     */
    protected $Activity_GetDataArrayResult = null;

    /**
     * @param ArrayOfActivityData $Activity_GetDataArrayResult
     */
    public function __construct($Activity_GetDataArrayResult)
    {
      $this->Activity_GetDataArrayResult = $Activity_GetDataArrayResult;
    }

    /**
     * @return ArrayOfActivityData
     */
    public function getActivity_GetDataArrayResult()
    {
      return $this->Activity_GetDataArrayResult;
    }

    /**
     * @param ArrayOfActivityData $Activity_GetDataArrayResult
     * @return \Economic\Activity_GetDataArrayResponse
     */
    public function setActivity_GetDataArrayResult($Activity_GetDataArrayResult)
    {
      $this->Activity_GetDataArrayResult = $Activity_GetDataArrayResult;
      return $this;
    }

}
