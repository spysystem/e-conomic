<?php

namespace Economic;

class CreditorEntry_GetDateResponse
{

    /**
     * @var \DateTime $CreditorEntry_GetDateResult
     */
    protected $CreditorEntry_GetDateResult = null;

    /**
     * @param \DateTime $CreditorEntry_GetDateResult
     */
    public function __construct(\DateTime $CreditorEntry_GetDateResult)
    {
      $this->CreditorEntry_GetDateResult = $CreditorEntry_GetDateResult->format(\DateTime::ATOM);
    }

    /**
     * @return \DateTime
     */
    public function getCreditorEntry_GetDateResult()
    {
      if ($this->CreditorEntry_GetDateResult == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->CreditorEntry_GetDateResult);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $CreditorEntry_GetDateResult
     * @return \Economic\CreditorEntry_GetDateResponse
     */
    public function setCreditorEntry_GetDateResult(\DateTime $CreditorEntry_GetDateResult)
    {
      $this->CreditorEntry_GetDateResult = $CreditorEntry_GetDateResult->format(\DateTime::ATOM);
      return $this;
    }

}
