<?php
App::uses('Component', 'Controller');

class BenchmarkComponent extends Component {
    protected $_marks = array();
    protected $_start = null;

    /**
     * __construct
     */
    public function __construct() {
        $this->_start = microtime(true);
        $this->mark(__FILE__, __LINE__, 0);
    }

    /**
     * __destruct
     */
    public function __destruct() {
        $this->mark(__FILE__, __LINE__);

        foreach ($this->_marks as $v) {
            $this->log(sprintf('[%05f] %s:%d'
                  , $v['time'], $v['file'], $v['no']), 'bench');
        }
    }

    /**
     * mark
     *
     * @param string $file
     * @param string $no
     * @param float $time
     */
    public function mark($file, $no, $time = null) {
        if (is_null($time)) {
            $time = microtime(true) - $this->_start;
        }

      $this->_marks[] = array(
          'time' => $time,
          'file' => $file,
          'no' => $no,
      );
    }
}

