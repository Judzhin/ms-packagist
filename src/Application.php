<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace Packagist;

/**
 * Class Application
 * @package Packagist
 */
class Application implements ApplicationInterface
{
    /** @var array */
    private $options;

    /**
     * @param array $options
     * @return Application
     */
    public static function init(array $options = [])
    {
        /** @var Application $application */
        $application = new self();
        return $application->bootstrap($options);
    }

    /**
     * @param array $options
     * @return $this
     */
    public function bootstrap(array $options)
    {
        $this->options = $options;
        return $this;
    }

    /**
     * @return string
     */
    public function run()
    {
        return 'foo';
    }
}
