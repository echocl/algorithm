<?php 

$arr = [
	[
		'a' => 'a1',
		'c' => [
			['a' => 'b1'],
			['a' => 'b2'],
			['a' => 'b3'],
		]
	],
	['a' => 'a2'],
	['a' => 'a3'],
	['a' => 'a4'],
	['a' => 'a5'],
];
$over = [];
$i = 0;
function recursion($arr, &$over)
{
	foreach ($arr as $key => $value) {
		$over[] = $value['a'];
		if(isset($value['c'])){
			recursion($value['c'], $over);
		}
	}
}

recursion($arr, $over);
var_dump($over);