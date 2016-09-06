<?php

namespace Economic;

class ArrayOfPriceGroupHandle implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var PriceGroupHandle[] $PriceGroupHandle
     */
    protected $PriceGroupHandle = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return PriceGroupHandle[]
     */
    public function getPriceGroupHandle()
    {
      return $this->PriceGroupHandle;
    }

    /**
     * @param PriceGroupHandle[] $PriceGroupHandle
     * @return \Economic\ArrayOfPriceGroupHandle
     */
    public function setPriceGroupHandle(array $PriceGroupHandle = null)
    {
      $this->PriceGroupHandle = $PriceGroupHandle;
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
      return isset($this->PriceGroupHandle[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return PriceGroupHandle
     */
    public function offsetGet($offset)
    {
      return $this->PriceGroupHandle[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param PriceGroupHandle $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->PriceGroupHandle[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->PriceGroupHandle[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return PriceGroupHandle Return the current element
     */
    public function current()
    {
      return current($this->PriceGroupHandle);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->PriceGroupHandle);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->PriceGroupHandle);
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
      reset($this->PriceGroupHandle);
    }

    /**
     * Countable implementation
     *
     * @return PriceGroupHandle Return count of elements
     */
    public function count()
    {
      return count($this->PriceGroupHandle);
    }

}
