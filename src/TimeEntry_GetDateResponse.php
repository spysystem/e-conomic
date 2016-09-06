<?php

namespace Economic;

class TimeEntry_GetDateResponse
{

    /**
     * @var \DateTime $TimeEntry_GetDateResult
     */
    protected $TimeEntry_GetDateResult = null;

    /**
     * @param \DateTime $TimeEntry_GetDateResult
     */
    public function __construct(\DateTime $TimeEntry_GetDateResult)
    {
      $this->TimeEntry_GetDateResult = $TimeEntry_GetDateResult->format(\DateTime::ATOM);
    }

    /**
     * @return \DateTime
     */
    public function getTimeEntry_GetDateResult()
    {
      if ($this->TimeEntry_GetDateResult == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->TimeEntry_GetDateResult);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $TimeEntry_GetDateResult
     * @return \Economic\TimeEntry_GetDateResponse
     */
    public function setTimeEntry_GetDateResult(\DateTime $TimeEntry_GetDateResult)
    {
      $this->TimeEntry_GetDateResult = $TimeEntry_GetDateResult->format(\DateTime::ATOM);
      return $this;
    }

}
