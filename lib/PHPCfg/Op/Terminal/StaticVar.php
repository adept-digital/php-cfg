<?php

namespace PHPCfg\Op\Terminal;

use PHPCfg\Block;
use PHPCfg\Operand;
use PHPCfg\Op\Terminal;

class StaticVar extends Terminal {
    public $var;
    public $default;
    public $defaultVar;

    public function __construct(Operand $var, Block $defaultBlock = null, Operand $defaultVar = null, array $attributes = array()) {
        parent::__construct($attributes);
        $this->var = $var;
        $this->defaultBlock = $defaultBlock;
        $this->defaultVar = $defaultVar;
    }

    public function getVariableNames() {
        return ['var', 'defaultVar'];
    }

    public function getSubBlocks() {
        return ['defaultBlock'];
    }
}