<?php

namespace Economic;

class ArrayOfOrderLineHandle implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var OrderLineHandle[] $OrderLineHandle
     */
    protected $OrderLineHandle = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return OrderLineHandle[]
     */
    public function getOrderLineHandle()
    {
      return $this->OrderLineHandle;
    }

    /**
     * @param OrderLineHandle[] $OrderLineHandle
     * @return \Economic\ArrayOfOrderLineHandle
     */
    public function setOrderLineHandle(array $OrderLineHandle = null)
    {
      $this->OrderLineHandle = $OrderLineHandle;
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
      return isset($this->OrderLineHandle[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return OrderLineHandle
     */
    public function offsetGet($offset)
    {
      return $this->OrderLineHandle[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param OrderLineHandle $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->OrderLineHandle[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->OrderLineHandle[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return OrderLineHandle Return the current element
     */
    public function current()
    {
      return current($this->OrderLineHandle);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->OrderLineHandle);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->OrderLineHandle);
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
      reset($this->OrderLineHandle);
    }

    /**
     * Countable implementation
     *
     * @return OrderLineHandle Return count of elements
     */
    public function count()
    {
      return count($this->OrderLineHandle);
    }

}
