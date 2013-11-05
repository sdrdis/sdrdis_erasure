
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 3.0 License

Name       : Erasure
Description: A two-column, fixed-width design with a dark color scheme.
Version    : 1.0
Released   : 20120205
-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <link href="http://fonts.googleapis.com/css?family=Oswald" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="static/apps/sdrdis_erasure/css/style.css" />
</head>
<body>
<div id="wrapper">
    <div id="header">
        <div id="logo">
            <h1><a href="#">Erasure</a></h1>
            <h2>Template design by Free CSS Templates</h2>
        </div>
        <div id="menu">
            <ul>
                <li class="first current_page_item"><a href="#">Homepage</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Photos</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Links</a></li>
                <li class="last"><a href="#">Contact</a></li>
            </ul>
            <br class="clearfix" />
        </div>
    </div>
    <div id="page">
        <div id="content">
            <?= $wysiwyg['content'] ?>
            <br class="clearfix" />
        </div>
        <div id="sidebar">
            <h3>Porta mollis</h3>
            <p>
                Primis nec nunc placerat enim duis. Duis auctor eget adipiscing vitae gravida dolor sed consequat.
            </p>
            <ul class="list">
                <li class="first"><a href="#">Nibh dolor ornare</a></li>
                <li><a href="#">Lacus sed posuere dictum</a></li>
                <li><a href="#">Sollicitudin tortor quisque primis lorem ipsum</a></li>
                <li class="last"><a href="#">Diam leo tempor dolore</a></li>
            </ul>
            <h3>Pellentesque cubilia urna consequat</h3>
            <ul class="list">
                <li class="first"><a href="#">Convallis a suspendisse</a></li>
                <li><a href="#">Augue augue ante</a></li>
                <li><a href="#">Nascetur parturient phasellus</a></li>
                <li><a href="#">Sodales felis ultrices</a></li>
                <li><a href="#">Nullam leo viverra</a></li>
                <li class="last"><a href="#">Feugiat purus diam</a></li>
            </ul>
        </div>
        <br class="clearfix" />
    </div>
</div>
<?= render('sdrdis_erasure::subviews/footer') ?>
</body>
</html>