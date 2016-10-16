<?php

namespace Mvc;

interface IView
{
    /**
     * Устанавливает контекст
     *
     * @param array $vars
     *
     * @return $this
     */
    public function setVars(array $vars);

    /**
     * Устанавливает переменную контекста
     *
     * @param string $name
     * @param $value
     *
     * @return $this
     */
    public function setVar(string $name, $value);

    /**
     * Возвращает переменную
     *
     * @param string $name
     *
     * @return mixed
     */
    public function getVar(string $name);

    /**
     * Возвращает весь контекст
     *
     * @return array
     */
    public function getVars();

    /**
     * Отрисовывает представление
     *
     * @return void
     */
    public function render();
}