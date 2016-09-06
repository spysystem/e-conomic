<?php

namespace Economic;

class ArrayOfDebtorGroupData implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var DebtorGroupData[] $DebtorGroupData
     */
    protected $DebtorGroupData = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return DebtorGroupData[]
     */
    public function getDebtorGroupData()
    {
      return $this->DebtorGroupData;
    }

    /**
     * @param DebtorGroupData[] $DebtorGroupData
     * @return \Economic\ArrayOfDebtorGroupData
     */
    public function setDebtorGroupData(array $DebtorGroupData = null)
    {
      $this->DebtorGroupData = $DebtorGroupData;
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
      return isset($this->DebtorGroupData[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return DebtorGroupData
     */
    public function offsetGet($offset)
    {
      return $this->DebtorGroupData[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param DebtorGroupData $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->DebtorGroupData[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->DebtorGroupData[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return DebtorGroupData Return the current element
     */
    public function current()
    {
      return current($this->DebtorGroupData);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->DebtorGroupData);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->DebtorGroupData);
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
      reset($this->DebtorGroupData);
    }

    /**
     * Countable implementation
     *
     * @return DebtorGroupData Return count of elements
     */
    public function count()
    {
      return count($this->DebtorGroupData);
    }

}
