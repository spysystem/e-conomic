<?php

namespace Economic;

class ArrayOfAccountingYearHandle implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var AccountingYearHandle[] $AccountingYearHandle
     */
    protected $AccountingYearHandle = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return AccountingYearHandle[]
     */
    public function getAccountingYearHandle()
    {
      return $this->AccountingYearHandle;
    }

    /**
     * @param AccountingYearHandle[] $AccountingYearHandle
     * @return \Economic\ArrayOfAccountingYearHandle
     */
    public function setAccountingYearHandle(array $AccountingYearHandle = null)
    {
      $this->AccountingYearHandle = $AccountingYearHandle;
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
      return isset($this->AccountingYearHandle[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return AccountingYearHandle
     */
    public function offsetGet($offset)
    {
      return $this->AccountingYearHandle[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param AccountingYearHandle $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->AccountingYearHandle[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->AccountingYearHandle[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return AccountingYearHandle Return the current element
     */
    public function current()
    {
      return current($this->AccountingYearHandle);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->AccountingYearHandle);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->AccountingYearHandle);
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
      reset($this->AccountingYearHandle);
    }

    /**
     * Countable implementation
     *
     * @return AccountingYearHandle Return count of elements
     */
    public function count()
    {
      return count($this->AccountingYearHandle);
    }

}
