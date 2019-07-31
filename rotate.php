<?php
function rotateMatrix90($array) {
	if(!empty($array)) {
		$array_y = sizeof($array);
		if(!empty($array[$array_y-1]) && is_array($array[$array_y-1])) {
			$array_x = sizeof($array[$array_y-1]);
			$array = array_reverse($array);
			$i = 0;
			do {
				$j = 0;
				do {
					$array[$j][] = $array[$i][$j];
					unset($array[$i][$j]);
					$j++;
				} while($j < $array_x);
				$i++;
			} while($i < $array_y);
		}
	}
	return $array;
}
$matrix = [
[1,2,3],
[4,5,6],
[7,8,9]
];
echo '<pre>';
print_r(rotateMatrix90($matrix));
?>