<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    return view('jobs' , [
        'jobs' => [
            [   
                'id' => 1,
                'title' => 'Code 14 Driver',
                'salary' => 'R180, 000'
            ],
            [   
                'id' => 2,
                'title' => 'Web Developer',
                'salary' => 'R214, 000'
            ],
            [   
                'id' => 3,
                'title' => 'QA Agent',
                'salary' => 'R200, 000'
            ]
        ]
    ]);
});

Route::get('/jobs/{id}', function ($id) {

    $jobs = [
        [   
            'id' => 1,
            'title' => 'Code 14 Driver',
            'salary' => 'R180, 000'
        ],
        [   
            'id' => 2,
            'title' => 'Web Developer',
            'salary' => 'R214, 000'
        ],
        [   
            'id' => 3,
            'title' => 'QA Agent',
            'salary' => 'R200, 000'
        ]
    ];

    $job = Arr::first($jobs, fn($job) => $job['id'] == $id);

    return view('job', ['job' => $job]);
});



Route::get('/login', function () {
    return view(view: 'login');
});

Route::get('/registration', function () {
    return view(view: 'registration');
});

Route::get('/contact', function () {
    return view(view: 'contact');
});

