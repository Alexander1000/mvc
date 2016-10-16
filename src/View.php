<?php

namespace Mvc;

abstract class View implements IView
{
    /**
     * Контекст
     *
     * @var array
     */
    protected $context;

    /**
     * {@inheritdoc}
     */
    public function setVars(array $vars)
    {
        $this->context = $vars;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function setVar(string $name, $value)
    {
        $this->context[$name] = $value;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getVar(string $name)
    {
        return $this->context[$name] ?? null;
    }

    /**
     * {@inheritdoc}
     */
    public function getVars()
    {
        return $this->context;
    }

    /**
     * {@inheritdoc}
     */
    abstract public function render();
}
