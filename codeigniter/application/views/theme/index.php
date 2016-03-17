<!DOCTYPE html>
<html>
    <head>
        <title>NIH T-32 Home</title>
        <!--External CSS Stylesheets-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        
        <!--External Javascript-->
        <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        
        <!--Local NIH-T32 CSS-->
        <link rel="stylesheet" type="text/css" href="<?= base_url() ?>css/niht32.css">
        
        <!--Local NIH-T32 JS-->
        <script src="<?= base_url() ?>js/niht32.js"></script>
    </head>
    <body>
        <?= $notice ?>
        <?= $view_content ?>
    </body>
</html>