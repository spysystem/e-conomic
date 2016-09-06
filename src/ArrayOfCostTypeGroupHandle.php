<?php

namespace Economic;

class ArrayOfCostTypeGroupHandle implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var CostTypeGroupHandle[] $CostTypeGroupHandle
     */
    protected $CostTypeGroupHandle = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CostTypeGroupHandle[]
     */
    public function getCostTypeGroupHandle()
    {
      return $this->CostTypeGroupHandle;
    }

    /**
     * @param CostTypeGroupHandle[] $CostTypeGroupHandle
     * @return \Economic\ArrayOfCostTypeGroupHandle
     */
    public function setCostTypeGroupHandle(array $CostTypeGroupHandle = null)
    {
      $this->CostTypeGroupHandle = $CostTypeGroupHandle;
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
      return isset($this->CostTypeGroupHandle[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return CostTypeGroupHandle
     */
    public function offsetGet($offset)
    {
      return $this->CostTypeGroupHandle[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param CostTypeGroupHandle $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->CostTypeGroupHandle[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->CostTypeGroupHandle[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return CostTypeGroupHandle Return the current element
     */
    public function current()
    {
      return current($this->CostTypeGroupHandle);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->CostTypeGroupHandle);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->CostTypeGroupHandle);
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
      reset($this->CostTypeGroupHandle);
    }

    /**
     * Countable implementation
     *
     * @return CostTypeGroupHandle Return count of elements
     */
    public function count()
    {
      return count($this->CostTypeGroupHandle);
    }

}
