<?php
use PHPUnit\Framework\TestCase;

class Folder extends TestCase {
	public function test_check_folder(){
		$this->assertEquals('test_folder', (new \Libs\Folder())->check_folder('test_folder'));
	}

	public function test_is_dir(){
		$this->assertFileExists('test_folder');
	}

	public function test_delete_folder(){
		$this->assertTrue((new \Libs\Folder())->delete_folder('test_folder'));
	}
}