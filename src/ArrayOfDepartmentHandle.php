<?php

namespace Economic;

class ArrayOfDepartmentHandle implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var DepartmentHandle[] $DepartmentHandle
     */
    protected $DepartmentHandle = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return DepartmentHandle[]
     */
    public function getDepartmentHandle()
    {
      return $this->DepartmentHandle;
    }

    /**
     * @param DepartmentHandle[] $DepartmentHandle
     * @return \Economic\ArrayOfDepartmentHandle
     */
    public function setDepartmentHandle(array $DepartmentHandle = null)
    {
      $this->DepartmentHandle = $DepartmentHandle;
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
      return isset($this->DepartmentHandle[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return DepartmentHandle
     */
    public function offsetGet($offset)
    {
      return $this->DepartmentHandle[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param DepartmentHandle $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->DepartmentHandle[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->DepartmentHandle[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return DepartmentHandle Return the current element
     */
    public function current()
    {
      return current($this->DepartmentHandle);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->DepartmentHandle);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->DepartmentHandle);
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
      reset($this->DepartmentHandle);
    }

    /**
     * Countable implementation
     *
     * @return DepartmentHandle Return count of elements
     */
    public function count()
    {
      return count($this->DepartmentHandle);
    }

}
