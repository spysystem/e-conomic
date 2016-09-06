<?php

namespace Economic;

class Activity_GetNameResponse
{

    /**
     * @var string $Activity_GetNameResult
     */
    protected $Activity_GetNameResult = null;

    /**
     * @param string $Activity_GetNameResult
     */
    public function __construct($Activity_GetNameResult)
    {
      $this->Activity_GetNameResult = $Activity_GetNameResult;
    }

    /**
     * @return string
     */
    public function getActivity_GetNameResult()
    {
      return $this->Activity_GetNameResult;
    }

    /**
     * @param string $Activity_GetNameResult
     * @return \Economic\Activity_GetNameResponse
     */
    public function setActivity_GetNameResult($Activity_GetNameResult)
    {
      $this->Activity_GetNameResult = $Activity_GetNameResult;
      return $this;
    }

}
