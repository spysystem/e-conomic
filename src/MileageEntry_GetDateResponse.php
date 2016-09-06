<?php

namespace Economic;

class MileageEntry_GetDateResponse
{

    /**
     * @var \DateTime $MileageEntry_GetDateResult
     */
    protected $MileageEntry_GetDateResult = null;

    /**
     * @param \DateTime $MileageEntry_GetDateResult
     */
    public function __construct(\DateTime $MileageEntry_GetDateResult)
    {
      $this->MileageEntry_GetDateResult = $MileageEntry_GetDateResult->format(\DateTime::ATOM);
    }

    /**
     * @return \DateTime
     */
    public function getMileageEntry_GetDateResult()
    {
      if ($this->MileageEntry_GetDateResult == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->MileageEntry_GetDateResult);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $MileageEntry_GetDateResult
     * @return \Economic\MileageEntry_GetDateResponse
     */
    public function setMileageEntry_GetDateResult(\DateTime $MileageEntry_GetDateResult)
    {
      $this->MileageEntry_GetDateResult = $MileageEntry_GetDateResult->format(\DateTime::ATOM);
      return $this;
    }

}
