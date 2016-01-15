<?PHP
class HogeTest extends PHPUnit_Framework_TestCase {

    function testHoge() {
        $this->assertEquals(2, 1 + 1);
    }

    function testFuga() {
        $fuga = new Fuga();

        $this->assertTrue($fuga->index());
    }
}
