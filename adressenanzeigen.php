         <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>
www.rekordmeister.at
</title>
<link rel="stylesheet" href="bootstrap.css">
<link rel="stylesheet" href="design.css">

</head>
<body background="logo.jpg">
<div class="container" width="100%" height="230" style="margin-left:475px">
<img src="Rekordmeister_logo.jpg" alt="" border="0" width="1000" height="230">
</div>

<!-- Fixed navbar -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header" style="margin-left: 8%;">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" class="active" href="index.html">Home</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
          <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Rekordmeister <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="anderlecht.html"><img src="belgien.png" width="18" height="15"> Belgien</a></li>
                <li><a href="bayern.html"><img src="Deutschlandflagge.png" width="18" height="15"> Deutschland</a></li>
                <li><a href="manu.html"><img src="england.png" width="18" height="15"> England</a></li>
                <li><a href="rapid.html"><img src="oesterreich.png" width="18" height="15"> �sterreich</a></li>
                <li><a href="rovers.html"><img src="irland.png" width="18" height="15"> Irland</a></li>
                <li><a href="spartak.html"><img src="russland.jpg" width="18" height="15"> Russland</a></li>
                <li><a href="rangers.html"><img src="schottland.png" width="18" height="15"> Schottland</a></li>
                <li><a href="sparta.html"><img src="tschechien.png" width="18" height="15"> Tschechien</a></li>
                <li><a href="madrid.html"><img src="spanien.png" width="18" height="15"> Spanien</a></li>
                <li><a href="juve.html"><img src="italien.jpg" width="18" height="15"> Italien</a></li>
                <li><a href="benfica.html"><img src="portugal.png" width="18" height="15"> Portugal</a></li>
                <li><a href="z�rich.html"><img src="schweiz.png" width="18" height="15"> Schweiz</a></li>
                <li><a href="ajax.html"><img src="holland.png" width="18" height="15"> Niederlande</a></li>
                <li class="divider"></li>
              </ul>
            </li>
            <li><a href="news.html">News</a></li>
            <li><a href="impressum.html">Impressum</a></li>
            <li><a href="kontakt.html">Kontakt</a></li>

          </ul>

        </div><!--/.nav-collapse -->
      </div>
    </div>

    <div width="100%" height="100%" style="margin-left:475px; margin-top:52px; background-color:white; margin-right: 445px; border:1px solid black; padding:20px">
    <h1>Kontakttabelle:</h1>
    <?php
         $zeilen=file("daten.txt");
         if($zeilen)
         {
                 echo "<table border=1px>";
                 echo "<tr><th>Name:</th><th>Email-Adresse:</th><th>Ihre Nachricht an uns:</th><th>Newsletter:</th></tr>";

                 foreach($zeilen as $z)
                 {
                         $sp=preg_split("/;/",$z);
                         echo "<tr>";
                         for($i=0;$i<count($sp);$i++)
                         {
                                 echo "<td>".$sp[$i]."</td>";

                         }
                         echo "</tr>";
                 }

                 echo "</table>";

         }
         else
                 echo "Die Datei existiert nicht!";



    ?>



    </div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<!-- Binde alle kompilierten Plugins zusammen ein (wie hier unten) oder such dir einzelne Dateien nach Bedarf aus -->
<script src="bootstrap.min.js"></script>
</body>
</html>