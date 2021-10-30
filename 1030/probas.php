<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'3, 4, 1, 2, 8, 10, 9, 5, 7, 11, 6',
		'Poor man\'s bet' ,
			'Win' => '1, 2, 3, 4, 5, 9',
		'Qin(opt $20, ideal $40)' ,
			'3, 4, 1, 2',
		'Qpl($30, ideal $50)' ,
			'3 X 4, 2, 8',
		'Qpl($10, ideal $20)' ,
			'3, 4, 1 X 10, 11, 6',
		'-----------ideally-----------------',
		'Qpl($10)' ,
			'3, 4, 1 X 9, 5, 7',
	],
	'2' => [
		/**
		Race 2
		*/
		'7, 2, 4, 3, 5, 8, 6',
		'Poor man\'s bet' ,
			'Win' => '2, 3, 4, 5, 7',
		'Qin(opt $20, ideal $40)' ,
			'7, 2, 4, 3',
		'Qpl($30, ideal $50)' ,
			'7 X 2, 4, 8',
		'Qpl($10, ideal $20)' ,
			'7, 2, 4, 3 X 4, 8, 6',
		'-----------ideally-----------------',
		'Qpl($10)' ,
			'7, 2, 4, 3 X 7, 3, 5',
	],
	'3' => [
		/**
		Race 3
		*/
		'3, 2, 1, 13, 5, 8, 9, 15, 12, 7, 4, 11, 6, 14',
		'Poor man\'s bet' ,
			'Win' => '1, 2, 3, 5, 9, 13',
		'Qin(opt $20, ideal $40)' ,
			'3, 2, 1, 13',
		'Qpl($30, ideal $50)' ,
			'3 X 2, 13, 8',
		'Qpl($10, ideal $20)' ,
			'3, 2, 1 X 4, 11, 6',
		'-----------ideally-----------------',
		'Qpl($10)' ,
			'3, 2, 1 X 12, 7, 14',
	],
	'4' => [
		/**
		Race 4
		*/
		'9, 4, 1, 2, 3, 7, 8, 16, 6, 11, 5, 10, 12, 14, 15, 13',
		'Poor man\'s bet' ,
			'Win' => '1, 2, 3, 4, 7, 9',
		'Qin(opt $20, ideal $40)' ,
			'9, 4, 1, 2',
		'Qpl($30, ideal $50)' ,
			'9 X 4, 2, 8',
		'Qpl($10, ideal $20)' ,
			'9, 4, 1 X 10, 15, 13',
		'-----------ideally-----------------',
		'Qpl($10)' ,
			'9, 4, 1 X 5, 12, 14',
	],
	'5' => [
		/**
		Race 5
		*/
		'9, 6, 5, 2, 4, 7, 8, 3, 10, 12, 1, 16, 11, 14, 13, 15',
		'Poor man\'s bet' ,
			'Win' => '2, 3, 5, 6, 7, 9',
		'Qin(opt $20, ideal $40)' ,
			'9, 6, 5, 2',
		'Qpl($30, ideal $50)' ,
			'9 X 6, 2, 4',
		'Qpl($10, ideal $20)' ,
			'9, 6, 5 X 11, 13, 15',
		'-----------ideally-----------------',
		'Qpl($10)' ,
			'9, 6, 5 X 1, 16, 14',
	],
	'6' => [
		/**
		Race 6
		*/
		'14, 11, 7, 3, 6, 2, 4, 10, 9, 5, 15, 12, 1, 13',
		'Poor man\'s bet' ,
			'Win' => '3, 7, 9, 11, 14',
		'Qin(opt $20, ideal $40)' ,
			'14, 11, 7, 3',
		'Qpl($30, ideal $50)' ,
			'14 X 11, 6, 2',
		'Qpl($10, ideal $20)' ,
			'14, 11, 7 X 10, 15, 13',
		'-----------ideally-----------------',
		'Qpl($10)' ,
			'14, 11, 7 X 5, 12, 1',
	],
	'7' => [
		/**
		Race 7
		*/
		'5, 3, 1, 16, 6, 19, 10, 8, 4, 14, 2, 11, 9, 17',
		'Poor man\'s bet' ,
			'Win' => '1, 3, 5, 16',
		'Qin(opt $20, ideal $40)' ,
			'5, 3, 1, 16',
		'Qpl($30, ideal $50)' ,
			'5 X 6, 10, 8',
		'Qpl($10, ideal $20)' ,
			'5, 3, 1 X 2, 11, 17',
		'-----------ideally-----------------',
		'Qpl($10)' ,
			'5, 3, 1 X 19, 14, 9',
	],
];
