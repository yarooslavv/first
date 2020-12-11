<?php 
class Point{
	public $x;

	public $y;

	public static function swap($x, $y, $dx, $dy){
		$x += $dx;
		$y += $dy;
		return $x." ".$y;
	}
}

class Vector{
	public $x;

	public $y;

	public static function long($x, $y){
		return sqrt($x*$x + $y*$y);
	}

	public static function nol($x, $y){
		if ($x == 0 and $y == 0)
			return "Вектор нулевой";
		else
			return "Вектор ненулевой";
	}

	public static function square($x, $y, $x1, $y1){
		if ($x*$x1 + $y*$y1 == 0)
			return "Векторы перпендикулярны";
		else
			return "Векторы не перпендикулярны";
	}
}