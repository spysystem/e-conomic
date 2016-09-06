<?php

namespace Economic;

class ArrayOfQuotationLineHandle implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var QuotationLineHandle[] $QuotationLineHandle
     */
    protected $QuotationLineHandle = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return QuotationLineHandle[]
     */
    public function getQuotationLineHandle()
    {
      return $this->QuotationLineHandle;
    }

    /**
     * @param QuotationLineHandle[] $QuotationLineHandle
     * @return \Economic\ArrayOfQuotationLineHandle
     */
    public function setQuotationLineHandle(array $QuotationLineHandle = null)
    {
      $this->QuotationLineHandle = $QuotationLineHandle;
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
      return isset($this->QuotationLineHandle[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return QuotationLineHandle
     */
    public function offsetGet($offset)
    {
      return $this->QuotationLineHandle[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param QuotationLineHandle $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->QuotationLineHandle[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->QuotationLineHandle[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return QuotationLineHandle Return the current element
     */
    public function current()
    {
      return current($this->QuotationLineHandle);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->QuotationLineHandle);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->QuotationLineHandle);
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
      reset($this->QuotationLineHandle);
    }

    /**
     * Countable implementation
     *
     * @return QuotationLineHandle Return count of elements
     */
    public function count()
    {
      return count($this->QuotationLineHandle);
    }

}
