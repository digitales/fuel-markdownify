<?php
/**
 * Markdownify package.
 *
 * @package    Markdownify
 * @version    1.0
 * @author     Digitales
 * @link       https://github.com/digitales/fuel-markdownify
 */

// namespace Markdownify;

use \Markdownify\Markdownify_Extra;

/**
 * This is a small wrapper around the MarkdownExtra_Parser class.
 *
 * @package     Fuel
 * @subpackage  Core
 */
class Markdownify
{
	/**
	 * @var  MarkdownExtra_Parser  The MD parser instance
	 */
	protected static $parser = null;

	/**
	 * Load Markdown and get it setup.
	 *
	 * @return  void
	 */
	public static function _init()
	{
		//if ( ! class_exists('Markdownify\Markdownify_Extra', false))
		//{
        //    echo "can't find class ";
			// include COREPATH.'vendor'.DS.'markdown'.DS.'markdown.php';
		//}

		static::$parser = new Markdownify_Extra();
	}

	/**
	 * Runs the given text through the Markdownify parser.
	 *
	 * @param   string  Text to parse
	 * @return  string
	 */
	public static function parse( $text )
	{
		return static::$parser->parseString( $text );
	}
}
