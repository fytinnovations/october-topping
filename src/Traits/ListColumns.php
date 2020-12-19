<?php

namespace Fytinnovations\OctoberTopping\Traits;

trait ListColumns
{
    public function getFytListColumnTypes()
    {
        return [
            'uppercase' => [$this, 'evalUppercaseListColumn'],
            'capitalize' => [$this, 'evalCapitalizeListColumn']
        ];
    }

    public function evalUppercaseListColumn($value)
    {
        return strtoupper($value);
    }

    public function evalCapitalizeListColumn($value)
    {
        return ucfirst($value);
    }
}
