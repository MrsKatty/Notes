<?php

namespace Controller;

class DefaultController extends AbstractController
{
    public function actionDefault(): void
    {

        if (!empty($_SESSION["user"])) {
            $this
                ->view
                ->setFolder('default')
                ->setTemplate('default');
        } else {
            $this
                ->view
                ->setLayout('planeLayout')
                ->setFolder('default')
                ->setTemplate('notlogineddefault');
        }
       
    }
}
