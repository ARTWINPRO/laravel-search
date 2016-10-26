<?php

/**
 * Created by ARTWIN.PRO
 *
 * Date: 26.10.16
 */
namespace Artwinpro\LaravelSearch;

use Input;

trait SearchTrait
{

    public function scopeSearch($query)
    {
        foreach (Input::all() as $key => $value) {
            if (in_array($key, $this->searchable)) {
                $query = $query->where($key, 'LIKE', '%' . $value . '%');
            }
        }

        return $query;

    }
}