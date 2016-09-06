<?php

namespace Economic;

class Quotation_FindByDateInterval
{

    /**
     * @var \DateTime $first
     */
    protected $first = null;

    /**
     * @var \DateTime $last
     */
    protected $last = null;

    /**
     * @param \DateTime $first
     * @param \DateTime $last
     */
    public function __construct(\DateTime $first, \DateTime $last)
    {
      $this->first = $first->format(\DateTime::ATOM);
      $this->last = $last->format(\DateTime::ATOM);
    }

    /**
     * @return \DateTime
     */
    public function getFirst()
    {
      if ($this->first == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->first);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $first
     * @return \Economic\Quotation_FindByDateInterval
     */
    public function setFirst(\DateTime $first)
    {
      $this->first = $first->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLast()
    {
      if ($this->last == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->last);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $last
     * @return \Economic\Quotation_FindByDateInterval
     */
    public function setLast(\DateTime $last)
    {
      $this->last = $last->format(\DateTime::ATOM);
      return $this;
    }

}
