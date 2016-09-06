<?php

namespace Economic;

class ArrayOfQuotationHandle implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var QuotationHandle[] $QuotationHandle
     */
    protected $QuotationHandle = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return QuotationHandle[]
     */
    public function getQuotationHandle()
    {
      return $this->QuotationHandle;
    }

    /**
     * @param QuotationHandle[] $QuotationHandle
     * @return \Economic\ArrayOfQuotationHandle
     */
    public function setQuotationHandle(array $QuotationHandle = null)
    {
      $this->QuotationHandle = $QuotationHandle;
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
      return isset($this->QuotationHandle[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return QuotationHandle
     */
    public function offsetGet($offset)
    {
      return $this->QuotationHandle[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param QuotationHandle $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->QuotationHandle[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->QuotationHandle[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return QuotationHandle Return the current element
     */
    public function current()
    {
      return current($this->QuotationHandle);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->QuotationHandle);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->QuotationHandle);
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
      reset($this->QuotationHandle);
    }

    /**
     * Countable implementation
     *
     * @return QuotationHandle Return count of elements
     */
    public function count()
    {
      return count($this->QuotationHandle);
    }

}
