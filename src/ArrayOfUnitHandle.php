<?php

namespace Economic;

class ArrayOfUnitHandle implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var UnitHandle[] $UnitHandle
     */
    protected $UnitHandle = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return UnitHandle[]
     */
    public function getUnitHandle()
    {
      return $this->UnitHandle;
    }

    /**
     * @param UnitHandle[] $UnitHandle
     * @return \Economic\ArrayOfUnitHandle
     */
    public function setUnitHandle(array $UnitHandle = null)
    {
      $this->UnitHandle = $UnitHandle;
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
      return isset($this->UnitHandle[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return UnitHandle
     */
    public function offsetGet($offset)
    {
      return $this->UnitHandle[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param UnitHandle $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->UnitHandle[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->UnitHandle[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return UnitHandle Return the current element
     */
    public function current()
    {
      return current($this->UnitHandle);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->UnitHandle);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->UnitHandle);
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
      reset($this->UnitHandle);
    }

    /**
     * Countable implementation
     *
     * @return UnitHandle Return count of elements
     */
    public function count()
    {
      return count($this->UnitHandle);
    }

}
