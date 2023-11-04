<?php
/**
small values: 1, 2, 3, 6, 8, 12
medium values: 1, 2, 3, 4, 5, 7, 10
inter values: 1, 2, 3, count(interValues) = 3
*/

return [
	'1' => [
		/**
		Race 1
		*/
		'wins' =>  [[11], [2], [11, 2]] ,
		'qpl/trio'       =>  [[1, 3, 6, 7, 8], [3, 1, 7, 6, 11], [1, 3, 7, 6, 2], [3, 1, 6, 7, 4], [3, 1, 7, 11, 2]] ,
		'All QPL values'    =>  '3, 1, 11, 7, 2, 8, 6, 4',
		'All Runners   '    =>  '1, 3, 11, 7, 2, 9, 8, 6, 5, 4, 10',
		'Place' =>  '3',
		'Tce' =>  '1, 3, 11, 7, 2, 9',
	],
	'2' => [
		/**
		Race 2
		*/
		'wins' =>  [[7, 8], [8]] ,
		'qpl/trio'       =>  [[3, 1, 10, 7, 8], [3, 5, 10, 7, 8], [10, 2, 3, 5, 8]] ,
		'All QPL values'    =>  '3, 8, 10, 5, 2, 7, 1',
		'All Runners   '    =>  '3, 8, 10, 5, 2, 7, 9, 6, 11, 1, 4, 12',
		'Place' =>  '3',
		'Tce' =>  '3, 8, 10, 5, 2, 7',
	],
	'4' => [
		/**
		Race 4
		*/
		'wins' =>  [[5]] ,
		'qpl/trio'       =>  [[2, 6, 11, 3, 5], [2, 6, 8, 3, 5]] ,
		'All QPL values'    =>  '2, 3, 6, 8, 5, 11',
		'All Runners   '    =>  '2, 3, 6, 8, 5, 7, 11, 9, 1, 4, 10',
		'WP'  =>  '2',
		'Tce' =>  '2, 3, 6, 8, 5, 7',
	],
];
