<?php
namespace kouosl\ZoobleKeep\controllers\api;


/**
 * Default controller for the `ZoobleKeep` module
 */
class DefaultController extends \kouosl\base\controllers\api\BaseController
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
