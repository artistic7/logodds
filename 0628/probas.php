<?php

return [
	'2' => [
		/**
		Race 2
		*/
		'wins' =>  [[9], [9, 11], [8, 9]] ,
		'qpl/trio' =>  [[3, 5, 9, 8, 11], [1, 3, 9, 8, 11]] ,
		'inters' =>  [[3, 5, 8, 11], [1, 3, 8], [1, 3, 11]] ,
		'WIN' =>  '3, 8, 9, 11',
		'qin' =>  '1, 3, 11 X 8, 9',
		'S' =>  '3, 8, 9, 11',
		'SS' =>  [[3, 8, 9, 11]] ,
	],
	'3' => [
		/**
		Race 3
		*/
		'wins' =>  [[2, 9], [9]] ,
		'qpl/trio' =>  [[3, 9, 12, 2, 8], [1, 9, 12, 2, 8]] ,
		'inters' =>  [[3, 8, 12], [1, 2, 8, 12], [1, 8, 12]] ,
		'WIN' =>  '2, 8, 9, 12',
		'qin' =>  '1, 8, 12 X 2, 9',
		'S' =>  '2, 8, 9, 12',
		'SS' =>  [[2, 8, 9, 12]] ,
	],
	'4' => [
		/**
		Race 4
		*/
		'wins' =>  [[8, 9], [9]] ,
		'qpl/trio' =>  [[1, 9, 12, 6, 8], [1, 9, 12, 8, 10], [1, 9, 12, 6, 10]] ,
		'inters' =>  [[1, 6, 12], [1, 10, 12], [1, 6, 10, 12]] ,
		'WIN' =>  '1, 8, 9, 12',
		'qin' =>  '1, 6, 12 X 8, 9',
		'S' =>  '1, 8, 9, 12',
		'SS' =>  [[1, 8, 9, 12], [1, 9, 12]] ,
		'I' =>  '1, 9, 12',
	],
	'5' => [
		/**
		Race 5
		*/
		'wins' =>  [[6]] ,
		'qpl/trio' =>  [[1, 3, 5, 6, 11]] ,
		'inters' =>  [[1, 3, 5, 11], [1, 3, 5, 6, 11]] ,
		'WIN' =>  '1, 3, 5, 6, 11',
		'qin' =>  '1, 3, 5, 6, 11',
		'S' =>  '1, 3, 5, 6, 11',
		'SS' =>  [[1, 3, 5, 6, 11]] ,
	],
	'6' => [
		/**
		Race 6
		*/
		'wins' =>  [[7, 8], [7]] ,
		'qpl/trio' =>  [[3, 7, 12, 6, 8], [7, 12, 4, 6, 8]] ,
		'inters' =>  [[3, 6, 12], [4, 6, 12], [4, 6, 8, 12]] ,
		'WIN' =>  '6, 7, 8, 12',
		'qin' =>  '4, 6, 8, 12 X 7',
		'S' =>  '6, 7, 8, 12',
		'SS' =>  [[7, 8], [6, 7, 8, 12]] ,
		'I' =>  '7, 8',
	],
	'7' => [
		/**
		Race 7
		*/
		'wins' =>  [[6, 7], [1], [1, 6], [5, 6]] ,
		'qpl/trio' =>  [[1, 5, 7, 6, 11], [1, 5, 7, 2, 11]] ,
		'inters' =>  [[1, 5, 11], [2, 5, 7, 11], [5, 7, 11], [1, 7, 11]] ,
		'WIN' =>  '1, 5, 6, 7, 11',
		'qin' =>  '2, 5, 7, 11 X 1',
		'S' =>  '1, 5, 7, 11',
		'SS' =>  [[1, 5, 6, 7, 11], [1, 5, 7, 11]] ,
		'I' =>  '1, 5, 7, 11',
	],
	'8' => [
		/**
		Race 8
		*/
		'wins' =>  [[5, 9], [5], [5, 6, 8, 9], [5, 6, 7, 8], [5, 6, 7]] ,
		'qpl/trio' =>  [[5, 9, 4, 6, 8], [1, 5, 4, 6, 8], [5, 7, 4, 6, 8]] ,
		'inters' =>  [[4, 6, 8], [1, 4, 6, 8], [4], [4, 8]] ,
		'WIN' =>  '4, 5, 6, 7, 8, 9',
		'qin' =>  '4, 8 X 5, 6, 7',
		'S' =>  '4, 5, 6, 7, 8',
		'SS' =>  [[4, 5, 6, 7, 8]] ,
	],
	'9' => [
		/**
		Race 9
		*/
		'wins' =>  [[9], [2, 9], [2], [2, 11]] ,
		'qpl/trio' =>  [[1, 3, 9, 2, 6], [1, 9, 2, 6, 11], [1, 3, 2, 6, 11]] ,
		'inters' =>  [[1, 2, 3, 6], [1, 3, 6], [1, 3, 6, 9], [1, 6, 9]] ,
		'WIN' =>  '1, 2, 6, 9, 11',
		'qin' =>  '1, 3, 6, 9 X 2',
		'S' =>  '1, 2, 6, 9',
		'SS' =>  [[1, 2, 6, 11], [1, 2, 6, 9]] ,
		'I' =>  '1, 2, 6',
	],
];
