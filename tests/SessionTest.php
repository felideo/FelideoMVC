<?php
use PHPUnit\Framework\TestCase;

class Session extends TestCase {


	public function test_init(){
		(new \Libs\Session)->init();
		$this->isType('array', $_SESSION);
	}

	public function test_set(){
		$session = new \Libs\Session();

		$session->init();
		$session->set('test', 'test');

		$this->assertNotEmpty($_SESSION['test']);
	}

	public function test_set_02(){
		$session = new \Libs\Session();

		$session->init();
		$session->set('test', 'test');

		$this->assertEquals('test', $_SESSION['test']);
	}

	public function test_get(){
		$session = new \Libs\Session();
		$session->set('test', 'test');
		$test = $session->get('test');

		$this->assertNotEmpty($test);
	}

	public function test_get_02(){
		$session = new \Libs\Session();
		$session->set('test', 'test');
		$test = $session->get('test');

		$this->assertEquals('test', $test);
	}

	public function remove($key){
		$session = new \Libs\Session();
		$session->set('test', 'test');
		$test = $session->remove('test');

		$this->assertEmpty($test);
	}

	public function destroy(){
		$session = new \Libs\Session();
		$session->destroy();

		$this->assertEmpty($_SESSION);
	}

	public function renew(){
		$session = new \Libs\Session();
		$session = new \Libs\renew();

		$this->isType('array', $_SESSION);
	}
}