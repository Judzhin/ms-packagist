<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace Packagist;

/**
 * Interface Application
 * @package Packagist
 */
interface ApplicationInterface
{
    /**
     * @param array $options
     * @return Application
     */
    public static function init(array $options = []);

    /**
     * @param array $options
     * @return $this
     */
    public function bootstrap(array $options);

    /**
     * @return mixed
     */
    public function run();
}
