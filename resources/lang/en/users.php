<?php

return [
	
	/*
    |--------------------------------------------------------------------------
    | Users Language Lines
    |--------------------------------------------------------------------------
    |
    */
    'index'	=>	[
    	'h2'	=>	'Users data',
    	'table'	=>	[
    		'name'	=>	'Name',
    		'email'	=>	'Email',
            'created'   =>  'Created',
            'actions'   =>  'Actions'
    	],
    	'btn'	=>	[
    		'create'	=>	'Add New User'
    	],
    ],
    'create'	=>	[
    	'h2'	=>	'Add new user',
    	'form'	=>	[
    		'name'	=>	[
    			'name'	=>	'Name',
    			'placeholder'	=>	'Name'
    		],
    		'email'	=>	[
    			'name'	=>	'Email',
    			'placeholder'	=>	'E-mail'
    		],
    	],
    ],
    'messages'  =>  [
        'store' =>  '<strong>User created successfully.</strong><br>User password is: ',
        'delete'    =>  'The user has been successfully removed'
    ]
];
