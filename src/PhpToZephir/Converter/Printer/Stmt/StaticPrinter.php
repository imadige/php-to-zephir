<?php

namespace PhpToZephir\Converter\Printer\Stmt;

use PhpToZephir\Converter\Dispatcher;
use PhpToZephir\Logger;
use PhpParser\Node\Stmt;

class StaticPrinter
{
    /**
     * @var Dispatcher
     */
    private $dispatcher = null;
    /**
     * @var Logger
     */
    private $logger = null;

    /**
     * @param Dispatcher $dispatcher
     * @param Logger $logger
     */
    public function __construct(Dispatcher $dispatcher, Logger $logger)
    {
        $this->dispatcher = $dispatcher;
        $this->logger     = $logger;
    }

    public static function getType()
    {
        return "pStmt_Static";
    }

    public function convert(Stmt\Static_ $node) {
        return 'static ' . $this->dispatcher->pCommaSeparated($node->vars) . ';';
    }
}
