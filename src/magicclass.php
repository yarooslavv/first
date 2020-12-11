<?php
namespace App;

class MagicClass {
	public function __construct() {
		echo "__construct()";
	}

	public function __destruct() {
		echo "__destruct()";
	}

	public function __call() {
		echo "__call()";
	}

	public function __callStatic() {
		echo "__callStatic()";
	}

	public function __get() {
		echo "__get()";
	}

	public function __set() {
		echo "__set()";
	}

	public function __isset() {
		echo "__isset()";
	}

	public function __unset() {
		echo "__unset()";
	}

	public function __sleep() {
		echo "__sleep()";
	}

	public function __wakeup() {
		echo "__wakeup()";
	}

	public function __serialize() {
		echo "__serialize()";
	}

	public function __unserialize() {
		echo "__unserialize()";
	}

	public function __toString() {
		echo "__toString()";
	}

	public function __invoke() {
		echo "__invoke()";
	}

	public function __set_state() {
		echo "__set_state()";
	}

	public function __clone() {
		echo "__clone()";
	}

	public function __debugInfo() {
		echo "__debugInfo()";
	}

}