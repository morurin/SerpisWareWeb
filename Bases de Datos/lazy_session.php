<?php

function lazy_session_start() {
    if(!isset($_SESSION)) {
        session_start();
    }
}
?>