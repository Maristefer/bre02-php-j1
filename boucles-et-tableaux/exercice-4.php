<?php

$users = [
	[
		"firstName" => "Mari",
		"lastName" => "Doucet"
	],
	[
		"firstName" => "Hugues",
		"lastName" => "Froger"
	]
];

foreach($users as $louche) {
    
    
    echo "{$louche["firstName"]}  {$louche["lastName"]} <br>";
}

?>