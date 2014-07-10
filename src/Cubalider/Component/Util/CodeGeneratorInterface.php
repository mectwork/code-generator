<?php

namespace Cubalider\Component\Util;

/**
 * @author Manuel Emilio Carpio <mectwork@gmail.com>
 */
interface CodeGeneratorInterface
{
    /**
     * Generates a code.
     *
     * @return string
     */
    public function generate();
}
