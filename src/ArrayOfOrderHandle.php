<?php

namespace Economic;

class ArrayOfOrderHandle implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var OrderHandle[] $OrderHandle
     */
    protected $OrderHandle = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return OrderHandle[]
     */
    public function getOrderHandle()
    {
      return $this->OrderHandle;
    }

    /**
     * @param OrderHandle[] $OrderHandle
     * @return \Economic\ArrayOfOrderHandle
     */
    public function setOrderHandle(array $OrderHandle = null)
    {
      $this->OrderHandle = $OrderHandle;
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
      return isset($this->OrderHandle[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return OrderHandle
     */
    public function offsetGet($offset)
    {
      return $this->OrderHandle[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param OrderHandle $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->OrderHandle[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->OrderHandle[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return OrderHandle Return the current element
     */
    public function current()
    {
      return current($this->OrderHandle);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->OrderHandle);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->OrderHandle);
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
      reset($this->OrderHandle);
    }

    /**
     * Countable implementation
     *
     * @return OrderHandle Return count of elements
     */
    public function count()
    {
      return count($this->OrderHandle);
    }

}
