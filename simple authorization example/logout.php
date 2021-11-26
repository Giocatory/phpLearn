<?php
session_start();
// delete session
session_destroy();
// relocate to secret page
// if the session is dropped, it will be redirected to index.php
header("Location: secretplace.php");