<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'9, 2, 3, 4, 10, 5, 1, 6, 13, 12, 14, 8, 7, 11',
		'Poor man\'s bet' ,
			'Win' => '5, 1',
		'Qin($10), Tce($1)' ,
			'1, 2, 3, 4, 5, 9',
		'Qin($20)' ,
			'9, 2, 3, 4',
		'Qpl($30)' ,
			'9 X 2, 4, 10',
		'Qpl($20)' ,
			'3 X 2, 4, 10',
		'Qpl($10)' ,
			'9, 2, 3 X 13, 8, 11',
		'-----------ideally-----------------',
		'Qpl($10)' ,
			'9, 2, 3 X 12, 14, 7',
	],
	'2' => [
		/**
		Race 2
		*/
		'6, 4, 11, 3, 2, 1, 7, 10, 5, 8, 9',
		'Poor man\'s bet' ,
			'Win' => '11, 2',
		'Qin($10), Tce($1)' ,
			'2, 3, 4, 6, 11',
		'Qin($20)' ,
			'6, 4, 11, 3',
		'Qpl($30)' ,
			'6 X 3, 1, 7',
		'Qpl($20)' ,
			'4 X 3, 1, 7',
		'Qpl($10)' ,
			'6, 4, 11 X 7, 5, 9',
		'-----------ideally-----------------',
		'Qpl($10)' ,
			'6, 4, 11 X 2, 10, 8',
	],
	'3' => [
		/**
		Race 3
		*/
		'4, 2, 11, 6, 10, 8, 5, 9, 7, 3, 1',
		'Poor man\'s bet' ,
			'Win' => '11, 6',
		'Qin($10), Tce($1)' ,
			'2, 4, 6, 11',
		'Qin($20)' ,
			'4, 2, 11, 6',
		'Qpl($30)' ,
			'4 X 5, 9, 7',
		'Qpl($20)' ,
			'2 X 5, 9, 7',
		'Qpl($10)' ,
			'4, 2, 11 X 7, 3, 1',
		'-----------ideally-----------------',
		'Qpl($10)' ,
			'4, 2, 11 X 6, 10, 8',
	],
	'4' => [
		/**
		Race 4
		*/
		'9, 10, 6, 4, 1, 8, 12, 7, 14, 11, 3, 5, 2, 13',
		'Poor man\'s bet' ,
			'Win' => '12, 7',
		'Qin($10), Tce($1)' ,
			'1, 4, 6, 7, 9, 10, 12',
		'Qin($20)' ,
			'9, 10, 6, 4',
		'Qpl($30)' ,
			'9 X 10, 6, 4',
		'Qpl($20)' ,
			'1 X 10, 6, 4',
		'Qpl($10)' ,
			'9, 10, 6, 1 X 11, 2, 13',
		'-----------ideally-----------------',
		'Qpl($10)' ,
			'9, 10, 6, 1 X 14, 3, 5',
	],
	'5' => [
		/**
		Race 5
		*/
		'6, 7, 2, 1, 12, 5, 4, 8, 10, 11, 9, 14, 3, 13',
		'Poor man\'s bet' ,
			'Win' => '4, 8',
		'Qin($10), Tce($1)' ,
			'1, 2, 4, 6, 7, 8',
		'Qin($20)' ,
			'6, 7, 2, 1',
		'Qpl($30)' ,
			'6 X 7, 1, 12',
		'Qpl($20)' ,
			'2 X 7, 1, 12',
		'Qpl($10)' ,
			'6, 7, 2 X 9, 14, 3',
		'-----------ideally-----------------',
		'Qpl($10)' ,
			'6, 7, 2 X 10, 11, 13',
	],
	'6' => [
		/**
		Race 6
		*/
		'8, 10, 12, 3, 4, 2, 11, 9, 13, 6, 5, 7, 1, 14',
		'Poor man\'s bet' ,
			'Win' => '4, 2',
		'Qin($10), Tce($1)' ,
			'2, 3, 4, 8, 10, 12',
		'Qin($20)' ,
			'8, 10, 12, 3',
		'Qpl($30)' ,
			'8 X 12, 3, 9',
		'Qpl($20)' ,
			'10 X 12, 3, 9',
		'Qpl($10)' ,
			'8, 10, 12 X 7, 1, 14',
		'-----------ideally-----------------',
		'Qpl($10)' ,
			'8, 10, 12 X 11, 13, 6',
	],
	'7' => [
		/**
		Race 7
		*/
		'9, 6, 4, 2, 7, 1, 11, 10, 8, 5, 3',
		'Poor man\'s bet' ,
			'Win' => '1, 5',
		'Qin($10), Tce($1)' ,
			'1, 2, 4, 5, 6, 7, 9',
		'Qin($20)' ,
			'9, 6, 4, 2',
		'Qpl($30)' ,
			'9 X 6, 4, 2',
		'Qpl($20)' ,
			'7 X 6, 4, 2',
		'Qpl($10)' ,
			'9, 6, 4, 7 X 11, 10, 8',
		'-----------ideally-----------------',
		'Qpl($10)' ,
			'9, 6, 4, 7 X 1, 5, 3',
	],
	'8' => [
		/**
		Race 8
		*/
		'5, 4, 8, 3, 12, 2, 9, 10, 11, 6, 7, 1',
		'Poor man\'s bet' ,
			'Win' => '12, 9',
		'Qin($10), Tce($1)' ,
			'3, 4, 5, 8, 9, 12',
		'Qin($20)' ,
			'5, 4, 8, 3',
		'Qpl($30)' ,
			'5 X 4, 8, 2',
		'Qpl($20)' ,
			'3 X 4, 8, 2',
		'Qpl($10)' ,
			'5, 4, 8, 3 X 10, 11, 6',
		'-----------ideally-----------------',
		'Qpl($10)' ,
			'5, 4, 8, 3 X 9, 7, 1',
	],
	'9' => [
		/**
		Race 9
		*/
		'1, 2, 5, 4, 8, 12, 3, 11, 7, 6, 9, 10',
		'Poor man\'s bet' ,
			'Win' => '12, 3',
		'Qin($10), Tce($1)' ,
			'1, 2, 3, 4, 5, 12',
		'Qin($20)' ,
			'1, 2, 5, 4',
		'Qpl($30)' ,
			'1 X 2, 4, 8',
		'Qpl($20)' ,
			'5 X 2, 4, 8',
		'Qpl($10)' ,
			'1, 2, 5 X 11, 6, 10',
		'-----------ideally-----------------',
		'Qpl($10)' ,
			'1, 2, 5 X 3, 7, 9',
	],
	'10' => [
		/**
		Race 10
		*/
		'10, 9, 2, 4, 1, 5, 13, 14, 12, 8, 6, 3, 7, 11',
		'Poor man\'s bet' ,
			'Win' => '4, 13',
		'Qin($10), Tce($1)' ,
			'2, 4, 9, 10, 13',
		'Qin($20)' ,
			'10, 9, 2, 4',
		'Qpl($30)' ,
			'10 X 9, 1, 5',
		'Qpl($20)' ,
			'2 X 9, 1, 5',
		'Qpl($10)' ,
			'10, 9, 2 X 12, 3, 7',
		'-----------ideally-----------------',
		'Qpl($10)' ,
			'10, 9, 2 X 8, 6, 11',
	],
];