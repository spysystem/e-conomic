<?php

namespace Economic;

class ArrayOfAccountingPeriodData implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var AccountingPeriodData[] $AccountingPeriodData
     */
    protected $AccountingPeriodData = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return AccountingPeriodData[]
     */
    public function getAccountingPeriodData()
    {
      return $this->AccountingPeriodData;
    }

    /**
     * @param AccountingPeriodData[] $AccountingPeriodData
     * @return \Economic\ArrayOfAccountingPeriodData
     */
    public function setAccountingPeriodData(array $AccountingPeriodData = null)
    {
      $this->AccountingPeriodData = $AccountingPeriodData;
      return $this;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset An offset to check for
     * @return boolean true on success or false on failure
     */
    public function offsetExists($offset)
    {
      return isset($this->AccountingPeriodData[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return AccountingPeriodData
     */
    public function offsetGet($offset)
    {
      return $this->AccountingPeriodData[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param AccountingPeriodData $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->AccountingPeriodData[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->AccountingPeriodData[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return AccountingPeriodData Return the current element
     */
    public function current()
    {
      return current($this->AccountingPeriodData);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->AccountingPeriodData);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->AccountingPeriodData);
    }

    /**
     * Iterator implementation
     *
     * @return boolean Return the validity of the current position
     */
    public function valid()
    {
      return $this->key() !== null;
    }

    /**
     * Iterator implementation
     * Rewind the Iterator to the first element
     *
     * @return void
     */
    public function rewind()
    {
      reset($this->AccountingPeriodData);
    }

    /**
     * Countable implementation
     *
     * @return AccountingPeriodData Return count of elements
     */
    public function count()
    {
      return count($this->AccountingPeriodData);
    }

}
