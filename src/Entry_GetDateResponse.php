<?php

namespace Economic;

class Entry_GetDateResponse
{

    /**
     * @var \DateTime $Entry_GetDateResult
     */
    protected $Entry_GetDateResult = null;

    /**
     * @param \DateTime $Entry_GetDateResult
     */
    public function __construct(\DateTime $Entry_GetDateResult)
    {
      $this->Entry_GetDateResult = $Entry_GetDateResult->format(\DateTime::ATOM);
    }

    /**
     * @return \DateTime
     */
    public function getEntry_GetDateResult()
    {
      if ($this->Entry_GetDateResult == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->Entry_GetDateResult);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $Entry_GetDateResult
     * @return \Economic\Entry_GetDateResponse
     */
    public function setEntry_GetDateResult(\DateTime $Entry_GetDateResult)
    {
      $this->Entry_GetDateResult = $Entry_GetDateResult->format(\DateTime::ATOM);
      return $this;
    }

}
