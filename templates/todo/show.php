<?php

use TexLab\Html\Select;
use View\Html\Html;

/** @var int $pageCount Количество страниц
 * @var array $fields Список полей таблицы
 * @var array $comments Комментарии к полям таблицы
 * @var string $type Имя контроллера
 * @var array $usersList список пользователей
 * @var array $table
 */


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
    

?>

<a class="btn btn-primary" id="addButton">Add task</a>
<form action="?action=add&type=<?= $type ?>" id="addForm" class="hidden" method="post" class="guestbookform">
    <label> <?= $comments['project'] ?>
        <input type="text" name="project" id="project">
    </label>
    <label> <?= $comments['content'] ?>
        <textarea name="content" id="content" cols="30" rows="10"></textarea>
    </label>
    <label> <?= $comments['priority'] ?>
        <?= (new Select())->setName('priority')->setId('priority')->setData(["Главная" => "Главная", "Второстепенная" => "Второстепенная"])->html() ?>
    </label>
    <label> <?= $comments['status'] ?>
        <?= (new Select())->setName('status')->setId('status')->setData(["Выполняющиеся" => "Выполняющиеся", "Завершенная" => "Завершенная"])->html() ?>
    </label>
    <label> <?= $comments['users_id'] ?>
        <?= (new Select())->setName('users_id')->setId('users_id')->setData($usersList)->html() ?>
    </label>
    <label> <?= $comments['dateStart'] ?>
        <input type="datetime-local" name="dateStart" id="dateStart" value= '<?= date("Y-m-d\TH:i:s") ?>'>
    </label>
    <label> <?= $comments['dateEnd'] ?>
        <input type="datetime-local" name="dateEnd" id="dateEnd"  value= '<?= date("Y-m-d\TH:i:s", time()+7*24*60*60) ?>'>
    </label>
    <input type="submit" value="Send">
    <a class="btn btn-primary" id="closeFormButton">Close</a>
</form>
<div id="shadow" class="hidden"></div>