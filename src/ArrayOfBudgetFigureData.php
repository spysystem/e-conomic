<?php

namespace Economic;

class ArrayOfBudgetFigureData implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var BudgetFigureData[] $BudgetFigureData
     */
    protected $BudgetFigureData = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return BudgetFigureData[]
     */
    public function getBudgetFigureData()
    {
      return $this->BudgetFigureData;
    }

    /**
     * @param BudgetFigureData[] $BudgetFigureData
     * @return \Economic\ArrayOfBudgetFigureData
     */
    public function setBudgetFigureData(array $BudgetFigureData = null)
    {
      $this->BudgetFigureData = $BudgetFigureData;
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
      return isset($this->BudgetFigureData[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return BudgetFigureData
     */
    public function offsetGet($offset)
    {
      return $this->BudgetFigureData[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param BudgetFigureData $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->BudgetFigureData[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->BudgetFigureData[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return BudgetFigureData Return the current element
     */
    public function current()
    {
      return current($this->BudgetFigureData);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->BudgetFigureData);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->BudgetFigureData);
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
      reset($this->BudgetFigureData);
    }

    /**
     * Countable implementation
     *
     * @return BudgetFigureData Return count of elements
     */
    public function count()
    {
      return count($this->BudgetFigureData);
    }

}
