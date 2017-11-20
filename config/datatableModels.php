<?php

/**
 *  you must add here route and model and view foreach
 *
 *  model             : you must add model for datatable
 *  dataTableFunc     : default funcName is get_datatable // add name for maker method ,this name will be used in maker class or in factory class as get_func / build_func / store_func / update_fund / destroy_func
 *  middlewares       : you can make auth by pass string or array to this property
 *  middlewaresOption : this option allow you to only make auth on on action or except action from auth by pass array
 *  request           : this is must be Form Request Class
 *  stopOperation     : for stop normal oper and add custom oper ['store','update','destroy']
 *  factory           : the default factory is  modelFactory unless you add you own factory property
 *
 */

use Modules\General\Entities\Category;
use Modules\General\Entities\City;
use Modules\General\Entities\Country;
use Modules\General\Entities\Course;
use Modules\General\Entities\CourseUser;
use Modules\General\Entities\Decision;
use Modules\General\Entities\DifferenationUniversity;
use Modules\General\Entities\Differentiation;
use Modules\General\Entities\Faculty;
use Modules\General\Entities\FacultyUniversity;
use Modules\General\Entities\Semester;
use Modules\General\Entities\State;
use Modules\General\Entities\StudyYear;
use Modules\General\Entities\Subject;
use Modules\General\Entities\UniNew;
use Modules\General\Entities\University;
use App\User;
use App\UserType;
use Modules\General\Entities\MenuItem;

return [

    'admins-table' => [
        'model' => User::class,
        'dataTableFunc' => 'admins_table'
    ], 'teachers-table' => [
        'model' => User::class,
        'dataTableFunc' => 'teachers_table'
    ], 'students-table' => [
        'model' => User::class,
        'dataTableFunc' => 'students_table'
    ], 'users-types-table' => [
        'model' => UserType::class,
        'dataTableFunc' => 'users_types_table'
    ], 'categories-table' => [
        'model' => Category::class,
        'dataTableFunc' => 'categories_table'
    ], 'courses-table' => [
        'model' => Course::class,
        'dataTableFunc' => 'courses_table'
    ],
    'courses-users-table' => [
        'model' => CourseUser::class,
        'dataTableFunc' => 'courses_users_table'
    ], 'countries-table' => [
        'model'         => Country::class,
        'dataTableFunc' => 'countries_table',
    ],
    'states-table' => [
        'model'         => State::class,
        'dataTableFunc' => 'states_table',
    ],
    'cities-table' => [
        'model'         => City::class,
        'dataTableFunc' => 'cities_table',
    ],
    'universities-table' => [
        'model'         => University::class,
        'dataTableFunc' => 'universities_table',
    ],
    'faculties-universities-table' => [
        'model'         => FacultyUniversity::class,
        'dataTableFunc' => 'faculties_universities_table',
    ],
    'decisions-table' => [
        'model'         => Decision::class,
        'dataTableFunc' => 'decisions_table',
    ],
    'news-table' => [
        'model'         => UniNew::class,
        'dataTableFunc' => 'news_table',
    ],
    'study-years-table' => [
        'model'         => StudyYear::class,
        'dataTableFunc' => 'study_years_table',
    ],
    'semesters-table' => [
        'model'         => Semester::class,
        'dataTableFunc' => 'semesters_table',
    ],
    'faculties-table' => [
        'model'         => Faculty::class,
        'dataTableFunc' => 'faculties_table',
    ],
    'subjects-table' => [
        'model'         => Subject::class,
        'dataTableFunc' => 'subjects_table',
    ],
    'differentiations-table' => [
        'model'         => Differentiation::class,
        'dataTableFunc' => 'differentiations_table',
    ],
    'differenation-universities-table' => [
        'model'         => DifferenationUniversity::class,
        'dataTableFunc' => 'differenation_universities_table',
    ],
    'public-differentiation-table' => [
        'model'         => Differentiation::class,
        'dataTableFunc' => 'public_differentiation_table',
    ],
    'menu-items-table' => [
        'model'         => MenuItem::class,
        'dataTableFunc' => 'menu_items_table',
    ],

];
