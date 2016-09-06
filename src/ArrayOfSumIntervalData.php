<?php

namespace Economic;

class ArrayOfSumIntervalData implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var SumIntervalData[] $SumIntervalData
     */
    protected $SumIntervalData = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SumIntervalData[]
     */
    public function getSumIntervalData()
    {
      return $this->SumIntervalData;
    }

    /**
     * @param SumIntervalData[] $SumIntervalData
     * @return \Economic\ArrayOfSumIntervalData
     */
    public function setSumIntervalData(array $SumIntervalData = null)
    {
      $this->SumIntervalData = $SumIntervalData;
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
      return isset($this->SumIntervalData[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return SumIntervalData
     */
    public function offsetGet($offset)
    {
      return $this->SumIntervalData[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param SumIntervalData $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->SumIntervalData[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->SumIntervalData[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return SumIntervalData Return the current element
     */
    public function current()
    {
      return current($this->SumIntervalData);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->SumIntervalData);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->SumIntervalData);
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
      reset($this->SumIntervalData);
    }

    /**
     * Countable implementation
     *
     * @return SumIntervalData Return count of elements
     */
    public function count()
    {
      return count($this->SumIntervalData);
    }

}
