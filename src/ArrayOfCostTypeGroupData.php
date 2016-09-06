<?php

namespace Economic;

class ArrayOfCostTypeGroupData implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var CostTypeGroupData[] $CostTypeGroupData
     */
    protected $CostTypeGroupData = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CostTypeGroupData[]
     */
    public function getCostTypeGroupData()
    {
      return $this->CostTypeGroupData;
    }

    /**
     * @param CostTypeGroupData[] $CostTypeGroupData
     * @return \Economic\ArrayOfCostTypeGroupData
     */
    public function setCostTypeGroupData(array $CostTypeGroupData = null)
    {
      $this->CostTypeGroupData = $CostTypeGroupData;
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
      return isset($this->CostTypeGroupData[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return CostTypeGroupData
     */
    public function offsetGet($offset)
    {
      return $this->CostTypeGroupData[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param CostTypeGroupData $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->CostTypeGroupData[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->CostTypeGroupData[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return CostTypeGroupData Return the current element
     */
    public function current()
    {
      return current($this->CostTypeGroupData);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->CostTypeGroupData);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->CostTypeGroupData);
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
      reset($this->CostTypeGroupData);
    }

    /**
     * Countable implementation
     *
     * @return CostTypeGroupData Return count of elements
     */
    public function count()
    {
      return count($this->CostTypeGroupData);
    }

}
