<?php

namespace Economic;

class ArrayOfBudgetFigureHandle implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var BudgetFigureHandle[] $BudgetFigureHandle
     */
    protected $BudgetFigureHandle = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return BudgetFigureHandle[]
     */
    public function getBudgetFigureHandle()
    {
      return $this->BudgetFigureHandle;
    }

    /**
     * @param BudgetFigureHandle[] $BudgetFigureHandle
     * @return \Economic\ArrayOfBudgetFigureHandle
     */
    public function setBudgetFigureHandle(array $BudgetFigureHandle = null)
    {
      $this->BudgetFigureHandle = $BudgetFigureHandle;
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
      return isset($this->BudgetFigureHandle[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return BudgetFigureHandle
     */
    public function offsetGet($offset)
    {
      return $this->BudgetFigureHandle[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param BudgetFigureHandle $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->BudgetFigureHandle[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->BudgetFigureHandle[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return BudgetFigureHandle Return the current element
     */
    public function current()
    {
      return current($this->BudgetFigureHandle);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->BudgetFigureHandle);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->BudgetFigureHandle);
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
      reset($this->BudgetFigureHandle);
    }

    /**
     * Countable implementation
     *
     * @return BudgetFigureHandle Return count of elements
     */
    public function count()
    {
      return count($this->BudgetFigureHandle);
    }

}
