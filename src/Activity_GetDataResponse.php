<?php

namespace Economic;

class Activity_GetDataResponse
{

    /**
     * @var ActivityData $Activity_GetDataResult
     */
    protected $Activity_GetDataResult = null;

    /**
     * @param ActivityData $Activity_GetDataResult
     */
    public function __construct($Activity_GetDataResult)
    {
      $this->Activity_GetDataResult = $Activity_GetDataResult;
    }

    /**
     * @return ActivityData
     */
    public function getActivity_GetDataResult()
    {
      return $this->Activity_GetDataResult;
    }

    /**
     * @param ActivityData $Activity_GetDataResult
     * @return \Economic\Activity_GetDataResponse
     */
    public function setActivity_GetDataResult($Activity_GetDataResult)
    {
      $this->Activity_GetDataResult = $Activity_GetDataResult;
      return $this;
    }

}
