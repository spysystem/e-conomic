<?php

namespace Economic;

class ArrayOfProjectData implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ProjectData[] $ProjectData
     */
    protected $ProjectData = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ProjectData[]
     */
    public function getProjectData()
    {
      return $this->ProjectData;
    }

    /**
     * @param ProjectData[] $ProjectData
     * @return \Economic\ArrayOfProjectData
     */
    public function setProjectData(array $ProjectData = null)
    {
      $this->ProjectData = $ProjectData;
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
      return isset($this->ProjectData[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ProjectData
     */
    public function offsetGet($offset)
    {
      return $this->ProjectData[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ProjectData $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      $this->ProjectData[$offset] = $value;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->ProjectData[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ProjectData Return the current element
     */
    public function current()
    {
      return current($this->ProjectData);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ProjectData);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ProjectData);
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
      reset($this->ProjectData);
    }

    /**
     * Countable implementation
     *
     * @return ProjectData Return count of elements
     */
    public function count()
    {
      return count($this->ProjectData);
    }

}
