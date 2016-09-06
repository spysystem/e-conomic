<?php

namespace Economic;

class ArrayOfDebtorEntryData implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var DebtorEntryData[] $DebtorEntryData
     */
    protected $DebtorEntryData = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return DebtorEntryData[]
     */
    public function getDebtorEntryData()
    {
      return $this->DebtorEntryData;
    }

    /**
     * @param DebtorEntryData[] $DebtorEntryData
     * @return \Economic\ArrayOfDebtorEntryData
     */
    public function setDebtorEntryData(array $DebtorEntryData = null)
    {
      $this->DebtorEntryData = $DebtorEntryData;
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
      return isset($this->DebtorEntryData[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return DebtorEntryData
     */
    public function offsetGet($offset)
    {
      return $this->DebtorEntryData[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param DebtorEntryData $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->DebtorEntryData[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->DebtorEntryData[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return DebtorEntryData Return the current element
     */
    public function current()
    {
      return current($this->DebtorEntryData);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->DebtorEntryData);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->DebtorEntryData);
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
      reset($this->DebtorEntryData);
    }

    /**
     * Countable implementation
     *
     * @return DebtorEntryData Return count of elements
     */
    public function count()
    {
      return count($this->DebtorEntryData);
    }

}
