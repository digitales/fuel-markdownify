<?php
/**
 * Markdownify package
 *
 * @package    Markdownify
 * @version    1.0
 * @author     Ross Tweedie
 * @license    MIT License
 * @link       http://github.com/digitales/fuel-markdownify
 */

Autoloader::add_core_namespace('Markdownify');

Autoloader::add_classes(array(
	/**
	 * Markdownify classes.
	 */
    'Markdownify'                       => __DIR__.'/classes/markdownify.php',
	'Markdownify\\Markdownify'          => __DIR__.'/vendor/markdownify.php',
    'Markdownify\\Markdownify_Extra'    => __DIR__.'/vendor/markdownify_extra.php',

    /*'Markdownify\\parseHTML'                         => __DIR__.'/vendor/parsehtml/parsehtml.php',*/
));
