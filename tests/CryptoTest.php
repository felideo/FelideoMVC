<?php
use PHPUnit\Framework\TestCase;

class Crypto extends TestCase {
	public function test_encode() {
		$this->assertEquals('MzZMUQ00dzc181Q1sFT1NzJRDTZ3N0xX9Tc1UQ009lD1B7GNVQ0CXDLMDVQNgsJUgwzCgVjVwEjVwAAA', \Libs\Crypto::encode('test'));
	}

	public function test_decode() {
		$this->assertEquals('test', \Libs\Crypto::decode('MzZMUQ00dzc181Q1sFT1NzJRDTZ3N0xX9Tc1UQ009lD1B7GNVQ0CXDLMDVQNgsJUgwzCgVjVwEjVwAAA'));
	}
}