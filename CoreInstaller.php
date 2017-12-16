<?php namespace rubarbdigital\coreInstaller;
/**
 * Initial installer module
 */
use yii\base\Component;

class CoreInstaller extends Component {

    public $login;
    public $password;

    public function __construct($config = []) {
        parent::__construct($config);
    }

    public function init() {
        parent::init();
    }

}