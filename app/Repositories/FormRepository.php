<?php
/**
 * Created by PhpStorm.
 * User: smartrahat
 * Date: 10/12/2017
 * Time: 6:31 PM
 */

namespace App\Repositories;


class FormRepository
{

    public function options()
    {
        return [
            'option 1',
            'option 2',
            'option 3',
            'option 4',
            'option 5'
        ];
    }

    public function states()
    {
        return [
            'Alabama',
            'Alaska',
            'California',
            'Delaware',
            'Tennessee',
            'Texas',
            'Washington'
        ];
    }

}