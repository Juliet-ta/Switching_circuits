<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Switching circuits</title>
    <link href="../css/levels.css" rel="stylesheet" type="text/css">
    <link href="../enjoyhint-master/enjoyhint.css" rel="stylesheet" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/intro.js/4.2.2/introjs.min.css">
</head>
<body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intro.js/4.2.2/intro.min.js"></script>
    <div id="level">
        <p>Level 1</p>
        <img src="/img/level1.png"/>
        <form action="levels.php" method="post">
            <div id="c1">
                <input class="c1" type="text" placeholder="" id="code1" name="code1" data-intro='Hello step one!'>
            </div>
            <div id="c2">
                <input type="text" placeholder="" id="code2" name="code2">
            </div>
            <div id="c3">    
                <input type="text" placeholder="" id="code3" name="code3">
            </div>
            <div id="c4">    
                <input type="text" placeholder="" id="code4" name="code4">
            </div>
            <button class="btn btn-success" type="submit">GO</button>
        </form>
    </div>
    <script src="../enjoyhint-master/enjoyhint.js"></script>
    <script src="../hints.js"></script>
    
    <script>introJs().start()</script>
</body>
</html>