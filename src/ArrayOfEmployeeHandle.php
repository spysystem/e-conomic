<?php

namespace Economic;

class ArrayOfEmployeeHandle implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var EmployeeHandle[] $EmployeeHandle
     */
    protected $EmployeeHandle = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return EmployeeHandle[]
     */
    public function getEmployeeHandle()
    {
      return $this->EmployeeHandle;
    }

    /**
     * @param EmployeeHandle[] $EmployeeHandle
     * @return \Economic\ArrayOfEmployeeHandle
     */
    public function setEmployeeHandle(array $EmployeeHandle = null)
    {
      $this->EmployeeHandle = $EmployeeHandle;
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
      return isset($this->EmployeeHandle[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return EmployeeHandle
     */
    public function offsetGet($offset)
    {
      return $this->EmployeeHandle[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param EmployeeHandle $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->EmployeeHandle[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->EmployeeHandle[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return EmployeeHandle Return the current element
     */
    public function current()
    {
      return current($this->EmployeeHandle);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->EmployeeHandle);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->EmployeeHandle);
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
      reset($this->EmployeeHandle);
    }

    /**
     * Countable implementation
     *
     * @return EmployeeHandle Return count of elements
     */
    public function count()
    {
      return count($this->EmployeeHandle);
    }

}
