<?php
/**
 * Generated by build/gen_test on 2014-02-26 at 05:34:15.
 */
require_once('src/lightncandy.php');

class LightnCandyTest extends PHPUnit_Framework_TestCase
{
    /**
     * @covers LightnCandy::buildHelperTable
     */
    public function testOn_buildHelperTable() {
        $method = new ReflectionMethod('LightnCandy', 'buildHelperTable');
        $method->setAccessible(true);
        $this->assertEquals(Array(), $method->invoke(null,
            Array(), Array()
        ));
        $this->assertEquals(Array('flags' => Array('exhlp' => 1)), $method->invoke(null,
            Array('flags' => Array('exhlp' => 1)), Array('helpers' => Array('abc'))
        ));
        $this->assertEquals(Array('error' => Array('Can not find custom helper function defination abc() !'), 'flags' => Array('exhlp' => 0)), $method->invoke(null,
            Array('error' => Array(), 'flags' => Array('exhlp' => 0)), Array('helpers' => Array('abc'))
        ));
        $this->assertEquals(Array('flags' => Array('exhlp' => 1), 'helpers' => Array('LCRun2::val' => 'LCRun2::val')), $method->invoke(null,
            Array('flags' => Array('exhlp' => 1), 'helpers' => Array()), Array('helpers' => Array('LCRun2::val'))
        ));
        $this->assertEquals(Array('flags' => Array('exhlp' => 1), 'helpers' => Array('test' => 'LCRun2::val')), $method->invoke(null,
            Array('flags' => Array('exhlp' => 1), 'helpers' => Array()), Array('helpers' => Array('test' => 'LCRun2::val'))
        ));
    }
    /**
     * @covers LightnCandy::expandPartial
     */
    public function testOn_expandPartial() {
        $method = new ReflectionMethod('LightnCandy', 'expandPartial');
        $this->assertEquals("123\n", $method->invoke(null,
            '{{> test1}}', Array('basedir' => Array('tests'), 'usedFeature' => Array('partial' =>0), 'fileext' => Array('.tmpl'))
        ));
        $this->assertEquals("a123\nb\n", $method->invoke(null,
            '{{> test2}}', Array('basedir' => Array('tests'), 'usedFeature' => Array('partial' =>0), 'fileext' => Array('.tmpl'))
        ));
    }
    /**
     * @covers LightnCandy::readPartial
     */
    public function testOn_readPartial() {
        $method = new ReflectionMethod('LightnCandy', 'readPartial');
        $this->assertEquals("123\n", $method->invoke(null,
            'test1', Array('basedir' => Array('tests'), 'usedFeature' => Array('partial' =>0), 'fileext' => Array('.tmpl'))
        ));
        $this->assertEquals("a{{> test1}}b\n", $method->invoke(null,
            'test2', Array('basedir' => Array('tests'), 'usedFeature' => Array('partial' =>0), 'fileext' => Array('.tmpl'))
        ));
        $this->assertEquals(null, $method->invoke(null,
            'test3', Array('basedir' => Array('tests'), 'usedFeature' => Array('partial' =>0), 'fileext' => Array('.tmpl'))
        ));
    }
    /**
     * @covers LightnCandy::buildCXFileext
     */
    public function testOn_buildCXFileext() {
        $method = new ReflectionMethod('LightnCandy', 'buildCXFileext');
        $method->setAccessible(true);
        $this->assertEquals(Array('.tmpl'), $method->invoke(null,
            Array()
        ));
        $this->assertEquals(Array('test'), $method->invoke(null,
            Array('fileext' => 'test')
        ));
        $this->assertEquals(Array('test1'), $method->invoke(null,
            Array('fileext' => Array('test1'))
        ));
        $this->assertEquals(Array('test2', 'test3'), $method->invoke(null,
            Array('fileext' => Array('test2', 'test3'))
        ));
    }
    /**
     * @covers LightnCandy::buildCXBasedir
     */
    public function testOn_buildCXBasedir() {
        $method = new ReflectionMethod('LightnCandy', 'buildCXBasedir');
        $method->setAccessible(true);
        $this->assertEquals(Array(getcwd()), $method->invoke(null,
            Array()
        ));
        $this->assertEquals(Array(getcwd()), $method->invoke(null,
            Array('basedir' => 0)
        ));
        $this->assertEquals(Array(getcwd()), $method->invoke(null,
            Array('basedir' => '')
        ));
        $this->assertEquals(Array(getcwd()), $method->invoke(null,
            Array('basedir' => Array())
        ));
        $this->assertEquals(Array('src'), $method->invoke(null,
            Array('basedir' => Array('src'))
        ));
        $this->assertEquals(Array(getcwd()), $method->invoke(null,
            Array('basedir' => Array('dir_not_found'))
        ));
        $this->assertEquals(Array('src'), $method->invoke(null,
            Array('basedir' => Array('src', 'dir_not_found'))
        ));
        $this->assertEquals(Array('src', 'tests'), $method->invoke(null,
            Array('basedir' => Array('src', 'tests'))
        ));
    }
    /**
     * @covers LightnCandy::getPHPCode
     */
    public function testOn_getPHPCode() {
        $method = new ReflectionMethod('LightnCandy', 'getPHPCode');
        $method->setAccessible(true);
        $this->assertEquals('function($a) {return;}', $method->invoke(null,
            function ($a) {return;}
        ));
        $this->assertEquals('function($a) {return;}', $method->invoke(null,
             	function ($a) {return;} 
        ));
        $this->assertEquals('', $method->invoke(null,
            'Directory::close'
        ));
    }
    /**
     * @covers LightnCandy::handleError
     */
    public function testOn_handleError() {
        $method = new ReflectionMethod('LightnCandy', 'handleError');
        $method->setAccessible(true);
        $this->assertEquals(true, $method->invoke(null,
            Array('level' => 1, 'stack' => Array('X'), 'flags' => Array('errorlog' => 0, 'exception' => 0), 'error' => Array())
        ));
        $this->assertEquals(false, $method->invoke(null,
            Array('level' => 0, 'error' => Array())
        ));
        $this->assertEquals(true, $method->invoke(null,
            Array('level' => 0, 'error' => Array('some error'), 'flags' => Array('errorlog' => 0, 'exception' => 0))
        ));
    }
    /**
     * @covers LightnCandy::getBoolStr
     */
    public function testOn_getBoolStr() {
        $method = new ReflectionMethod('LightnCandy', 'getBoolStr');
        $method->setAccessible(true);
        $this->assertEquals('true', $method->invoke(null,
            1
        ));
        $this->assertEquals('true', $method->invoke(null,
            999
        ));
        $this->assertEquals('false', $method->invoke(null,
            0
        ));
        $this->assertEquals('false', $method->invoke(null,
            -1
        ));
    }
    /**
     * @covers LightnCandy::getFuncName
     */
    public function testOn_getFuncName() {
        $method = new ReflectionMethod('LightnCandy', 'getFuncName');
        $method->setAccessible(true);
        $this->assertEquals('LCRun2::test', $method->invoke(null,
            Array('flags' => Array('standalone' => 0)), 'test'
        ));
        $this->assertEquals('LCRun2::test2', $method->invoke(null,
            Array('flags' => Array('standalone' => 0)), 'test2'
        ));
        $this->assertEquals("\$cx['funcs']['test3']", $method->invoke(null,
            Array('flags' => Array('standalone' => 1)), 'test3'
        ));
    }
    /**
     * @covers LightnCandy::getArrayStr
     */
    public function testOn_getArrayStr() {
        $method = new ReflectionMethod('LightnCandy', 'getArrayStr');
        $method->setAccessible(true);
        $this->assertEquals('', $method->invoke(null,
            Array()
        ));
        $this->assertEquals('[a]', $method->invoke(null,
            Array('a')
        ));
        $this->assertEquals('[a][b][c]', $method->invoke(null,
            Array('a', 'b', 'c')
        ));
    }
    /**
     * @covers LightnCandy::getArrayCode
     */
    public function testOn_getArrayCode() {
        $method = new ReflectionMethod('LightnCandy', 'getArrayCode');
        $method->setAccessible(true);
        $this->assertEquals('', $method->invoke(null,
            Array()
        ));
        $this->assertEquals("['a']", $method->invoke(null,
            Array('a')
        ));
        $this->assertEquals("['a']['b']['c']", $method->invoke(null,
            Array('a', 'b', 'c')
        ));
    }
    /**
     * @covers LightnCandy::fixVariable
     */
    public function testOn_fixVariable() {
        $method = new ReflectionMethod('LightnCandy', 'fixVariable');
        $method->setAccessible(true);
        $this->assertEquals(Array('this'), $method->invoke(null,
            'this', Array('flags' => Array('advar' => 0, 'this' => 0))
        ));
        $this->assertEquals(Array(null), $method->invoke(null,
            'this', Array('flags' => Array('advar' => 0, 'this' => 1))
        ));
        $this->assertEquals(Array(1, null), $method->invoke(null,
            '../', Array('flags' => Array('advar' => 0, 'this' => 1))
        ));
        $this->assertEquals(Array(1, null), $method->invoke(null,
            '../.', Array('flags' => Array('advar' => 0, 'this' => 1))
        ));
        $this->assertEquals(Array(1, null), $method->invoke(null,
            '../this', Array('flags' => Array('advar' => 0, 'this' => 1))
        ));
        $this->assertEquals(Array(1, 'a'), $method->invoke(null,
            '../a', Array('flags' => Array('advar' => 0, 'this' => 1))
        ));
        $this->assertEquals(Array(2, 'a', 'b'), $method->invoke(null,
            '../../a.b', Array('flags' => Array('advar' => 0, 'this' => 0))
        ));
        $this->assertEquals(Array(2, '[a]', 'b'), $method->invoke(null,
            '../../[a].b', Array('flags' => Array('advar' => 0, 'this' => 0))
        ));
        $this->assertEquals(Array(2, 'a', 'b'), $method->invoke(null,
            '../../[a].b', Array('flags' => Array('advar' => 1, 'this' => 0))
        ));
    }
    /**
     * @covers LightnCandy::setJSONTarget
     */
    public function testOn_setJSONTarget() {
        $method = new ReflectionMethod('LightnCandy', 'setJSONTarget');
        $method->setAccessible(true);
        $this->assertEquals(Array(), $method->invoke(null,
            Array(), false
        ));
        $this->assertEquals(Array(), $method->invoke(null,
            Array(), true
        ));
    }
    /**
     * @covers LightnCandy::parseTokenArgs
     */
    public function testOn_parseTokenArgs() {
        $method = new ReflectionMethod('LightnCandy', 'parseTokenArgs');
        $method->setAccessible(true);
        $this->assertEquals(Array(false, Array(Array(null))), $method->invoke(null,
            Array(0,0,0,0,0,''), Array('flags' => Array('advar' => 0, 'this' => 1, 'namev' => 0))
        ));
        $this->assertEquals(Array(true, Array(Array(null))), $method->invoke(null,
            Array(0,0,'{{{',0,0,''), Array('flags' => Array('advar' => 0, 'this' => 1, 'namev' => 0))
        ));
        $this->assertEquals(Array(false, Array(Array('a'))), $method->invoke(null,
            Array(0,0,0,0,0,'a'), Array('flags' => Array('advar' => 0, 'this' => 1, 'namev' => 0))
        ));
        $this->assertEquals(Array(false, Array(Array('a'), Array('b'))), $method->invoke(null,
            Array(0,0,0,0,0,'a  b'), Array('flags' => Array('advar' => 0, 'this' => 1, 'namev' => 0))
        ));
        $this->assertEquals(Array(false, Array(Array('a'), Array('"b'), Array('c"'))), $method->invoke(null,
            Array(0,0,0,0,0,'a "b c"'), Array('flags' => Array('advar' => 0, 'this' => 1, 'namev' => 0))
        ));
        $this->assertEquals(Array(false, Array(Array('a'), Array('"b c"'))), $method->invoke(null,
            Array(0,0,0,0,0,'a "b c"'), Array('flags' => Array('advar' => 1, 'this' => 1, 'namev' => 0))
        ));
        $this->assertEquals(Array(false, Array(Array('a'), Array('[b'), Array('c]'))), $method->invoke(null,
            Array(0,0,0,0,0,'a [b c]'), Array('flags' => Array('advar' => 0, 'this' => 1, 'namev' => 0))
        ));
        $this->assertEquals(Array(false, Array(Array('a'), Array('[b'), Array('c]'))), $method->invoke(null,
            Array(0,0,0,0,0,'a [b c]'), Array('flags' => Array('advar' => 0, 'this' => 1, 'namev' => 1))
        ));
        $this->assertEquals(Array(false, Array(Array('a'), Array('b c'))), $method->invoke(null,
            Array(0,0,0,0,0,'a [b c]'), Array('flags' => Array('advar' => 1, 'this' => 1, 'namev' => 0))
        ));
        $this->assertEquals(Array(false, Array(Array('a'), Array('b c'))), $method->invoke(null,
            Array(0,0,0,0,0,'a [b c]'), Array('flags' => Array('advar' => 1, 'this' => 1, 'namev' => 1))
        ));
        $this->assertEquals(Array(false, Array(Array('a'), 'q' => Array('b c'))), $method->invoke(null,
            Array(0,0,0,0,0,'a q=[b c]'), Array('flags' => Array('advar' => 1, 'this' => 1, 'namev' => 1))
        ));
        $this->assertEquals(Array(false, Array(Array('a'), Array('q=[b c'))), $method->invoke(null,
            Array(0,0,0,0,0,'a [q=[b c]'), Array('flags' => Array('advar' => 1, 'this' => 1, 'namev' => 1))
        ));
        $this->assertEquals(Array(false, Array(Array('a'), 'q' => Array('[b'), Array('c]'))), $method->invoke(null,
            Array(0,0,0,0,0,'a q=[b c]'), Array('flags' => Array('advar' => 0, 'this' => 1, 'namev' => 1))
        ));
    }
    /**
     * @covers LightnCandy::tokenString
     */
    public function testOn_tokenString() {
        $method = new ReflectionMethod('LightnCandy', 'tokenString');
        $method->setAccessible(true);
        $this->assertEquals('b', $method->invoke(null,
            Array('a', 'b', 'c')
        ));
        $this->assertEquals('c', $method->invoke(null,
            Array('a', 'b', 'c', 'd', 'e'), 2
        ));
    }
    /**
     * @covers LightnCandy::validateStartEnd
     */
    public function testOn_validateStartEnd() {
        $method = new ReflectionMethod('LightnCandy', 'validateStartEnd');
        $method->setAccessible(true);
        $this->assertEquals(null, $method->invoke(null,
            array_fill(0, 8, ''), Array(), true
        ));
        $this->assertEquals(true, $method->invoke(null,
            range(0, 7), Array(), true
        ));
    }
    /**
     * @covers LightnCandy::validateOperations
     */
    public function testOn_validateOperations() {
        $method = new ReflectionMethod('LightnCandy', 'validateOperations');
        $method->setAccessible(true);
        $this->assertEquals(null, $method->invoke(null,
            Array(0, 0, 0, 0, ''), Array(), Array()
        ));
        $this->assertEquals(2, $method->invoke(null,
            Array(0, 0, 0, 0, '^', '...'), Array('usedFeature' => Array('isec' => 1), 'level' => 0), Array()
        ));
        $this->assertEquals(3, $method->invoke(null,
            Array(0, 0, 0, 0, '!', '...'), Array('usedFeature' => Array('comment' => 2)), Array()
        ));
        $this->assertEquals(true, $method->invoke(null,
            Array(0, 0, 0, 0, '/'), Array('stack' => Array(1), 'level' => 1), Array()
        ));
        $this->assertEquals(4, $method->invoke(null,
            Array(0, 0, 0, 0, '#', '...'), Array('usedFeature' => Array('sec' => 3), 'level' => 0), Array('x')
        ));
        $this->assertEquals(5, $method->invoke(null,
            Array(0, 0, 0, 0, '#', '...'), Array('usedFeature' => Array('if' => 4), 'level' => 0), Array('if')
        ));
        $this->assertEquals(6, $method->invoke(null,
            Array(0, 0, 0, 0, '#', '...'), Array('usedFeature' => Array('with' => 5), 'level' => 0, 'flags' => Array('with' => 1)), Array('with')
        ));
        $this->assertEquals(7, $method->invoke(null,
            Array(0, 0, 0, 0, '#', '...'), Array('usedFeature' => Array('each' => 6), 'level' => 0), Array('each')
        ));
        $this->assertEquals(8, $method->invoke(null,
            Array(0, 0, 0, 0, '#', '...'), Array('usedFeature' => Array('unless' => 7), 'level' => 0), Array('unless')
        ));
    }
    /**
     * @covers LightnCandy::compileSection
     */
    public function testOn_compileSection() {
        $method = new ReflectionMethod('LightnCandy', 'compileSection');
        $method->setAccessible(true);
        $this->assertEquals(Array(), $method->invoke(null,
            Array(null), Array(), Array()
        ));
        $this->assertEquals(Array('a'), $method->invoke(null,
            Array(null), Array(), Array('a')
        ));
        $this->assertEquals(null, $method->invoke(null,
            Array('a'), Array(), Array()
        ));
        $this->assertEquals('a', $method->invoke(null,
            Array('"a"'), Array(), Array()
        ));
        $this->assertEquals('a', $method->invoke(null,
            Array('@index'), Array('sp_vars' => Array('index' => 'a')), Array()
        ));
        $this->assertEquals('b', $method->invoke(null,
            Array('@key'), Array('sp_vars' => Array('key' => 'b')), Array()
        ));
        $this->assertEquals(0, $method->invoke(null,
            Array('a'), Array(), Array('a' => 0)
        ));
        $this->assertEquals(false, $method->invoke(null,
            Array('a'), Array(), Array('a' => false)
        ));
        $this->assertEquals(null, $method->invoke(null,
            Array('a','b'), Array(), Array('a' => 0)
        ));
        $this->assertEquals(null, $method->invoke(null,
            Array('a','b'), Array(), Array()
        ));
        $this->assertEquals('Q', $method->invoke(null,
            Array('a','b'), Array(), Array('a' => Array('b' => 'Q'))
        ));
        $this->assertEquals('', $method->invoke(null,
            Array(1), Array('scopes' => Array()), Array()
        ));
        $this->assertEquals('Y', $method->invoke(null,
            Array(1), Array('scopes' => Array('Y')), Array()
        ));
        $this->assertEquals(null, $method->invoke(null,
            Array(1, 'a'), Array('scopes' => Array('Y')), Array()
        ));
        $this->assertEquals('q', $method->invoke(null,
            Array(1, 'a'), Array('scopes' => Array(Array('a' => 'q'))), Array()
        ));
        $this->assertEquals('o', $method->invoke(null,
            Array(2, 'a'), Array('scopes' => Array(Array('a' => 'o'), Array('a' => 'p'))), Array()
        ));
        $this->assertEquals('x', $method->invoke(null,
            Array(3), Array('scopes' => Array('x', Array('a' => 'q'), Array('b' => 'r'))), Array()
        ));
        $this->assertEquals('o', $method->invoke(null,
            Array(3, 'c'), Array('scopes' => Array(Array('c' => 'o'), Array('a' => 'q'), Array('b' => 'r'))), Array()
        ));
    }
}
?>