<?php

namespace Economic;

class ScannedDocument_GetFromDateResponse
{

    /**
     * @var \DateTime $ScannedDocument_GetFromDateResult
     */
    protected $ScannedDocument_GetFromDateResult = null;

    /**
     * @param \DateTime $ScannedDocument_GetFromDateResult
     */
    public function __construct(\DateTime $ScannedDocument_GetFromDateResult)
    {
      $this->ScannedDocument_GetFromDateResult = $ScannedDocument_GetFromDateResult->format(\DateTime::ATOM);
    }

    /**
     * @return \DateTime
     */
    public function getScannedDocument_GetFromDateResult()
    {
      if ($this->ScannedDocument_GetFromDateResult == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ScannedDocument_GetFromDateResult);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ScannedDocument_GetFromDateResult
     * @return \Economic\ScannedDocument_GetFromDateResponse
     */
    public function setScannedDocument_GetFromDateResult(\DateTime $ScannedDocument_GetFromDateResult)
    {
      $this->ScannedDocument_GetFromDateResult = $ScannedDocument_GetFromDateResult->format(\DateTime::ATOM);
      return $this;
    }

}
