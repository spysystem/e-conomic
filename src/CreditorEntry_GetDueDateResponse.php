<?php

namespace Economic;

class CreditorEntry_GetDueDateResponse
{

    /**
     * @var \DateTime $CreditorEntry_GetDueDateResult
     */
    protected $CreditorEntry_GetDueDateResult = null;

    /**
     * @param \DateTime $CreditorEntry_GetDueDateResult
     */
    public function __construct(\DateTime $CreditorEntry_GetDueDateResult)
    {
      $this->CreditorEntry_GetDueDateResult = $CreditorEntry_GetDueDateResult->format(\DateTime::ATOM);
    }

    /**
     * @return \DateTime
     */
    public function getCreditorEntry_GetDueDateResult()
    {
      if ($this->CreditorEntry_GetDueDateResult == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->CreditorEntry_GetDueDateResult);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $CreditorEntry_GetDueDateResult
     * @return \Economic\CreditorEntry_GetDueDateResponse
     */
    public function setCreditorEntry_GetDueDateResult(\DateTime $CreditorEntry_GetDueDateResult)
    {
      $this->CreditorEntry_GetDueDateResult = $CreditorEntry_GetDueDateResult->format(\DateTime::ATOM);
      return $this;
    }

}
