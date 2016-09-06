<?php

namespace Economic;

class ArrayOfUnitData implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var UnitData[] $UnitData
     */
    protected $UnitData = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return UnitData[]
     */
    public function getUnitData()
    {
      return $this->UnitData;
    }

    /**
     * @param UnitData[] $UnitData
     * @return \Economic\ArrayOfUnitData
     */
    public function setUnitData(array $UnitData = null)
    {
      $this->UnitData = $UnitData;
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
      return isset($this->UnitData[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return UnitData
     */
    public function offsetGet($offset)
    {
      return $this->UnitData[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param UnitData $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->UnitData[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->UnitData[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return UnitData Return the current element
     */
    public function current()
    {
      return current($this->UnitData);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->UnitData);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->UnitData);
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
      reset($this->UnitData);
    }

    /**
     * Countable implementation
     *
     * @return UnitData Return count of elements
     */
    public function count()
    {
      return count($this->UnitData);
    }

}
