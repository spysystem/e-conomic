<?php

namespace Economic;

class ArrayOfDebtorContactData implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var DebtorContactData[] $DebtorContactData
     */
    protected $DebtorContactData = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return DebtorContactData[]
     */
    public function getDebtorContactData()
    {
      return $this->DebtorContactData;
    }

    /**
     * @param DebtorContactData[] $DebtorContactData
     * @return \Economic\ArrayOfDebtorContactData
     */
    public function setDebtorContactData(array $DebtorContactData = null)
    {
      $this->DebtorContactData = $DebtorContactData;
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
      return isset($this->DebtorContactData[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return DebtorContactData
     */
    public function offsetGet($offset)
    {
      return $this->DebtorContactData[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param DebtorContactData $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->DebtorContactData[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->DebtorContactData[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return DebtorContactData Return the current element
     */
    public function current()
    {
      return current($this->DebtorContactData);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->DebtorContactData);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->DebtorContactData);
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
      reset($this->DebtorContactData);
    }

    /**
     * Countable implementation
     *
     * @return DebtorContactData Return count of elements
     */
    public function count()
    {
      return count($this->DebtorContactData);
    }

}
