<?php

namespace Economic;

class ArrayOfCostTypeData implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var CostTypeData[] $CostTypeData
     */
    protected $CostTypeData = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CostTypeData[]
     */
    public function getCostTypeData()
    {
      return $this->CostTypeData;
    }

    /**
     * @param CostTypeData[] $CostTypeData
     * @return \Economic\ArrayOfCostTypeData
     */
    public function setCostTypeData(array $CostTypeData = null)
    {
      $this->CostTypeData = $CostTypeData;
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
      return isset($this->CostTypeData[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return CostTypeData
     */
    public function offsetGet($offset)
    {
      return $this->CostTypeData[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param CostTypeData $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->CostTypeData[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->CostTypeData[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return CostTypeData Return the current element
     */
    public function current()
    {
      return current($this->CostTypeData);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->CostTypeData);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->CostTypeData);
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
      reset($this->CostTypeData);
    }

    /**
     * Countable implementation
     *
     * @return CostTypeData Return count of elements
     */
    public function count()
    {
      return count($this->CostTypeData);
    }

}
