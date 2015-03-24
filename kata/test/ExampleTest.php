<?php
/**
 * File: ExampleTest.php
 *
 * User: mglolmos
 * Email: mgl.olmos@gmail.com
 */

/**
 * This is a example test class.
 */
class ExampleTest extends \PHPUnit_Framework_TestCase
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