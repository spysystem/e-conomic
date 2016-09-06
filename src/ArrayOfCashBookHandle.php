<?php

namespace Economic;

class ArrayOfCashBookHandle implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var CashBookHandle[] $CashBookHandle
     */
    protected $CashBookHandle = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CashBookHandle[]
     */
    public function getCashBookHandle()
    {
      return $this->CashBookHandle;
    }

    /**
     * @param CashBookHandle[] $CashBookHandle
     * @return \Economic\ArrayOfCashBookHandle
     */
    public function setCashBookHandle(array $CashBookHandle = null)
    {
      $this->CashBookHandle = $CashBookHandle;
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
      return isset($this->CashBookHandle[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return CashBookHandle
     */
    public function offsetGet($offset)
    {
      return $this->CashBookHandle[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param CashBookHandle $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->CashBookHandle[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->CashBookHandle[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return CashBookHandle Return the current element
     */
    public function current()
    {
      return current($this->CashBookHandle);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->CashBookHandle);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->CashBookHandle);
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
      reset($this->CashBookHandle);
    }

    /**
     * Countable implementation
     *
     * @return CashBookHandle Return count of elements
     */
    public function count()
    {
      return count($this->CashBookHandle);
    }

}
