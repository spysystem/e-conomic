<?php

namespace Economic;

class Quotation_GetAllUpdated
{

    /**
     * @var \DateTime $fromDate
     */
    protected $fromDate = null;

    /**
     * @param \DateTime $fromDate
     */
    public function __construct(\DateTime $fromDate)
    {
      $this->fromDate = $fromDate->format(\DateTime::ATOM);
    }

    /**
     * @return \DateTime
     */
    public function getFromDate()
    {
      if ($this->fromDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->fromDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $fromDate
     * @return \Economic\Quotation_GetAllUpdated
     */
    public function setFromDate(\DateTime $fromDate)
    {
      $this->fromDate = $fromDate->format(\DateTime::ATOM);
      return $this;
    }

}
