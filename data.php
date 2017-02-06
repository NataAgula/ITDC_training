<?php
$nav = [
	['id' => 'home', 'name' => 'Home', 'type' => 'text'],
	['id' => 'about', 'name' => 'About', 'type' => 'text'],
	['id' => 'blog', 'name' => 'Blog', 'type' => 'list'],
	['id' => 'contact', 'name' => 'Contact', 'type' => 'text'],
];

$content = [
	'home' => ['title' => 'Home Page', 'body'=> 'home page content', 'type' => 'text'],
	'about' => ['title' => 'About Us', 'body'=> 'About Us content', 'type' => 'text'],
	'blog' => [
		'title' => 'blog',
		'list' => [
			['title'=> 'A123', 'body' => 'A1234'],
			['title'=> 'A123b', 'body' => 'A1234b'],
			['title'=> 'A123c', 'body' => 'A1234c'],
			['title'=> 'A123d', 'body' => 'A1234d'],
			
		],

			'type' => 'list',

	],

	'contact' => ['title' => 'Contact Us', 'body'=> 'Contact Us content', 'type' => 'text'],
];




?>
