<?php

namespace Economic;

class Activity_GetNumberResponse
{

    /**
     * @var int $Activity_GetNumberResult
     */
    protected $Activity_GetNumberResult = null;

    /**
     * @param int $Activity_GetNumberResult
     */
    public function __construct($Activity_GetNumberResult)
    {
      $this->Activity_GetNumberResult = $Activity_GetNumberResult;
    }

    /**
     * @return int
     */
    public function getActivity_GetNumberResult()
    {
      return $this->Activity_GetNumberResult;
    }

    /**
     * @param int $Activity_GetNumberResult
     * @return \Economic\Activity_GetNumberResponse
     */
    public function setActivity_GetNumberResult($Activity_GetNumberResult)
    {
      $this->Activity_GetNumberResult = $Activity_GetNumberResult;
      return $this;
    }

}
