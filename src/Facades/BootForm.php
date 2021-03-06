<?php

namespace Galahad\BootForms\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @codeCoverageIgnore
 * @mixin \Galahad\BootForms\BasicFormBuilder
 * @mixin \Galahad\BootForms\HorizontalFormBuilder
 * @mixin \Galahad\Forms\FormBuilder
 */
class BootForm extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'galahad.bootforms';
    }
}
