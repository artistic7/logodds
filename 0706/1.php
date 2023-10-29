<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'wins' =>  [[1], [9], [2, 9, 10], [1, 2, 10], [2, 10], [1, 9]] ,
		'qpl/trio'       =>  [[9, 12, 2, 6, 10], [1, 9, 2, 6, 10], [1, 9, 2, 8, 10]] ,
		'new 2 qpl/trio' =>  [[9, 12, 2, 6, 10], [1, 9, 2, 6, 10], [1, 9, 2, 8, 10]] ,
		'new 3 qpl/trio' =>  [[9, 12, 2, 6, 10], [1, 9, 2, 6, 10], [1, 9, 2, 8, 10]] ,
		'All QPL values'    =>  '10, 2, 8, 1, 9, 6, 12',
		'New 2 QPL values'  =>  '10, 2, 8, 1, 9, 6, 12',
		'New 3 QPL values'  =>  '10, 2, 8, 1, 9, 6, 12',
		'Hedge Place' =>  '5, 3',
	],
	'3' => [
		/**
		Race 3
		*/
		'wins' =>  [[5, 6], [6], [11], [5], [10]] ,
		'qpl/trio'       =>  [[1, 5, 12, 6, 8], [1, 12, 6, 8, 11], [1, 12, 6, 10, 11], [1, 12, 6, 8, 10], [1, 5, 6, 8, 10]] ,
		'new 2 qpl/trio' =>  [[1, 5, 12, 6, 8], [1, 5, 6, 8, 10]] ,
		'new 3 qpl/trio' =>  [] ,
		'All QPL values'    =>  '6, 12, 1, 10, 5, 8, 11',
		'New 2 QPL values'  =>  '6, 12, 1, 10, 5, 8',
		'New 3 QPL values'  =>  '',
		'Hedge Place' =>  '9, 3',
	],
	'4' => [
		/**
		Race 4
		*/
		'wins' =>  [[4], [7], [8], [7, 8]] ,
		'qpl/trio'       =>  [[3, 5, 2, 4, 8], [3, 7, 2, 4, 8], [3, 7, 4, 8, 11], [3, 5, 7, 4, 8], [3, 5, 7, 2, 4]] ,
		'new 2 qpl/trio' =>  [[3, 7, 2, 4, 8], [3, 7, 4, 8, 11], [3, 5, 7, 4, 8]] ,
		'new 3 qpl/trio' =>  [] ,
		'All QPL values'    =>  '3, 7, 4, 2, 8, 5, 11',
		'New 2 QPL values'  =>  '3, 7, 4, 2, 8, 5, 11',
		'New 3 QPL values'  =>  '',
		'Qin/Tce' =>  '3, 2, 5, 11, 9, 6, 1, 10',
		'Qqpl' =>  '4 X 3, 2, 5, 11, 9, 6, 1, 10',
		'Hedge Place' =>  '9, 6',
	],
	'5' => [
		/**
		Race 5
		*/
		'wins' =>  [[7], [7, 8, 9], [7, 9], [9], [8, 9]] ,
		'qpl/trio'       =>  [[1, 7, 12, 6, 8], [7, 9, 12, 6, 8], [1, 7, 12, 4, 6], [7, 9, 12, 4, 6], [7, 9, 12, 4, 8], [7, 9, 12, 4, 11]] ,
		'new 2 qpl/trio' =>  [[7, 9, 12, 6, 8], [7, 9, 12, 4, 6], [7, 9, 12, 4, 8], [7, 9, 12, 4, 11]] ,
		'new 3 qpl/trio' =>  [[7, 9, 12, 6, 8], [7, 9, 12, 4, 8]] ,
		'All QPL values'    =>  '7, 4, 12, 9, 8, 11, 1, 6',
		'New 2 QPL values'  =>  '7, 4, 12, 9, 8, 11, 6',
		'New 3 QPL values'  =>  '7, 4, 12, 9, 8, 6',
		'Hedge Place' =>  '10, 5',
	],
	'6' => [
		/**
		Race 6
		*/
		'wins' =>  [[9], [6, 9], [5], [1]] ,
		'qpl/trio'       =>  [[5, 9, 12, 2, 6], [1, 5, 9, 2, 6], [3, 5, 9, 2, 6], [5, 9, 2, 6, 10]] ,
		'new 2 qpl/trio' =>  [[5, 9, 12, 2, 6], [1, 5, 9, 2, 6], [3, 5, 9, 2, 6], [5, 9, 2, 6, 10]] ,
		'new 3 qpl/trio' =>  [] ,
		'All QPL values'    =>  '6, 9, 5, 1, 3, 10, 12, 2',
		'New 2 QPL values'  =>  '6, 9, 5, 1, 3, 10, 12, 2',
		'New 3 QPL values'  =>  '',
		'Qin/Tce' =>  '3, 10, 12, 2, 7, 11, 8, 4',
		'Qqpl' =>  '1 X 3, 10, 12, 2, 7, 11, 8, 4',
		'Hedge Place' =>  '7, 11',
	],
	'7' => [
		/**
		Race 7
		*/
		'wins' =>  [[9], [6, 8, 9], [6, 8], [5, 6], [5, 6, 8], [2, 5], [1, 6], [6]] ,
		'qpl/trio'       =>  [[1, 5, 2, 6, 8], [1, 9, 2, 6, 8], [1, 5, 2, 4, 6], [1, 5, 7, 2, 6], [1, 5, 2, 6, 10]] ,
		'new 2 qpl/trio' =>  [[1, 5, 2, 6, 8], [1, 9, 2, 6, 8], [1, 5, 2, 4, 6], [1, 5, 7, 2, 6], [1, 5, 2, 6, 10]] ,
		'new 3 qpl/trio' =>  [[1, 9, 2, 6, 8], [1, 5, 2, 6, 8]] ,
		'All QPL values'    =>  '6, 1, 5, 2, 7, 9, 8, 10, 4',
		'New 2 QPL values'  =>  '6, 1, 5, 2, 7, 9, 8, 10, 4',
		'New 3 QPL values'  =>  '6, 1, 5, 2, 9, 8',
		'Hedge Place' =>  '12, 3',
	],
	'8' => [
		/**
		Race 8
		*/
		'wins' =>  [[5, 9], [5]] ,
		'qpl/trio'       =>  [[1, 5, 9, 4, 8], [1, 5, 9, 6, 8], [1, 5, 12, 6, 8], [1, 5, 12, 4, 6], [1, 5, 12, 4, 8], [1, 3, 5, 4, 8], [1, 3, 5, 4, 6], [1, 3, 5, 6, 8]] ,
		'new 2 qpl/trio' =>  [[1, 5, 9, 4, 8], [1, 5, 9, 6, 8]] ,
		'new 3 qpl/trio' =>  [] ,
		'All QPL values'    =>  '1, 5, 4, 8, 6, 3, 12, 9',
		'New 2 QPL values'  =>  '1, 5, 4, 8, 6, 9',
		'New 3 QPL values'  =>  '',
		'Hedge Place' =>  '2, 11',
	],
	'9' => [
		/**
		Race 9
		*/
		'wins' =>  [[2, 4], [6]] ,
		'qpl/trio'       =>  [[1, 3, 2, 4, 6], [1, 3, 2, 6, 8], [3, 5, 2, 6, 8], [1, 5, 2, 6, 8]] ,
		'new 2 qpl/trio' =>  [[1, 3, 2, 4, 6]] ,
		'new 3 qpl/trio' =>  [] ,
		'All QPL values'    =>  '6, 2, 1, 8, 5, 3, 4',
		'New 2 QPL values'  =>  '6, 2, 1, 3, 4',
		'New 3 QPL values'  =>  '',
		'Qin/Tce' =>  '1, 8, 5, 3, 7, 9, 10, 12, 11',
		'Qqpl' =>  '2 X 1, 8, 5, 3, 7, 9, 10, 12, 11',
		'Hedge Place' =>  '7, 9',
	],
];