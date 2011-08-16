<?php

/**
 * This file is part of the Propel package.
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @license    MIT License
 */

require_once 'PHPUnit/Framework.php';
require_once dirname(__FILE__) . '/../../../../../generator/lib/builder/util/StandardEnglishPluralizer.php';

/**
 * Tests for the StandardEnglishPluralizer class
 *
 * @version    $Revision$
 * @package    generator.builder.util
 */
class StandardEnglishPluralizerTest extends PHPUnit_Framework_TestCase
{
	public function getPluralFormDataProvider()
	{
		return array(
			array('', 's'),
			array('user', 'users'),
			array('users', 'userss'),
			array('User', 'Users'),
			array('sheep', 'sheep'),
			array('Sheep', 'Sheep'),
			array('wife', 'wives'),
			array('Wife', 'Wives'),
			array('country', 'countries'),
			array('Country', 'Countries'),
			array('Video', 'Videos'),
			array('video', 'videos'),
			array('Photo', 'Photos'),
			array('photo', 'photos'),
			array('Tomato', 'Tomatoes'),
			array('tomato', 'tomatoes'),
			array('Buffalo', 'Buffaloes'),
			array('buffalo', 'buffaloes'),
			array('typo', 'typos'),
			array('Typo', 'Typos'),
			array('apple', 'apples'),
			array('Man', 'Men'),
			array('man', 'men'),
			array('numen', 'numina'),
			array('Numen', 'Numina'),
		);
	}

	/**
	 * @dataProvider getPluralFormDataProvider
	 */
	public function testgetPluralForm($input, $output)
	{
		$pluralizer = new StandardEnglishPluralizer();
		$this->assertEquals($output, $pluralizer->getPluralForm($input));
	}
}
