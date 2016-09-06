<?php

namespace Economic;

class ArrayOfActivityHandle implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ActivityHandle[] $ActivityHandle
     */
    protected $ActivityHandle = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ActivityHandle[]
     */
    public function getActivityHandle()
    {
      return $this->ActivityHandle;
    }

    /**
     * @param ActivityHandle[] $ActivityHandle
     * @return \Economic\ArrayOfActivityHandle
     */
    public function setActivityHandle(array $ActivityHandle = null)
    {
      $this->ActivityHandle = $ActivityHandle;
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
      return isset($this->ActivityHandle[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ActivityHandle
     */
    public function offsetGet($offset)
    {
      return $this->ActivityHandle[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ActivityHandle $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->ActivityHandle[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->ActivityHandle[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ActivityHandle Return the current element
     */
    public function current()
    {
      return current($this->ActivityHandle);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ActivityHandle);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ActivityHandle);
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
      reset($this->ActivityHandle);
    }

    /**
     * Countable implementation
     *
     * @return ActivityHandle Return count of elements
     */
    public function count()
    {
      return count($this->ActivityHandle);
    }

}
