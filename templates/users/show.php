<?php

use View\Html\Html;

/** @var int $pageCount Количество страниц
 * @var array $fields Список полей таблицы
 * @var array $comments Комментарии к полям таблицы
 * @var string $type Имя контроллера
 */
// print_r($groupNames);

?>


<div class="main_form">
    <div class="picture_user picture_signIn ">

        <div class="table_users_container ">




<?php
echo Html::create('TableEdited')
    ->setControllerType($type)
    ->setHeaders($comments)
    ->data($table)
    ->setClass('table')
    ->html();

echo Html::create("Pagination")
    ->setClass('pagination')
    ->setControllerType($type)
    ->setPageCount($pageCount)
    ->html();

$form = Html::create('Form')
    ->setMethod('POST')
    ->setAction("?action=add&type=$type")
    ->setClass('form form_add_user');

foreach ($fields as $field) {
    $form->addContent(Html::create('Label')->setFor($field)->setInnerText($comments[$field])->html());

    if ($field != 'group_id') {
        $form->addContent(Html::create('input')->setName($field)->setId($field)->html());
    } else {
        $form->addContent('<br>');
        $form->addContent((new \TexLab\Html\Select())->setName($field)->setId($field)->setData($groupNames)->html());
        $form->addContent('<br>');
    }
}

$form->addContent(
    Html::create('Input')
        ->setType('submit')
        ->setValue('OK')
        ->html()
);

echo $form->html();
?>
        </div></div></div>
