<?php
    session_start();
    if (!$_SESSION['c']) {
        $_SESSION['c'] = 0;
    }
    $_SESSION['c']++;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

	<title>Session test</title>
	
</head>

<body>
    <h1>Session test</h1>

    <p><a href="session-test.php">Reload</a></p>
    
    <pre>
<?php
    print_r($_SESSION);

?>
    </pre>

</body>
</html>
