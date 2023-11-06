<?php

return [
	'2' => [
		/**
		Race 2
		*/
		'wins' =>  [[5]] ,
		'qpl/trio'       =>  [[8, 6, 4, 1, 5]] ,
		'All Runners   '  =>  '6, 4, 8, 5, 1, 11, 2, 3, 10, 7, 9',
		'All QPL values'  =>  '6, 4, 8, 5, 1',
		'All Wins'        =>  '5',
		//Count(Wins)     =  1,
		//Count(QPL/Trio) =  1,
		'qin/trio' =>  '6, 4, 8, 1',
		'diff1' =>  '',
		'diff2' =>  '6, 4, 8, 1',
	],
	'4' => [
		/**
		Race 4
		*/
		'wins' =>  [[1, 12], [9, 1], [9, 1, 11, 2], [9, 7], [9]] ,
		'qpl/trio'       =>  [[9, 11, 2, 1, 12], [7, 11, 2, 9, 1], [3, 9, 1, 11, 2]] ,
		'All Runners   '  =>  '9, 11, 1, 7, 2, 3, 8, 12, 10, 4, 5, 6',
		'All QPL values'  =>  '9, 11, 1, 7, 2, 3, 12',
		'All Wins'        =>  '9, 11, 1, 7, 2, 12',
		//Count(Wins)     =  5,
		//Count(QPL/Trio) =  3,
		'diff1' =>  '12',
		'diff2' =>  '3',
	],
	'5' => [
		/**
		Race 5
		*/
		'wins' =>  [[4]] ,
		'qpl/trio'       =>  [[3, 7, 5, 2, 4], [3, 9, 7, 2, 4]] ,
		'All Runners   '  =>  '3, 7, 2, 5, 9, 4, 6, 1, 8, 10',
		'All QPL values'  =>  '3, 7, 2, 5, 9, 4',
		'All Wins'        =>  '4',
		//Count(Wins)     =  1,
		//Count(QPL/Trio) =  2,
		'qin/trio' =>  '3, 7, 2, 5, 9',
		'diff1' =>  '',
		'diff2' =>  '3, 7, 2, 5, 9',
	],
	'6' => [
		/**
		Race 6
		*/
		'wins' =>  [[9, 8], [8, 9, 7], [9], [9, 2]] ,
		'qpl/trio'       =>  [[7, 1, 2, 9, 8], [7, 3, 2, 9, 8], [2, 4, 8, 9, 7], [2, 8, 4, 3, 9], [3, 1, 2, 9, 8]] ,
		'All Runners   '  =>  '9, 2, 3, 1, 7, 8, 4, 5, 6, 10',
		'All QPL values'  =>  '9, 2, 3, 1, 7, 8, 4',
		'All Wins'        =>  '9, 2, 7, 8',
		//Count(Wins)     =  4,
		//Count(QPL/Trio) =  5,
		'diff1' =>  '',
		'diff2' =>  '3, 1',
	],
	'7' => [
		/**
		Race 7
		*/
		'wins' =>  [[7], [4], [6]] ,
		'qpl/trio'       =>  [[2, 8, 10, 7, 3], [2, 8, 4, 7, 1], [2, 8, 6, 1, 7], [7, 1, 3, 2, 8], [7, 3, 1, 2, 4], [1, 7, 3, 2, 6]] ,
		'All Runners   '  =>  '1, 7, 3, 2, 5, 4, 6, 8, 10, 11, 9',
		'All QPL values'  =>  '1, 7, 3, 2, 4, 6, 8, 10',
		'All Wins'        =>  '7, 4, 6',
		//Count(Wins)     =  3,
		//Count(QPL/Trio) =  6,
		'qin/trio' =>  '1, 3, 2, 8, 10',
		'diff1' =>  '',
		'diff2' =>  '1, 3, 2',
	],
	'8' => [
		/**
		Race 8
		*/
		'wins' =>  [[6], [6, 1]] ,
		'qpl/trio'       =>  [[6, 11, 10, 7, 9], [11, 10, 3, 7, 6], [11, 4, 3, 7, 6], [11, 4, 7, 9, 6], [11, 4, 7, 1, 6], [11, 2, 7, 6, 1]] ,
		'All Runners   '  =>  '6, 11, 7, 1, 4, 10, 2, 3, 9, 5, 8, 12',
		'All QPL values'  =>  '6, 11, 7, 1, 4, 10, 9, 3, 2',
		'All Wins'        =>  '6, 1',
		//Count(Wins)     =  2,
		//Count(QPL/Trio) =  6,
		'qin/trio' =>  '11, 7, 4, 10, 9, 3, 2',
		'diff1' =>  '',
		'diff2' =>  '11, 7, 4, 10',
	],
];
