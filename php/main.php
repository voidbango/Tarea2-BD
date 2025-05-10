<?php
    $CBD = new mysqli("localhost", "root", "", "congresos_ltda");
    $cbd->setcharset("utf8");

    if ($cbd->connect_error) {
        die("Connection failed: " . $cbd->connect_error);
    }

    




