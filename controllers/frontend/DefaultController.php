<?php
namespace kouosl\grupgruplama\controllers\frontend;



/**
 * Default controller for the `grupgruplama` module
 */
class DefaultController extends \kouosl\base\controllers\frontend\BaseController
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('_index');
    }
}
