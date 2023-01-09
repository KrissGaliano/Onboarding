<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\PreventRequestsDuringMaintenance as Middleware;

class PreventRequestsDuringMaintenance extends Middleware
{
    /**
     * Los URLs que deben ser accesibles mientras el modo de mantenimiento está habilitado.
     *
     * @var array<int, string>
     */
    protected $except = [
        //
    ];
}
