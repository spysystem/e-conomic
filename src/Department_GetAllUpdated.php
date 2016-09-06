<?php

namespace Economic;

class Department_GetAllUpdated
{

    /**
     * @var \DateTime $fromDate
     */
    protected $fromDate = null;

    /**
     * @var boolean $includeCalculatedProperties
     */
    protected $includeCalculatedProperties = null;

    /**
     * @param \DateTime $fromDate
     * @param boolean $includeCalculatedProperties
     */
    public function __construct(\DateTime $fromDate, $includeCalculatedProperties)
    {
      $this->fromDate = $fromDate->format(\DateTime::ATOM);
      $this->includeCalculatedProperties = $includeCalculatedProperties;
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
     * @return \Economic\Department_GetAllUpdated
     */
    public function setFromDate(\DateTime $fromDate)
    {
      $this->fromDate = $fromDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIncludeCalculatedProperties()
    {
      return $this->includeCalculatedProperties;
    }

    /**
     * @param boolean $includeCalculatedProperties
     * @return \Economic\Department_GetAllUpdated
     */
    public function setIncludeCalculatedProperties($includeCalculatedProperties)
    {
      $this->includeCalculatedProperties = $includeCalculatedProperties;
      return $this;
    }

}
