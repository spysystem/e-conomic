<?php

namespace Economic;

class ScannedDocument_GetToDateResponse
{

    /**
     * @var \DateTime $ScannedDocument_GetToDateResult
     */
    protected $ScannedDocument_GetToDateResult = null;

    /**
     * @param \DateTime $ScannedDocument_GetToDateResult
     */
    public function __construct(\DateTime $ScannedDocument_GetToDateResult)
    {
      $this->ScannedDocument_GetToDateResult = $ScannedDocument_GetToDateResult->format(\DateTime::ATOM);
    }

    /**
     * @return \DateTime
     */
    public function getScannedDocument_GetToDateResult()
    {
      if ($this->ScannedDocument_GetToDateResult == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ScannedDocument_GetToDateResult);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ScannedDocument_GetToDateResult
     * @return \Economic\ScannedDocument_GetToDateResponse
     */
    public function setScannedDocument_GetToDateResult(\DateTime $ScannedDocument_GetToDateResult)
    {
      $this->ScannedDocument_GetToDateResult = $ScannedDocument_GetToDateResult->format(\DateTime::ATOM);
      return $this;
    }

}
