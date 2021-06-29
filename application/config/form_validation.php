<?php
$config=[
	'form_rules'=>[
			[
			'field' => 'user',
			'label'=> 'USER NAME',
			'rules' => 'required|alpha'
			],
			[
			'field' => 'pass',
			'label' => 'PASSWORD',
			'rules' => 'required|max_length[12]'
			]
   ],	  
    'form_second_rules'=>
    [
    	[
    		'field' => 'username',
    		'label' => 'USER NAME',
    		'rules' => 'required|alpha'
    	],
    	[
    		'field' => 'password',
    		'label' => 'PASSWORD',
    		'rules' => 'required|max_length[12]'
    	]
    ],
];
?>