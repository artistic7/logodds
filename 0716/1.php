<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'wins' =>  [[5], [5, 6, 4], [5, 6, 13], [7], [7, 6, 13], [7, 8]] ,
		'qpl/trio'       =>  [[3, 5, 7, 4, 6], [3, 5, 7, 6, 13], [3, 5, 7, 6, 8]] ,
		'All Runners   '  =>  '5, 6, 3, 7, 13, 8, 2, 4, 10, 14, 11, 9, 1',
		'All QPL values'  =>  '5, 6, 3, 7, 13, 8, 4',
		'All Wins'        =>  '5, 6, 7, 13, 8, 4',
		'diff1' =>  '4',
		'diff2' =>  '3',
	],
	'2' => [
		/**
		Race 2
		*/
		'wins' =>  [[1], [8, 7], [8], [7], [8, 9], [9]] ,
		'qpl/trio'       =>  [[1, 5, 2, 8, 10], [5, 7, 2, 8, 10], [5, 7, 2, 8, 11], [5, 9, 2, 8, 10], [5, 9, 2, 10, 11]] ,
		'All Runners   '  =>  '2, 9, 5, 1, 11, 10, 12, 7, 8, 3, 4, 13, 6',
		'All QPL values'  =>  '2, 9, 5, 1, 11, 10, 8, 7',
		'All Wins'        =>  '9, 1, 8, 7',
		'qin/trio' =>  '2, 5, 11, 10',//count:4
		'WP' =>  '2',
		'diff1' =>  '8, 7',
		'diff2' =>  '2, 5, 11, 10',
	],
	'3' => [
		/**
		Race 3
		*/
		'wins' =>  [[7], [7, 8], [8], [9]] ,
		'qpl/trio'       =>  [[1, 7, 12, 4, 8], [1, 5, 12, 6, 8], [1, 3, 12, 6, 8], [1, 7, 12, 6, 8], [1, 9, 12, 6, 8]] ,
		'All Runners   '  =>  '1, 8, 12, 6, 10, 3, 14, 7, 2, 9, 4, 5, 11, 13',
		'All QPL values'  =>  '1, 8, 12, 6, 3, 7, 9, 4, 5',
		'All Wins'        =>  '8, 7, 9',
		'qin/trio' =>  '1, 12, 6, 3, 4, 5',//count:6
		'WP' =>  '1',
		'diff1' =>  '9',
		'diff2' =>  '1, 12, 6, 3',
	],
	'4' => [
		/**
		Race 4
		*/
		'wins' =>  [[7], [5]] ,
		'qpl/trio'       =>  [[1, 5, 2, 4, 10], [5, 7, 2, 4, 6], [1, 7, 2, 4, 10]] ,
		'All Runners   '  =>  '4, 10, 1, 2, 6, 8, 5, 7, 13, 12, 3, 9, 14, 11',
		'All QPL values'  =>  '4, 10, 1, 2, 6, 5, 7',
		'All Wins'        =>  '7, 5',
		'qin/trio' =>  '4, 10, 1, 2, 6',//count:5
		'WP' =>  '4',
		'diff1' =>  '7',
		'diff2' =>  '4, 10, 1, 2, 6',
	],
	'5' => [
		/**
		Race 5
		*/
		'wins' =>  [[9], [9, 5], [8, 9], [9, 5, 8]] ,
		'qpl/trio'       =>  [[5, 9, 14, 4, 8], [5, 9, 2, 4, 8], [5, 7, 9, 4, 8], [3, 5, 9, 4, 8], [7, 9, 12, 4, 8], [5, 9, 12, 4, 8], [3, 9, 12, 4, 8]] ,
		'All Runners   '  =>  '9, 8, 4, 2, 3, 12, 1, 7, 5, 6, 13, 14, 11, 10',
		'All QPL values'  =>  '9, 8, 4, 2, 3, 12, 7, 5, 14',
		'All Wins'        =>  '9, 8, 5',
		'qin/trio' =>  '4, 2, 3, 12, 7, 14',//count:6
		'diff1' =>  '5',
		'diff2' =>  '4, 2, 3, 12',
	],
	'6' => [
		/**
		Race 6
		*/
		'wins' =>  [[6], [5, 6], [14, 6], [5]] ,
		'qpl/trio'       =>  [[1, 3, 14, 4, 6], [1, 3, 5, 4, 6], [1, 3, 5, 6, 11], [1, 3, 5, 6, 13], [1, 3, 5, 2, 6], [3, 5, 9, 2, 6], [1, 5, 9, 6, 13]] ,
		'All Runners   '  =>  '1, 5, 9, 3, 6, 7, 14, 13, 11, 2, 8, 4, 10, 12',
		'All QPL values'  =>  '1, 5, 9, 3, 6, 14, 13, 11, 2, 4',
		'All Wins'        =>  '5, 6, 14',
		'qin/trio' =>  '1, 9, 3, 13, 11, 2, 4',//count:7
		'WP' =>  '1',
		'diff1' =>  '',
		'diff2' =>  '1, 9, 3',
	],
	'7' => [
		/**
		Race 7
		*/
		'wins' =>  [[1, 2], [7, 2], [7, 8], [7], [2], [8], [9, 2]] ,
		'qpl/trio'       =>  [[1, 7, 14, 2, 8], [7, 12, 14, 2, 8], [1, 12, 14, 2, 8], [1, 9, 14, 2, 8]] ,
		'All Runners   '  =>  '14, 2, 9, 1, 12, 8, 7, 3, 6, 11, 5, 10, 13, 4',
		'All QPL values'  =>  '14, 2, 9, 1, 12, 8, 7',
		'All Wins'        =>  '2, 9, 1, 8, 7',
		'diff1' =>  '7',
		'diff2' =>  '14, 12',
	],
	'8' => [
		/**
		Race 8
		*/
		'wins' =>  [[6], [2], [2, 4], [4], [6, 8]] ,
		'qpl/trio'       =>  [[3, 5, 2, 4, 8], [1, 5, 2, 4, 8], [3, 5, 2, 6, 8]] ,
		'All Runners   '  =>  '2, 8, 6, 5, 4, 3, 11, 9, 10, 1, 12, 7',
		'All QPL values'  =>  '2, 8, 6, 5, 4, 3, 1',
		'All Wins'        =>  '2, 8, 6, 4',
		'diff1' =>  '',
		'diff2' =>  '5, 3',
	],
	'9' => [
		/**
		Race 9
		*/
		'wins' =>  [[9], [9, 8], [9, 2], [9, 8, 2]] ,
		'qpl/trio'       =>  [[1, 9, 12, 2, 8]] ,
		'All Runners   '  =>  '1, 8, 2, 6, 4, 12, 9, 7, 13, 5, 3, 14, 11, 10',
		'All QPL values'  =>  '1, 8, 2, 12, 9',
		'All Wins'        =>  '8, 2, 9',
		'diff1' =>  '',
		'diff2' =>  '1, 12',
	],
	'10' => [
		/**
		Race 10
		*/
		'wins' =>  [[1], [11]] ,
		'qpl/trio'       =>  [[1, 9, 4, 6, 10], [1, 9, 4, 6, 11], [3, 9, 4, 6, 11], [1, 3, 9, 4, 6], [5, 9, 4, 6, 11], [9, 14, 4, 6, 11]] ,
		'All Runners   '  =>  '4, 6, 11, 9, 10, 13, 3, 14, 5, 1, 2, 8, 7, 12',
		'All QPL values'  =>  '4, 6, 11, 9, 10, 3, 14, 5, 1',
		'All Wins'        =>  '11, 1',
		'qin/trio' =>  '4, 6, 9, 10, 3, 14, 5',//count:7
		'WP' =>  '4',
		'diff1' =>  '1',
		'diff2' =>  '4, 6, 9, 10, 3',
	],
	'11' => [
		/**
		Race 11
		*/
		'wins' =>  [[5], [7], [8, 7], [8, 7, 5], [8]] ,
		'qpl/trio'       =>  [[5, 7, 2, 4, 13], [5, 7, 2, 4, 10], [7, 9, 2, 4, 13], [5, 7, 2, 4, 8]] ,
		'All Runners   '  =>  '2, 7, 5, 4, 8, 9, 10, 13, 1, 3, 6, 12, 11',
		'All QPL values'  =>  '2, 7, 5, 4, 8, 9, 13, 10',
		'All Wins'        =>  '7, 5, 8',
		'qin/trio' =>  '2, 4, 9, 13, 10',//count:5
		'WP' =>  '2',
		'diff1' =>  '',
		'diff2' =>  '2, 4, 9',
	],
];
