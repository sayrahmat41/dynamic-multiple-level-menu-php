<?php
$json = file_get_contents("menu.json");
$menu = json_decode($json, true);

function sub($items, $parent_id){
	echo "<ul>";
	foreach($items as $item){
		if($item['parent_id'] == $parent_id){
			echo "<li><a href='#'>".$item['name']."</a>";
			sub($items, $item['id']);
			echo "</li>";
		}
	}
	echo "</ul>";
}

sub($menu, 0);

echo "</ul>";
 
