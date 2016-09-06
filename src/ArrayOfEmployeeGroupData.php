<?php

namespace Economic;

class ArrayOfEmployeeGroupData implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var EmployeeGroupData[] $EmployeeGroupData
     */
    protected $EmployeeGroupData = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return EmployeeGroupData[]
     */
    public function getEmployeeGroupData()
    {
      return $this->EmployeeGroupData;
    }

    /**
     * @param EmployeeGroupData[] $EmployeeGroupData
     * @return \Economic\ArrayOfEmployeeGroupData
     */
    public function setEmployeeGroupData(array $EmployeeGroupData = null)
    {
      $this->EmployeeGroupData = $EmployeeGroupData;
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
      return isset($this->EmployeeGroupData[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return EmployeeGroupData
     */
    public function offsetGet($offset)
    {
      return $this->EmployeeGroupData[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param EmployeeGroupData $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->EmployeeGroupData[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->EmployeeGroupData[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return EmployeeGroupData Return the current element
     */
    public function current()
    {
      return current($this->EmployeeGroupData);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->EmployeeGroupData);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->EmployeeGroupData);
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
      reset($this->EmployeeGroupData);
    }

    /**
     * Countable implementation
     *
     * @return EmployeeGroupData Return count of elements
     */
    public function count()
    {
      return count($this->EmployeeGroupData);
    }

}
