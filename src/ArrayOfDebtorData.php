<?php

namespace Economic;

class ArrayOfDebtorData implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var DebtorData[] $DebtorData
     */
    protected $DebtorData = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return DebtorData[]
     */
    public function getDebtorData()
    {
      return $this->DebtorData;
    }

    /**
     * @param DebtorData[] $DebtorData
     * @return \Economic\ArrayOfDebtorData
     */
    public function setDebtorData(array $DebtorData = null)
    {
      $this->DebtorData = $DebtorData;
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
      return isset($this->DebtorData[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return DebtorData
     */
    public function offsetGet($offset)
    {
      return $this->DebtorData[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param DebtorData $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->DebtorData[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->DebtorData[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return DebtorData Return the current element
     */
    public function current()
    {
      return current($this->DebtorData);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->DebtorData);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->DebtorData);
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
      reset($this->DebtorData);
    }

    /**
     * Countable implementation
     *
     * @return DebtorData Return count of elements
     */
    public function count()
    {
      return count($this->DebtorData);
    }

}
