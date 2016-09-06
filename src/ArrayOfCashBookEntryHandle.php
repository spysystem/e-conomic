<?php

namespace Economic;

class ArrayOfCashBookEntryHandle implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var CashBookEntryHandle[] $CashBookEntryHandle
     */
    protected $CashBookEntryHandle = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CashBookEntryHandle[]
     */
    public function getCashBookEntryHandle()
    {
      return $this->CashBookEntryHandle;
    }

    /**
     * @param CashBookEntryHandle[] $CashBookEntryHandle
     * @return \Economic\ArrayOfCashBookEntryHandle
     */
    public function setCashBookEntryHandle(array $CashBookEntryHandle = null)
    {
      $this->CashBookEntryHandle = $CashBookEntryHandle;
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
      return isset($this->CashBookEntryHandle[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return CashBookEntryHandle
     */
    public function offsetGet($offset)
    {
      return $this->CashBookEntryHandle[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param CashBookEntryHandle $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->CashBookEntryHandle[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->CashBookEntryHandle[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return CashBookEntryHandle Return the current element
     */
    public function current()
    {
      return current($this->CashBookEntryHandle);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->CashBookEntryHandle);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->CashBookEntryHandle);
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
      reset($this->CashBookEntryHandle);
    }

    /**
     * Countable implementation
     *
     * @return CashBookEntryHandle Return count of elements
     */
    public function count()
    {
      return count($this->CashBookEntryHandle);
    }

}
