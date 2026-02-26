<?php
// Simple index page
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Simple Index</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <style>
        body { font-family: Arial, sans-serif; margin: 2rem; color: #222; }
        header h1 { margin: 0 0 1rem 0; }
        footer { margin-top: 2rem; color: #666; font-size: 0.9rem; }
    </style>
</head>
<body>
    <header>
        <h1>Welcome</h1>
    </header>

    <h1> Hello This is Deepak</h1>
    <h2> Hello This is Deepak2</h2> 
    <h2> Hello This is Deepak</h2> 
    <h2> Hello This is Deepak4</h2>
        <p>This is a simple index page.</p>
        <p>Server time: <?php echo date('Y-m-d H:i:s'); ?></p>
    

    <footer>
        &copy; <?php echo date('Y'); ?> My Site
    </footer>
</body>
</html>