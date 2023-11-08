<?php

return [
    1 => [
        'wins' => [1, 2, 4, 5, 6, 7, 8, 9, 10, 12, 13],
        'qins' => [
            [1, 2], [1, 3], [1, 4], [1, 5], [1, 9], [1, 10], 
            [2, 3], [2, 5], [2, 7], [2, 13],
            [4, 5], [4, 8], [4, 11], 
            [5, 6], [5, 9], 
            [6, 7], [6, 8], 
            [7, 10], 
            [7, 12], 
            [8, 10],  
            [10, 12],  
        ]
    ],
    2 => [
        'wins' => [2, 3, 4, 5, 6, 8, 9, 10, 11],
        'qins' => [
            [1, 2], 
            [2, 5], [2, 6], [2, 8], [2, 9], [2, 10], [2, 12], [2, 13], 
            [3, 6], [3, 11],
            [4, 5], [4, 12], 
            [6, 9], 
            [8, 12],
            [9, 10],
            [10, 13], 
        ]
    ],
    3 => [
        'wins' => [1, 2, 3, 4, 5, 6, 7, 9, 11, 12],
        'qins' => [
            [3, 1], [3, 2], [3, 4], [3, 5], [3, 6], [3, 7], [3, 9], [3, 10], [3, 11], [3, 12], 
            [1, 9], 
            [2, 8], [2, 11],
            [4, 6], 
            [5, 12], 
            [6, 9], 
            [7, 12],  
        ]
    ],
    4 => [
        'wins' => [2, 3, 4, 5, 7, 8, 13],
        'qins' => [
            [1, 5], [1, 7], 
            [2, 3],[2, 6], [2, 8], 
            [4, 2], [4, 3], [4, 6], [4, 9], 
            [6, 8], 
            [7, 12], 
            [10, 13] 
        ]
    ],
    5 => [
        'wins' => [3, 4, 5, 6, 7, 8, 9, 11, 12],
        'qins' => [
            [2, 7], [2, 9], [2, 11],
            [3, 7], [3, 8], 
            [4, 6], 
            [5, 3], [5, 6], [5, 8], [5, 9], [5, 10],
            [7, 8], [7, 9], [7, 12],
        ]
    ],
    6 => [
        'wins' => [1, 2, 4, 5, 6, 8, 9, 11, 12],
        'qins' => [
            [1, 3], [1, 8], [1, 7],
            [2, 13],  
            [3, 12],
            [4, 7], [4, 8], [4, 9], 
            [5, 8], 
            [6, 2], [6, 4], [6, 5], [6, 7], [6, 11], 
            [8, 11],
            [9, 12], 
            [10, 11]
        ]
    ],
    7 => [
        'wins' => [2, 3, 4, 5, 7, 8, 11, 12],
        'qins' => [
            [1, 3],
            [2, 5], 
            [3, 5], [3, 8], 
            [4, 8], [4, 11], [4, 12],
            [7, 2], [7, 5], [7, 8], [7, 10],[7, 11], 
            [9, 11], 
        ]
    ],
    8 => [
        'wins' => [1, 2, 5, 7, 8, 9, 11, 12, 13],
        'qins' => [
            [1, 7], [1, 9], 
            [2, 9], 
            [8, 1], [8, 2], [8, 4], [8, 5], [8, 6], [8, 9], [8, 12], [8, 13], 
            [10, 11], 
        ]
    ],
    9 => [
        'wins' => [1, 2, 4, 7, 9, 12],
        'qins' => [
            [1, 4], 
            [2, 6], [2, 12], 
            [4, 6], [4, 13], 
            [7, 12], 
            [9, 8], [9, 10], 
        ]
    ],
    10 => [
        'wins' => [3, 4, 6, 9, 10],
        'qins' => [
            [1, 6], 
            [3, 8], 
            [4, 7], 
            [8, 9], 
            [10, 7], 
        ]
    ],
    11 => [
        'wins' => [4, 8, 9, 11],
        'qins' => [
            [1,4], 
            [5, 9], 
            [7, 8], 
            [11, 10], 
        ]
    ],
    12 => [
        'wins' => [6, 11],
        'qins' => [
            [5, 6], 
            [6, 11] 
        ]
    ],
    13 => [
        'wins' => [8],
        'qins' => [
            [8, 9], 
        ]
    ],
    14 => [
        'wins' => [1, 7, 14],
        'qins' => [
            [1, 5], 
            [7, 8], 
            [14, 6],
        ]
    ],
];


?>