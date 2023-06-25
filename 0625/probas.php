<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'Win' =>  '2',
		'wins' =>  [[3], [2]] ,
		'inters' =>  [[2, 10, 13, 14], [2, 3, 8, 13, 14], [3, 4, 13, 14], [2, 3, 4, 13, 14], [2, 4, 7, 13, 14], [3, 7, 13, 14]] ,
		'dInter' =>  '3, 2',
		'dInter-diff' =>  '2',
		'iInter' =>  '2, 13, 14, 3, 4, 7',
		'iInter-diff' =>  '2, 13, 14',
		'WIN' =>  '2, 3, 13, 14',
		'qin' =>  '3, 7, 13, 14 X 2',
		'qpl/trio' =>  [[3, 14, 2, 10, 13], [3, 14, 2, 8, 13], [3, 14, 2, 4, 13], [7, 14, 2, 4, 13], [3, 7, 14, 2, 13]] ,
		'diff' =>  '3, 4, 7, 8',
	],
	'2' => [
		/**
		Race 2
		*/
		'wins' =>  [[6, 7], [6], [7], [7, 8], [8, 9], [7, 8, 9]] ,
		'inters' =>  [[3, 5, 6, 8, 10], [3, 5, 8], [3, 4, 5, 6, 8], [3, 5, 10], [3, 5, 7, 10], [3, 5, 6, 7, 10], [3, 5, 6, 10], [3, 5, 6], [5, 10], [3, 5, 6, 7, 11], [3, 5, 7, 11], [3, 5, 6, 8, 11]] ,
		'dInter' =>  '6, 7, 8',
		'dInter-diff' =>  '',
		'iInter' =>  '3, 5, 8, 6, 10, 7, 11',
		'iInter-diff' =>  '5',
		'WIN' =>  '5, 6, 7, 8, 9',
		'qin' =>  '3, 5, 6, 8, 11',
		'qpl/trio' =>  [[3, 5, 6, 8, 10], [3, 5, 7, 6, 8], [3, 5, 4, 6, 8], [3, 5, 7, 6, 10], [3, 5, 9, 8, 10], [5, 7, 9, 8, 10], [3, 5, 7, 6, 11], [3, 5, 6, 8, 11]] ,
		'diff' =>  '3, 4, 6, 7, 8, 9, 10, 11',
	],
	'4' => [
		/**
		Race 4
		*/
		'Win' =>  '6, 7',
		'wins' =>  [[5, 6, 14], [6], [6, 7]] ,
		'inters' =>  [[2, 7], [2, 5, 7, 14], [2, 5, 14]] ,
		'dInter' =>  '5, 14, 7',
		'dInter-diff' =>  '5, 14, 7',
		'iInter' =>  '2, 7, 5, 14',
		'iInter-diff' =>  '2, 7, 5, 14',
		'WIN' =>  '2, 5, 6, 7, 14',
		'qin' =>  '2, 5, 14 X 6, 7',
		'qpl/trio' =>  [[5, 7, 14, 2, 6]] ,
		'diff' =>  '',
	],
	'5' => [
		/**
		Race 5
		*/
		'Win' =>  '8, 9',
		'wins' =>  [[8, 9]] ,
		'inters' =>  [[3, 5, 11], [3, 11, 14], [3, 6, 14]] ,
		'dInter' =>  '',
		'dInter-diff' =>  '',
		'iInter' =>  '3, 11, 14',
		'iInter-diff' =>  '3, 11',
		'WIN' =>  '3, 8, 9, 11',
		'qin' =>  '3, 6, 14 X 8, 9',
		'qpl/trio' =>  [[3, 5, 9, 8, 11], [3, 9, 14, 8, 11], [3, 9, 14, 6, 8]] ,
		'diff' =>  '6, 14',
	],
	'8' => [
		/**
		Race 8
		*/
		'wins' =>  [[8]] ,
		'inters' =>  [[1, 3, 4, 12], [1, 3, 4, 8, 12], [1, 3, 8, 12, 13], [1, 3, 12, 13], [1, 3, 5, 8, 13], [3, 5, 6, 8, 12], [1, 3, 6, 8, 12]] ,
		'dInter' =>  '8',
		'dInter-diff' =>  '8',
		'iInter' =>  '1, 3, 4, 12, 8, 13, 5, 6',
		'iInter-diff' =>  '3, 4, 8',
		'WIN' =>  '3, 4, 8',
		'qin' =>  '3, 5, 6, 8, 12',
		'qpl/trio' =>  [[1, 3, 12, 4, 8], [1, 3, 12, 8, 13], [1, 3, 5, 8, 13], [3, 5, 12, 6, 8], [1, 3, 12, 6, 8]] ,
		'diff' =>  '1, 5, 6, 12, 13',
	],
	'9' => [
		/**
		Race 9
		*/
		'wins' =>  [[7, 9], [9]] ,
		'inters' =>  [[2, 6, 7, 9, 10], [2, 6, 10], [1, 2, 6, 10]] ,
		'dInter' =>  '7, 9',
		'dInter-diff' =>  '9',
		'iInter' =>  '2, 6, 10',
		'iInter-diff' =>  '2, 6, 10',
		'WIN' =>  '2, 6, 7, 9, 10',
		'qin' =>  '2, 6, 7, 9, 10',
		'qpl/trio' =>  [[7, 9, 2, 6, 10], [1, 9, 2, 6, 10]] ,
		'diff' =>  '1, 7',
	],
	'10' => [
		/**
		Race 10
		*/
		'wins' =>  [[6, 7, 9], [7], [7, 9]] ,
		'inters' =>  [[3, 4], [3, 4, 6, 7, 12], [3, 4, 6, 7, 9], [3, 6, 7, 9, 10], [2, 3, 6, 7, 9], [2, 3, 7, 9, 10], [1, 3, 4, 7, 10], [1, 3, 4, 10], [3, 4, 10], [3, 4, 7, 9, 10]] ,
		'dInter' =>  '6, 7, 9',
		'dInter-diff' =>  '6, 7',
		'iInter' =>  '3, 4, 6, 7, 9, 10, 2, 1',
		'iInter-diff' =>  '3, 6, 7',
		'WIN' =>  '3, 6, 7, 9',
		'qin' =>  '3, 4, 7, 9, 10',
		'qpl/trio' =>  [[3, 7, 9, 4, 6], [3, 7, 12, 4, 6], [3, 7, 9, 6, 10], [3, 7, 9, 2, 6], [3, 7, 9, 2, 10], [1, 3, 7, 4, 10], [3, 7, 9, 4, 10]] ,
		'diff' =>  '1, 2, 4, 9, 10, 12',
	],
];
