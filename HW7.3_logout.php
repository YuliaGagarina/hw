<?php

session_destroy ();

unset ($_SESSION ['user']);

header ('Location: HW7.3_login.html');
