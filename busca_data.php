<?php

function insereNoBanco($query){
	$mysqli = mysqli_connect("localhost", "root", "", "pontoclt");
	mysqli_query($mysqli,$query);
}