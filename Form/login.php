<?php

function LoginView(): void
{
    echo $_POST['email'];
    echo "</br>";
    echo $_POST['password'];
}

LoginView();
