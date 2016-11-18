<?php

namespace  ORM\Actions;

abstract class ActionManager{

    // Crud
    public abstract function create($userName, $mail);
    public abstract function update();
    public abstract function delete($id);

    public abstract function getId($id);

}

