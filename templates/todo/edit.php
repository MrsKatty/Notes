<?php

use View\Html\Html;
use TexLab\Html\Select;

/** @var int $id
 * @var string $type
 * @var array $fields
 * @var array $comments
 */

$form = Html::create('Form')
    ->setMethod('POST')
    ->setAction("?action=edit&type=$type")
    ->setClass('form');

foreach ($fields as $name => $value) {
    $form->addContent(Html::create('Label')->setFor($name)->setInnerText($comments[$name])->html());
    if ($name == 'status') {
        $form->addContent((new Select())
            ->setName($name)
            ->setId($name)
            ->setData([
                //     'do' => 'здесь',
                //     'todo' => 'придумай'
                // 'notodo' => 'сама'
            ])
            ->html());
    } else {
        $form->addContent(Html::create('input')->setName($name)->setId($name)->setValue($value)->html());
    }
}
echo $form->addContent(Html::create('Input')->setType('hidden')->setName('id')->setValue($id)->html())
    ->addContent(Html::create('Input')->setType('submit')->setValue('OK')->html())
    ->html();




//<div class="edit_newsform_container">
/*    <form action="?action=edit&type=<?= $type ?>" method="post" class="edit_newsform edit_appform" enctype="multipart/form-data" >*/
////
/*        <input type="hidden" name="id" value="<?= $id ?>">*/
//
//        <label for="edit_form_caption" class="header_form_edit"> <?= $comments['todo'] ?><!--</label>-->
<!---->
<!---->
<!--<input id="edit_form_caption" type="tel" name="caption" value="--><?//= $fields['todo'] ?><!--">-->
<input id="edit_form_caption" type="tel" name="caption" value="--><?//= $fields['status'] ?><!--">-->
<!---->
<!--<label for="edit_app_content" class="header_form_edit"> --><?//= $comments['content'] ?><!--</label>-->
<!--<textarea id="edit_app_content" name="content" cols="50" rows="5">--><?//=$fields['content'] ?><!--</textarea>-->
<!---->
<!--<label > --><?//= $comments['users_id'] ?><!--</label>-->
<?//= (new Select())->setName('users_id')->setId('edit_users_id')->setData($usersList)->setSelectedValues([(string) $fields['users_id']])->html() ?>
<!---->
<!--<input class="edit_form_btn" type="submit" value="edit">-->
<!---->
<!--</form>-->
</div>