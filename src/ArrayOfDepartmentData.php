<?php

namespace Economic;

class ArrayOfDepartmentData implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var DepartmentData[] $DepartmentData
     */
    protected $DepartmentData = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return DepartmentData[]
     */
    public function getDepartmentData()
    {
      return $this->DepartmentData;
    }

    /**
     * @param DepartmentData[] $DepartmentData
     * @return \Economic\ArrayOfDepartmentData
     */
    public function setDepartmentData(array $DepartmentData = null)
    {
      $this->DepartmentData = $DepartmentData;
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
      return isset($this->DepartmentData[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return DepartmentData
     */
    public function offsetGet($offset)
    {
      return $this->DepartmentData[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param DepartmentData $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->DepartmentData[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->DepartmentData[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return DepartmentData Return the current element
     */
    public function current()
    {
      return current($this->DepartmentData);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->DepartmentData);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->DepartmentData);
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
      reset($this->DepartmentData);
    }

    /**
     * Countable implementation
     *
     * @return DepartmentData Return count of elements
     */
    public function count()
    {
      return count($this->DepartmentData);
    }

}
