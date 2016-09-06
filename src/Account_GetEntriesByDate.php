<?php

namespace Economic;

class Account_GetEntriesByDate
{

    /**
     * @var AccountHandle $accountHandle
     */
    protected $accountHandle = null;

    /**
     * @var \DateTime $first
     */
    protected $first = null;

    /**
     * @var \DateTime $last
     */
    protected $last = null;

    /**
     * @param AccountHandle $accountHandle
     * @param \DateTime $first
     * @param \DateTime $last
     */
    public function __construct($accountHandle, \DateTime $first, \DateTime $last)
    {
      $this->accountHandle = $accountHandle;
      $this->first = $first->format(\DateTime::ATOM);
      $this->last = $last->format(\DateTime::ATOM);
    }

    /**
     * @return AccountHandle
     */
    public function getAccountHandle()
    {
      return $this->accountHandle;
    }

    /**
     * @param AccountHandle $accountHandle
     * @return \Economic\Account_GetEntriesByDate
     */
    public function setAccountHandle($accountHandle)
    {
      $this->accountHandle = $accountHandle;
      return $this;
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
     * @return \Economic\Account_GetEntriesByDate
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
     * @return \Economic\Account_GetEntriesByDate
     */
    public function setLast(\DateTime $last)
    {
      $this->last = $last->format(\DateTime::ATOM);
      return $this;
    }

}
