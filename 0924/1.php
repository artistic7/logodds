<?php
/**
small values: 1, 3, 4, 5, 6, 8
medium values: 1, 2, 3, 4, 5, 10, 11, 12, 13
inter values: 1, 3, 4, 5, count(interValues) = 4
*/

return [
	'6' => [
		/**
		Race 6
		*/
		'wins' =>  [[2, 9], [8], [9, 8], [8, 9, 7], [8, 2], [9]] ,
		'qpl/trio'       =>  [[8, 4, 2, 12, 5], [8, 4, 12, 2, 9], [4, 2, 7, 12, 8], [7, 12, 4, 9, 8], [7, 12, 1, 8, 4], [4, 13, 7, 12, 8], [13, 4, 8, 9, 7], [13, 4, 12, 8, 9], [12, 1, 4, 9, 8], [12, 7, 1, 8, 2], [8, 4, 2, 12, 1], [8, 13, 4, 12, 1], [1, 12, 7, 13, 8], [1, 12, 3, 13, 8], [4, 8, 13, 1, 9]] ,
		'All QPL values'    =>  '4, 8, 1, 9, 13, 2, 3, 12, 7, 5',
		'All Runners   '    =>  '4, 8, 1, 9, 13, 2, 3, 7, 12, 11, 5, 6, 10, 14',
		'Place' =>  '4',
		'Tce' =>  '4, 8, 1, 9, 13, 2',
	],
];
