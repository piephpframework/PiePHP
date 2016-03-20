<?php

namespace App\Controllers;

use Application\Controller;
use Application\Scope;

class Info extends Controller {

    public function main(Scope $scope){

        $scope->info = [
            'pieVersion' => '1.0.0',
            'pieVersionName' => 'Super<br>Simple',
        ];

        $scope->people = [
            'Billy' => [
                'age' => 12,
                'animals' => ['dog', 'fish']
            ],
            'Bob' => [
                'age' => 23,
                'animals' => ['dog', 'cat', 'monkey']
            ],
            'Joe' => [
                'age' => 56,
                'animals' => ['horse', 'pig', 'cow']
            ],
        ];

        return view('example/info', $scope);
    }

}