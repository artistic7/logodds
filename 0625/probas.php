<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'Win' =>  '2',
		'wins' =>  [[3], [2]] ,
		'inters' =>  [[2, 10, 13, 14], [2, 3, 8, 13, 14], [3, 4, 13, 14]] ,
		'dInter' =>  '3, 2',
		'dInter-diff' =>  '3, 2',
		'iInter' =>  '2, 13, 14, 3',
		'iInter-diff' =>  '2, 13, 14, 3',
		'qin' =>  '3, 4, 13, 14 X 2',
		'qpl/trio' =>  [[3, 14, 2, 10, 13], [3, 14, 2, 8, 13], [3, 14, 2, 4, 13]] ,
		'diff' =>  '8, 4',
	],
	'2' => [
		/**
		Race 2
		*/
		'Win' =>  '7',
		'wins' =>  [[6, 7], [6], [7], [7, 8]] ,
		'inters' =>  [[3, 5, 6, 8, 10], [3, 5, 8], [3, 4, 5, 6, 8], [3, 5, 10], [3, 5, 7, 10], [3, 5, 6, 7, 10], [3, 5, 6, 10], [3, 5, 6]] ,
		'dInter' =>  '6, 7, 8',
		'dInter-diff' =>  '6, 8',
		'iInter' =>  '3, 5, 8, 6, 10, 7',
		'iInter-diff' =>  '3, 5, 8, 6',
		'qin' =>  '3, 5, 6, 10 X 7',
		'qpl/trio' =>  [[3, 5, 6, 8, 10], [3, 5, 7, 6, 8], [3, 5, 4, 6, 8], [3, 5, 7, 6, 10]] ,
		'diff' =>  '7, 4, 10',
	],
	'4' => [
		/**
		Race 4
		*/
		'Win' =>  '5, 6, 14',
		'wins' =>  [[5, 6, 14], [6]] ,
		'inters' =>  [[2, 7], [2, 5, 7, 14]] ,
		'dInter' =>  '5, 14',
		'dInter-diff' =>  '5, 14',
		'iInter' =>  '2, 7',
		'iInter-diff' =>  '2, 7',
		'qin' =>  '2, 7 X 5, 6, 14',
		'qpl/trio' =>  [[5, 7, 14, 2, 6]] ,
		'diff' =>  '',
	],
	'5' => [
		/**
		Race 5
		*/
		'Win' =>  '8, 9',
		'wins' =>  [[8, 9]] ,
		'inters' =>  [[3, 5, 11], [3, 11, 14]] ,
		'dInter' =>  '',
		'dInter-diff' =>  '',
		'iInter' =>  '3, 11',
		'iInter-diff' =>  '3, 11',
		'qin' =>  '3, 11, 14 X 8, 9',
		'qpl/trio' =>  [[3, 5, 9, 8, 11], [3, 9, 14, 8, 11]] ,
		'diff' =>  '14',
	],
	'8' => [
		/**
		Race 8
		*/
		'wins' =>  [[8]] ,
		'inters' =>  [[1, 3, 4, 12], [1, 3, 4, 8, 12], [1, 3, 8, 12, 13]] ,
		'dInter' =>  '8',
		'dInter-diff' =>  '8',
		'iInter' =>  '1, 3, 4, 12, 8',
		'iInter-diff' =>  '1, 3, 4, 12, 8',
		'qin' =>  '1, 3, 8, 12, 13',
		'qpl/trio' =>  [[1, 3, 12, 4, 8], [1, 3, 12, 8, 13]] ,
		'diff' =>  '13',
	],
	'9' => [
		/**
		Race 9
		*/
		'wins' =>  [[7, 9]] ,
		'inters' =>  [[2, 6, 7, 9, 10], [2, 6, 10]] ,
		'dInter' =>  '7, 9',
		'dInter-diff' =>  '7, 9',
		'iInter' =>  '2, 6, 10',
		'iInter-diff' =>  '2, 6, 10',
		'qin' =>  '2, 6, 7, 9, 10',
		'qpl/trio' =>  [[7, 9, 2, 6, 10]] ,
		'diff' =>  '',
	],
	'10' => [
		/**
		Race 10
		*/
		'wins' =>  [[6, 7, 9]] ,
		'inters' =>  [[3, 4], [3, 4, 6, 7, 12], [3, 4, 6, 7, 9], [3, 6, 7, 9, 10]] ,
		'dInter' =>  '6, 7, 9',
		'dInter-diff' =>  '6, 7',
		'iInter' =>  '3, 4, 6, 7, 9',
		'iInter-diff' =>  '3, 4, 6, 7',
		'qin' =>  '3, 6, 7, 9, 10',
		'qpl/trio' =>  [[3, 7, 9, 4, 6], [3, 7, 12, 4, 6], [3, 7, 9, 6, 10]] ,
		'diff' =>  '9, 10, 12',
	],
];
