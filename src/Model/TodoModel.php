<?php

namespace Model;

use mysqli;
use TexLab\MyDB\DbEntity;

class TodoModel extends DbEntity
{
    /** в 18 строке DESC Сортирует от меньшего к большему, т.е ставит новую задачу тем самым опуская старую вниз */
    public function getTodoPage(int $page)
    {
        return $this
            ->reset()
            ->setSelect('`todo`.`id`, `todo`.`dateStart`, `todo`.`content`, `todo`.`dateEnd`, `todo`.`project`, `todo`.`priority`, `todo`.`status`, `users`.`login` AS users_id')
            ->setFrom('`users`,`todo`')
            ->setWhere('`users`.`id` = `todo`.`users_id`')
            ->setOrderBy('`todo`.`id` DESC')
            ->getPage($page);
    }

    /** Когда пользователь заходит под своим именем он не видет задачи другого пользователя  */
    public function getTodoPageUserFilter (int $page, int $user_id)
    {
        return $this
            ->reset()
            ->setSelect('`todo`.`id`, `todo`.`dateStart`, `todo`.`content`, `todo`.`dateEnd`, `todo`.`project`, `todo`.`priority`, `todo`.`status`, `users`.`login` AS users_id')
            ->setFrom('`users`,`todo`')
            ->setWhere("`users`.`id` = `todo`.`users_id` AND `todo` . `users_id` = $user_id")
            ->setOrderBy('`todo`.`id` DESC')
            ->getPage($page);
    }
}