<?php

namespace Economic;

class TimeEntry_GetTextResponse
{

    /**
     * @var string $TimeEntry_GetTextResult
     */
    protected $TimeEntry_GetTextResult = null;

    /**
     * @param string $TimeEntry_GetTextResult
     */
    public function __construct($TimeEntry_GetTextResult)
    {
      $this->TimeEntry_GetTextResult = $TimeEntry_GetTextResult;
    }

    /**
     * @return string
     */
    public function getTimeEntry_GetTextResult()
    {
      return $this->TimeEntry_GetTextResult;
    }

    /**
     * @param string $TimeEntry_GetTextResult
     * @return \Economic\TimeEntry_GetTextResponse
     */
    public function setTimeEntry_GetTextResult($TimeEntry_GetTextResult)
    {
      $this->TimeEntry_GetTextResult = $TimeEntry_GetTextResult;
      return $this;
    }

}
