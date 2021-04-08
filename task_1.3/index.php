<?php

$array = [
    [
        'sort' => '20',
        'name' => 'Mike'
    ],
    [
        'sort' => '10',
        'name' => 'Adam'
    ],
    [
        'sort' => '40',
        'name' => 'Stive'
    ],
    [
        'sort' => '300',
        'name' => 'Jane'
    ],
];

usort($array, function($a, $b) {
    if ($a[sort] == $b[sort]) {return 0;}
    return ($a[sort] > $b[sort]) ? -1 : 1;
});

echo '<pre>';
print_r ($array);
echo '</pre>';