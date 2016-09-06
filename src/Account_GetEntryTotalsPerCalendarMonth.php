<?php

namespace Economic;

class Account_GetEntryTotalsPerCalendarMonth
{

    /**
     * @var ArrayOfAccountHandle $accounts
     */
    protected $accounts = null;

    /**
     * @var \DateTime $first
     */
    protected $first = null;

    /**
     * @var \DateTime $last
     */
    protected $last = null;

    /**
     * @param ArrayOfAccountHandle $accounts
     * @param \DateTime $first
     * @param \DateTime $last
     */
    public function __construct($accounts, \DateTime $first, \DateTime $last)
    {
      $this->accounts = $accounts;
      $this->first = $first->format(\DateTime::ATOM);
      $this->last = $last->format(\DateTime::ATOM);
    }

    /**
     * @return ArrayOfAccountHandle
     */
    public function getAccounts()
    {
      return $this->accounts;
    }

    /**
     * @param ArrayOfAccountHandle $accounts
     * @return \Economic\Account_GetEntryTotalsPerCalendarMonth
     */
    public function setAccounts($accounts)
    {
      $this->accounts = $accounts;
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
     * @return \Economic\Account_GetEntryTotalsPerCalendarMonth
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
     * @return \Economic\Account_GetEntryTotalsPerCalendarMonth
     */
    public function setLast(\DateTime $last)
    {
      $this->last = $last->format(\DateTime::ATOM);
      return $this;
    }

}
