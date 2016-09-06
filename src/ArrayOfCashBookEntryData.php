<?php

namespace Economic;

class ArrayOfCashBookEntryData implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var CashBookEntryData[] $CashBookEntryData
     */
    protected $CashBookEntryData = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CashBookEntryData[]
     */
    public function getCashBookEntryData()
    {
      return $this->CashBookEntryData;
    }

    /**
     * @param CashBookEntryData[] $CashBookEntryData
     * @return \Economic\ArrayOfCashBookEntryData
     */
    public function setCashBookEntryData(array $CashBookEntryData = null)
    {
      $this->CashBookEntryData = $CashBookEntryData;
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
      return isset($this->CashBookEntryData[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return CashBookEntryData
     */
    public function offsetGet($offset)
    {
      return $this->CashBookEntryData[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param CashBookEntryData $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->CashBookEntryData[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->CashBookEntryData[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return CashBookEntryData Return the current element
     */
    public function current()
    {
      return current($this->CashBookEntryData);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->CashBookEntryData);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->CashBookEntryData);
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
      reset($this->CashBookEntryData);
    }

    /**
     * Countable implementation
     *
     * @return CashBookEntryData Return count of elements
     */
    public function count()
    {
      return count($this->CashBookEntryData);
    }

}
