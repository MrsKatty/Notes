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
?>


<div class="news">
    <div class="container" id="news_container">
        <div class="container_header">
            <div class="header_button">
                <h2 class="header3"> Actual Applications</h2>
                <div class="button_add_news_container">
                    <a class="btn btn-primary" id="addButton">Add task</a>
                </div>
            </div>
        </div>
        <?php
        echo Html::create('TodoTags')
            ->setControllerType($type)
            ->data($table)
            ->html();
        ?>
        <div class="pagination_container">
            <?php
//            if ($pageCount > 1) {
//                $pagination = TexLab\Html\Html::pagination();
//                echo $pagination
//                    ->setClass("pagination")
//                    ->setUrlPrefix("?type=$type&action=show")
//                    ->setPrevious('Previous')
//                    ->setNext('Next')
//                    ->setPageCount($pageCount)
//                    ->setCurrentPage($currentPage)
//                    ->html();
//            }

            echo Html::create("Pagination")
                ->setClass('pagination')
                ->setControllerType($type)
                ->setPageCount($pageCount)
                ->html();



            ?>
        </div>
    </div>
</div>



<form action="?action=add&type=<?= $type ?>" id="addForm" class="hidden" method="post" class="guestbookform">
    <label> <?= $comments['project'] ?>
        <input type="text" name="project" id="project">
    </label>
    <label> <?= $comments['content'] ?>
        <textarea name="content" id="content" cols="30" rows="10"></textarea>
    </label>
    <label> <?= $comments['priority'] ?>
        <?= (new Select())->setName('priority')->setId('priority')->setData(["0" => "Главная", "1" => "Второстепенная"])->html() ?>
    </label>
    <label> <?= $comments['status'] ?>
        <?= (new Select())->setName('status')->setId('status')->setData(["0" => "Выполняющиеся", "1" => "Завершенная"])->html() ?>
    </label>
    <label> <?= $comments['users_id'] ?>
        <input type="hidden" name="users_id" value="<?= $user_id ?>">
    </label>
    <label> <?= $comments['dateStart'] ?>
        <input type="datetime-local" name="dateStart" id="dateStart">
    </label>
    <label> <?= $comments['dateEnd'] ?>
        <input type="datetime-local" name="dateEnd" id="dateEnd">
    </label>
    <input type="submit" value="Отправить">
    <a class="btn btn-primary" id="closeFormButton">Закрыть</a>
</form>
<div id="shadow" class="hidden"></div> 