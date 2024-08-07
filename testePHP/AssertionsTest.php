<?php 

use PHPUnit\Framework\TestCase;

final class AssertionsTest extends TestCase {
    public function testFalho() {
        $bool = true;
        $this->assertTrue($bool);
    }
}
//php vendor\bin\phpunit testePHP\AssertionsTest.php