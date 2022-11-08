<?php
session_start();
// query to the database
function db_query(string $query, array $data = array())
{
	$string = "mysql:hostname=localhost;dbname=profile_db";
	$con = new PDO($string, 'root', '');
	// mysql prepared statements
	$stm = $con->prepare($query);
	$check = $stm->execute($data);

	if ($check) {
		$res = $stm->fetchAll(PDO::FETCH_ASSOC);
		if (is_array($res) && !empty($res)) {
			return $res;
		}
	}
	return false;
}
function is_logged_in(): bool
{
	if (!empty($_SESSION['PROFILE'])) {
		return true;
	}
	return false;
}
function redirect($path): void
{
	header("Location: $path");
	die;
}
// specialchars to string
function esc($str): string
{
	return htmlspecialchars($str);
}
// profile image
function get_image($path = ''): string
{
	if (file_exists($path)) {
		return $path;
	}

	return './assets/no_profile.png';
}


function user(string $key = '')
{
	if (is_logged_in()) {
		if (!empty($_SESSION['PROFILE'][$key])) {
			return $_SESSION['PROFILE'][$key];
		}
	}

	return false;
}
