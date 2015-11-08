<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Bwolf PHP WebPage</title>
   <link rel="stylesheet" href="css/main.css">
</head>

<body>
    <header>  
        <div>
            PHP Bwolf Page
        </div>
        <nav>
            <a href="" >Home</a>
             <a href="" >SecondPage</a>
            <a href="" >ThirdPage</a>
        </nav>
    </header>
    <article>
        <div>Vai saber</div>
        <?php for($i =1; $i < 20; $i++){ echo "Upload ".$i.": <input type='text' name='".$i."'/><br/>"; } ?>

    </article>
</body>

</html> 