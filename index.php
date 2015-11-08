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
        <?php>
        for ($i = 0 ; $i < 10;$i++)
        {
            echo "Var:$i";
        }    
        </php>
    </article>
</body>

</html> 