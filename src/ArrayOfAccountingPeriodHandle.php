<?php

namespace Economic;

class ArrayOfAccountingPeriodHandle implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var AccountingPeriodHandle[] $AccountingPeriodHandle
     */
    protected $AccountingPeriodHandle = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return AccountingPeriodHandle[]
     */
    public function getAccountingPeriodHandle()
    {
      return $this->AccountingPeriodHandle;
    }

    /**
     * @param AccountingPeriodHandle[] $AccountingPeriodHandle
     * @return \Economic\ArrayOfAccountingPeriodHandle
     */
    public function setAccountingPeriodHandle(array $AccountingPeriodHandle = null)
    {
      $this->AccountingPeriodHandle = $AccountingPeriodHandle;
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
      return isset($this->AccountingPeriodHandle[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return AccountingPeriodHandle
     */
    public function offsetGet($offset)
    {
      return $this->AccountingPeriodHandle[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param AccountingPeriodHandle $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->AccountingPeriodHandle[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->AccountingPeriodHandle[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return AccountingPeriodHandle Return the current element
     */
    public function current()
    {
      return current($this->AccountingPeriodHandle);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->AccountingPeriodHandle);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->AccountingPeriodHandle);
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
      reset($this->AccountingPeriodHandle);
    }

    /**
     * Countable implementation
     *
     * @return AccountingPeriodHandle Return count of elements
     */
    public function count()
    {
      return count($this->AccountingPeriodHandle);
    }

}
