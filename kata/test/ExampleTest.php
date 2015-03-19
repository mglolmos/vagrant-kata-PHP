<?php
/**
 * File: ExampleTest.php
 *
 * User: mglolmos
 * Email: mgl.olmos@gmail.com
 * Date: 3/15
 */

require_once(dirname(__FILE__) . '/../src/Example.php');

/**
 * This is a example test class.
 */
class ExampleTest extends PHPUnit_Framework_TestCase
{
	/**
	 * This is a example test method.
	 */
	public function testOfExample()
	{
		$example_class = new Example();

		$this->assertTrue($example_class->methodAlwaysReturnTrue());
	}
}