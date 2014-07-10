<?php

namespace Cubalider\Component\Code;

/**
 * @author Manuel Emilio Carpio <mectwork@gmail.com>
 */
interface GeneratorInterface
{
    /**
     * Generates a code.
     *
     * @return string
     */
    public function generate();
}
