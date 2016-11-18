<?php

interface Log {

    public function logMessage($stmt,$time);
    public function logError($stmt,$time,$errorMessage);

}
