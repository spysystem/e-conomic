<?php

namespace Economic;

class ArrayOfEmployeeGroupHandle implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var EmployeeGroupHandle[] $EmployeeGroupHandle
     */
    protected $EmployeeGroupHandle = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return EmployeeGroupHandle[]
     */
    public function getEmployeeGroupHandle()
    {
      return $this->EmployeeGroupHandle;
    }

    /**
     * @param EmployeeGroupHandle[] $EmployeeGroupHandle
     * @return \Economic\ArrayOfEmployeeGroupHandle
     */
    public function setEmployeeGroupHandle(array $EmployeeGroupHandle = null)
    {
      $this->EmployeeGroupHandle = $EmployeeGroupHandle;
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
      return isset($this->EmployeeGroupHandle[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return EmployeeGroupHandle
     */
    public function offsetGet($offset)
    {
      return $this->EmployeeGroupHandle[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param EmployeeGroupHandle $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->EmployeeGroupHandle[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->EmployeeGroupHandle[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return EmployeeGroupHandle Return the current element
     */
    public function current()
    {
      return current($this->EmployeeGroupHandle);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->EmployeeGroupHandle);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->EmployeeGroupHandle);
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
      reset($this->EmployeeGroupHandle);
    }

    /**
     * Countable implementation
     *
     * @return EmployeeGroupHandle Return count of elements
     */
    public function count()
    {
      return count($this->EmployeeGroupHandle);
    }

}
