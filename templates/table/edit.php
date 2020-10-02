<?php

use View\Html\Html;

/** @var int $id
 * @var string $type
 * @var array $fields
 * @var array $comments
 */
?>

<div class="main_form">
    <div class="picture_signIn ">

        <div class="form_signIn_container">

            <?php
            $form = Html::create('Form')
                ->setMethod('POST')
                ->setAction("?action=edit&type=$type")
                ->setClass('form');

            foreach ($fields as $name => $value) {
                $form->addContent(Html::create('Label')->setFor($name)->setInnerText($comments[$name])->html());
                $form->addContent(Html::create('input')->setName($name)->setId($name)->setValue($value)->html());
            }

            echo $form->addContent(Html::create('Input')->setType('hidden')->setName('id')->setValue($id)->html())
                ->addContent(Html::create('Input')->setType('submit')->setValue('OK')->html())
                ->html();
            ?>
        </div>
    </div>
</div>