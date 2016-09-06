<?php

namespace Economic;

class ArrayOfEmployeeData implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var EmployeeData[] $EmployeeData
     */
    protected $EmployeeData = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return EmployeeData[]
     */
    public function getEmployeeData()
    {
      return $this->EmployeeData;
    }

    /**
     * @param EmployeeData[] $EmployeeData
     * @return \Economic\ArrayOfEmployeeData
     */
    public function setEmployeeData(array $EmployeeData = null)
    {
      $this->EmployeeData = $EmployeeData;
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
      return isset($this->EmployeeData[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return EmployeeData
     */
    public function offsetGet($offset)
    {
      return $this->EmployeeData[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param EmployeeData $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->EmployeeData[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->EmployeeData[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return EmployeeData Return the current element
     */
    public function current()
    {
      return current($this->EmployeeData);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->EmployeeData);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->EmployeeData);
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
      reset($this->EmployeeData);
    }

    /**
     * Countable implementation
     *
     * @return EmployeeData Return count of elements
     */
    public function count()
    {
      return count($this->EmployeeData);
    }

}
