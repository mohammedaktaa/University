<?php

return [

    'isDebug'    => true,

    'version'    => '5.4',

    'multiModel' => true,

    'isLangs'    => false,

    'customResponsiveTemplete' => false,

    'gridSystem' => [
        'formHorizontal' => false,
        'global'         => [ 'cols' => 6, 'type' => 'lg|md' ],
        'label'          => [ 'cols' => 3, 'type' => 'lg' ],
        'input'          => [ 'cols' => 8, 'type' => 'lg' ]
    ],

    'functionCase' => [
        'factory'    => 'camelCase',
        'maker'      => 'snakeCase',
    ],

    'dialog_form_class' => 'ajax-form',

    'dialog_form_attr' => '',

    'choosen'  => 'not-choosen',

    'spinners' => [

        'type'    => 'line-scale',
        'overlay' => 'spinners-overlay'
    ],

    'button_position' => "B<'row'<'col-lg-4 datatable-pull-left'l><'col-lg-4 datatable-pull-right'f>>tr<'row'<'col-lg-4 datatable-pull-left'i><'col-lg-6 datatable-pull-right'p>>",

    'icon' => [
        'update'         => 'fa fa-wrench',
        'delete'         => 'fa fa-trash-o',
        'add'            => 'fa fa-plus',
        'reload'         => 'fa fa-refresh',
        'choosen'        => 'fa fa-reorder',
        'print'          => 'fa fa-print',
        'pdf'            => 'fa fa-file-pdf-o',
        'csv'            => 'fa fa-file-text-o',
        'excel'          => 'fa fa-file-excel-o',
        'copy'           => 'fa fa-files-o',
        'code'           => 'fa fa-code',
        'destroy'        => 'fa fa-retweet',
        'export'         => 'fa fa-download',
    ],

    'routeMiddleware' => ['web', 'localeSessionRedirect', 'localizationRedirect' ],

    'event' => [
        //you can use js parameter: (modal ,param)
        'onTableCreate'     => function() {

            return "<script></script>";
        },

        //you can use js parameter: (modal ,param)
        'onLoad'            => function() {

            return "<script></script>";
        },

        //you can use js parameter: (modal ,param)
        'modalOpen'         => function() {

            return "<script></script>";
        },

        //you can use js parameter: (modal ,param)
        'modalClose'        => function() {

            return "<script></script>";
        },

        //you can use js parameter: (param)
        'modalAdd'          => function() {

            return "<script></script>";
        },

        //you can use js parameter: (row ,param)
        'modalUpdate'       => function() {

            return "<script></script>";
        },

        //you can use js parameter: (cont ,param)
        'onTabClick'        => function() {

            return "<script></script>";
        },

        //you can use js parameter: (cont , row, param)
        'onRowDetailClick'  => function() {

            return "<script></script>";
        },

        'onDestroy'         => function() {

            return "<script></script>";
        }
    ],

];
