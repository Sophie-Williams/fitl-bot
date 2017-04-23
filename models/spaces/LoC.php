<?php
  // a Line of Communication object on map
  class LoC extends space
  {
    // a loc is either a highway or river
    public $type;

    // econ is either 0 1 or 2
    public $econ;

    function __construct($_isCoastal, $_country, $_type, $_econ)
    {
      parent::__construct($_isCoastal, $_country);
      $this->type = $_type;
      $this->econ = $_econ;
    }
  }
