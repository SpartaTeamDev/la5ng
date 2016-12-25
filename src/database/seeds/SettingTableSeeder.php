<?php

use Illuminate\Database\Seeder;

/**
 * Class SettingTableSeeder
 * @author ntd1712
 */
class SettingTableSeeder extends Seeder
{
    public function data(Faker\Generator $faker)
    {
        return [
            [
                'name' => 'copyright',
                'value' => 'Copyright (c) 2016 ntd1712'
            ],[
                'name' => 'title',
                'value' => 'Admin Panel'
            ],[
                'name' => 'defaultRoute',
                'value' => 'setting.index'
            ],[
                'name' => 'imageAllowedExt',
                'value' => 'gif,jpeg,jpg,png'
            ],[
                'name' => 'imageMaxSize',
                'value' => 2097152
            ],[
                'name' => 'dateFormat',
                'value' => 'Y-m-d'
            ],[
                'name' => 'timeFormat',
                'value' => 'H:i:s'
            ],[
                'name' => 'itemsPerPage',
                'value' => 10
            ],[
                'name' => 'maxItemsPerPage',
                'value' => 100
            ],[
                'name' => 'minSearchChars',
                'value' => 4
            ]
        ];
    }
}