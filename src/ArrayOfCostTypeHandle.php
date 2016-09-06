<?php

namespace Economic;

class ArrayOfCostTypeHandle implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var CostTypeHandle[] $CostTypeHandle
     */
    protected $CostTypeHandle = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CostTypeHandle[]
     */
    public function getCostTypeHandle()
    {
      return $this->CostTypeHandle;
    }

    /**
     * @param CostTypeHandle[] $CostTypeHandle
     * @return \Economic\ArrayOfCostTypeHandle
     */
    public function setCostTypeHandle(array $CostTypeHandle = null)
    {
      $this->CostTypeHandle = $CostTypeHandle;
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
      return isset($this->CostTypeHandle[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return CostTypeHandle
     */
    public function offsetGet($offset)
    {
      return $this->CostTypeHandle[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param CostTypeHandle $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->CostTypeHandle[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->CostTypeHandle[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return CostTypeHandle Return the current element
     */
    public function current()
    {
      return current($this->CostTypeHandle);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->CostTypeHandle);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->CostTypeHandle);
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
      reset($this->CostTypeHandle);
    }

    /**
     * Countable implementation
     *
     * @return CostTypeHandle Return count of elements
     */
    public function count()
    {
      return count($this->CostTypeHandle);
    }

}
