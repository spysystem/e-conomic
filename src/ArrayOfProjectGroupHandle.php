<?php

namespace Economic;

class ArrayOfProjectGroupHandle implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ProjectGroupHandle[] $ProjectGroupHandle
     */
    protected $ProjectGroupHandle = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ProjectGroupHandle[]
     */
    public function getProjectGroupHandle()
    {
      return $this->ProjectGroupHandle;
    }

    /**
     * @param ProjectGroupHandle[] $ProjectGroupHandle
     * @return \Economic\ArrayOfProjectGroupHandle
     */
    public function setProjectGroupHandle(array $ProjectGroupHandle = null)
    {
      $this->ProjectGroupHandle = $ProjectGroupHandle;
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
      return isset($this->ProjectGroupHandle[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ProjectGroupHandle
     */
    public function offsetGet($offset)
    {
      return $this->ProjectGroupHandle[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ProjectGroupHandle $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->ProjectGroupHandle[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->ProjectGroupHandle[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ProjectGroupHandle Return the current element
     */
    public function current()
    {
      return current($this->ProjectGroupHandle);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ProjectGroupHandle);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ProjectGroupHandle);
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
      reset($this->ProjectGroupHandle);
    }

    /**
     * Countable implementation
     *
     * @return ProjectGroupHandle Return count of elements
     */
    public function count()
    {
      return count($this->ProjectGroupHandle);
    }

}
