<?php

namespace Corpus\Autoloader\Traits;

/**
 * mixin of common/necessary methods for the autoloader
 * @package Corpus\Autoloader
 */
trait CommonAutoloaderMethodsTrait {

	/**
	 * @param string $path
	 * @return string
	 */
	protected final function trimSlashes( $path ) {
		return trim($path, ' /\\');
	}

	/**
	 * @param $class
	 * @return bool|string
	 */
	abstract public function __invoke( $class );

}