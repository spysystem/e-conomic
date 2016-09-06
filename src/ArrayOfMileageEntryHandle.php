<?php

namespace Economic;

class ArrayOfMileageEntryHandle implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var MileageEntryHandle[] $MileageEntryHandle
     */
    protected $MileageEntryHandle = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return MileageEntryHandle[]
     */
    public function getMileageEntryHandle()
    {
      return $this->MileageEntryHandle;
    }

    /**
     * @param MileageEntryHandle[] $MileageEntryHandle
     * @return \Economic\ArrayOfMileageEntryHandle
     */
    public function setMileageEntryHandle(array $MileageEntryHandle = null)
    {
      $this->MileageEntryHandle = $MileageEntryHandle;
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
      return isset($this->MileageEntryHandle[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return MileageEntryHandle
     */
    public function offsetGet($offset)
    {
      return $this->MileageEntryHandle[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param MileageEntryHandle $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->MileageEntryHandle[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->MileageEntryHandle[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return MileageEntryHandle Return the current element
     */
    public function current()
    {
      return current($this->MileageEntryHandle);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->MileageEntryHandle);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->MileageEntryHandle);
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
      reset($this->MileageEntryHandle);
    }

    /**
     * Countable implementation
     *
     * @return MileageEntryHandle Return count of elements
     */
    public function count()
    {
      return count($this->MileageEntryHandle);
    }

}
