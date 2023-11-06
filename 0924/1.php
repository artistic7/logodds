<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'wins' =>  [[1], [2, 1, 3]] ,
		'qpl/trio'       =>  [[2, 4, 10, 7, 1], [2, 4, 10, 7, 3], [2, 4, 6, 7, 1], [4, 6, 2, 1, 3]] ,
		'All Runners   '  =>  '2, 4, 1, 3, 7, 5, 9, 6, 10, 8',
		'All QPL values'  =>  '4, 2, 1, 3, 7, 6, 10',
		'All Wins'        =>  '2, 1, 3',
		'qin/trio' =>  '4, 7, 6, 10',//count:4
		'WP' =>  '4',
		'diff1' =>  '',
		'diff2' =>  '4, 7, 6',
	],
	'2' => [
		/**
		Race 2
		*/
		'wins' =>  [[10]] ,
		'qpl/trio'       =>  [[3, 1, 6, 5, 4], [3, 1, 6, 5, 8], [1, 3, 5, 6, 10]] ,
		'All Runners   '  =>  '1, 6, 3, 5, 9, 4, 8, 2, 10, 7, 11',
		'All QPL values'  =>  '1, 6, 3, 5, 4, 8, 10',
		'All Wins'        =>  '10',
		'qin/trio' =>  '1, 6, 3, 5, 4, 8',//count:6
		'WP' =>  '1',
		'diff1' =>  '10',
		'diff2' =>  '1, 6, 3, 5, 4, 8',
	],
	'4' => [
		/**
		Race 4
		*/
		'wins' =>  [[7]] ,
		'qpl/trio'       =>  [[1, 3, 8, 6, 7], [7, 1, 3, 4, 8]] ,
		'All Runners   '  =>  '1, 7, 8, 3, 6, 9, 4, 10, 12, 2, 5',
		'All QPL values'  =>  '1, 7, 8, 3, 6, 4',
		'All Wins'        =>  '7',
		'qin/trio' =>  '1, 8, 3, 6, 4',//count:5
		'WP' =>  '1',
		'diff1' =>  '',
		'diff2' =>  '1, 8, 3, 6, 4',
	],
	'5' => [
		/**
		Race 5
		*/
		'wins' =>  [[9, 1, 10], [9, 7, 8], [9, 11], [9, 7], [9], [9, 8], [9, 1]] ,
		'qpl/trio'       =>  [[3, 8, 9, 1, 10], [3, 10, 9, 7, 8], [3, 12, 8, 9, 11], [3, 11, 9, 7, 8], [3, 11, 6, 9, 7], [3, 1, 6, 9, 11], [3, 1, 4, 9, 11], [3, 12, 11, 4, 9], [3, 1, 8, 9, 11], [5, 11, 8, 9, 1]] ,
		'All Runners   '  =>  '9, 11, 8, 1, 5, 12, 3, 2, 7, 4, 10, 6',
		'All QPL values'  =>  '9, 11, 8, 1, 5, 12, 3, 7, 4, 10, 6',
		'All Wins'        =>  '9, 11, 8, 1, 7, 10',
		'qin/trio' =>  '5, 12, 3, 4, 6',//count:5
		'diff1' =>  '7, 10',
		'diff2' =>  '5, 12',
	],
	'6' => [
		/**
		Race 6
		*/
		'wins' =>  [[2, 9], [8], [9, 8], [8, 9, 7], [8, 2], [9]] ,
		'qpl/trio'       =>  [[8, 4, 2, 12, 5], [8, 4, 12, 2, 9], [4, 2, 7, 12, 8], [7, 12, 4, 9, 8], [7, 12, 1, 8, 4], [4, 13, 7, 12, 8], [13, 4, 8, 9, 7], [13, 4, 12, 8, 9], [12, 1, 4, 9, 8], [12, 7, 1, 8, 2], [8, 4, 2, 12, 1], [8, 13, 4, 12, 1], [1, 12, 7, 13, 8], [1, 12, 3, 13, 8], [4, 8, 13, 1, 9]] ,
		'All Runners   '  =>  '4, 8, 1, 9, 13, 2, 3, 7, 12, 11, 5, 6, 10, 14',
		'All QPL values'  =>  '4, 8, 1, 9, 13, 2, 3, 12, 7, 5',
		'All Wins'        =>  '8, 9, 2, 7',
		'qin/trio' =>  '4, 1, 13, 3, 12, 5',//count:6
		'WP' =>  '4',
		'diff1' =>  '7',
		'diff2' =>  '4, 1, 13',
	],
	'7' => [
		/**
		Race 7
		*/
		'wins' =>  [[4]] ,
		'qpl/trio'       =>  [[3, 9, 1, 4, 2], [3, 9, 2, 1, 10], [9, 3, 1, 10, 4]] ,
		'All Runners   '  =>  '9, 3, 4, 1, 10, 2, 5, 7, 6, 8',
		'All QPL values'  =>  '3, 9, 4, 1, 10, 2',
		'All Wins'        =>  '4',
		'qin/trio' =>  '3, 9, 1, 10, 2',//count:5
		'WP' =>  '9',
		'WP' =>  '3',
		'diff1' =>  '',
		'diff2' =>  '3, 9, 1, 10, 2',
	],
	'8' => [
		/**
		Race 8
		*/
		'wins' =>  [[7, 8], [7, 11], [8], [7], [1, 7], [1, 7, 8], [1]] ,
		'qpl/trio'       =>  [[1, 5, 11, 7, 8], [1, 7, 12, 11, 2], [1, 7, 5, 11, 2], [1, 5, 2, 7, 8], [12, 2, 8, 1, 7], [5, 12, 2, 11, 1]] ,
		'All Runners   '  =>  '1, 2, 5, 12, 7, 11, 8, 4, 3, 14, 9, 10, 13',
		'All QPL values'  =>  '1, 2, 5, 12, 7, 11, 8',
		'All Wins'        =>  '1, 7, 11, 8',
		'diff1' =>  '8',
		'diff2' =>  '2, 5, 12',
	],
	'9' => [
		/**
		Race 9
		*/
		'wins' =>  [[1], [8, 1], [8], [8, 9]] ,
		'qpl/trio'       =>  [[10, 8, 11, 1, 5], [8, 10, 4, 1, 5], [8, 4, 11, 5, 3], [8, 11, 4, 5, 1], [10, 11, 5, 8, 9]] ,
		'All Runners   '  =>  '8, 10, 5, 11, 9, 1, 4, 6, 3, 2, 7, 12',
		'All QPL values'  =>  '8, 10, 5, 11, 9, 1, 4, 3',
		'All Wins'        =>  '8, 9, 1',
		'qin/trio' =>  '10, 5, 11, 4, 3',//count:5
		'diff1' =>  '',
		'diff2' =>  '10, 5, 11',
	],
	'10' => [
		/**
		Race 10
		*/
		'wins' =>  [[2], [9], [8, 9], [2, 9], [2, 4, 10], [2, 4]] ,
		'qpl/trio'       =>  [[4, 8, 3, 1, 2], [2, 4, 10, 3, 1], [1, 3, 2, 4, 9], [2, 4, 6, 1, 3], [2, 4, 3, 8, 9]] ,
		'All Runners   '  =>  '2, 3, 4, 6, 10, 1, 8, 9, 12, 5, 7, 11',
		'All QPL values'  =>  '2, 3, 4, 6, 10, 1, 8, 9',
		'All Wins'        =>  '2, 4, 10, 8, 9',
		'diff1' =>  '8, 9',
		'diff2' =>  '3, 6, 1',
	],
];
