<?php
include_once('include/redirect.php');
session_start();
session_destroy();
pager('index.php');