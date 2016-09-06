<?php

namespace Economic;

class CashBookEntry_SetDueDate
{

    /**
     * @var CashBookEntryHandle $cashBookEntryHandle
     */
    protected $cashBookEntryHandle = null;

    /**
     * @var \DateTime $value
     */
    protected $value = null;

    /**
     * @param CashBookEntryHandle $cashBookEntryHandle
     * @param \DateTime $value
     */
    public function __construct($cashBookEntryHandle, \DateTime $value)
    {
      $this->cashBookEntryHandle = $cashBookEntryHandle;
      $this->value = $value->format(\DateTime::ATOM);
    }

    /**
     * @return CashBookEntryHandle
     */
    public function getCashBookEntryHandle()
    {
      return $this->cashBookEntryHandle;
    }

    /**
     * @param CashBookEntryHandle $cashBookEntryHandle
     * @return \Economic\CashBookEntry_SetDueDate
     */
    public function setCashBookEntryHandle($cashBookEntryHandle)
    {
      $this->cashBookEntryHandle = $cashBookEntryHandle;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getValue()
    {
      if ($this->value == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->value);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $value
     * @return \Economic\CashBookEntry_SetDueDate
     */
    public function setValue(\DateTime $value)
    {
      $this->value = $value->format(\DateTime::ATOM);
      return $this;
    }

}
