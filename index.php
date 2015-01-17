<!DOCTYPE html>
<html>
	<head>
		<title>trgc.co</title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<link href='http://fonts.googleapis.com/css?family=Cinzel|Average+Sans|Signika+Negative|Engagement' rel='stylesheet' type='text/css'>
		<link href='http://weloveiconfonts.com/api/?family=fontawesome' rel='stylesheet' type='text/css'>
	</head>
	<body>
	<div id="page">
                <a class="postlink" href="/"><h1 class="heading"><div class="bigred">trgc</div>.co</h1></a>
		<hr class="topline" />

	<div id="main">
<?php
if(isset($_GET["post"])){
        $num = $_GET["post"];
        $file=fopen("posts/".$num,"r") or exit("Unable to open file!"); // open the file or spew error;
            echo fread($file,filesize("posts/".$i));
            fclose($file); $num--; //close file; decrement the pointer
    }else{
         // Figure out how many blog posts there are on server
           // integer num used for incrementing
          $num = 0;
          $dir = 'posts/';
          if ($handle = opendir($dir)) {
          while (($file = readdir($handle)) !== false){
          if (!in_array($file, array('.', '..')) && !is_dir($dir.$file))
          $num++;
                }
         }

        while($num >= 1) { // loop to read all the blog posts
                   $file=fopen("posts/previews/".$num,"r") or exit("Unable to open file!"); // open the file or spew error;
                    echo "<a href=index.php?post=",$num," class=postlink>";
		    echo fread($file,filesize("posts/previews/".$num))."</a><br />";
                    fclose($file); $num--; //close file; decrement the pointer
            } // end loop
    }


?>
	</div>
		
	<div id="menu">
		<h3 class="bigblue">Connect <span class="fontawesome-link"></span></h3>
		<a class="navlink" href="mailto:jesse@trgc.co"><span class="fontawesome-envelope-alt"></span> Email</a><br />
		<a class="navlink" href="https://github.com/trgc" target="_blank"><span class="fontawesome-github-alt"></span> GitHub</a><br />
		<a class="navlink" href="https://twitter.com/trgcco" target="_blank"><span class="fontawesome-twitter"></span> Twitter</a><br />

		<h3 class="bigblue">Pages <span class="fontawesome-file"></span></h3>
		<a class="navlink" href="/"><span class="fontawesome-home"></span> Home</a><br />
		<a class="navlink" href="/"><span class="fontawesome-tasks"></span> About</a><br />
		<a class="navlink" href="/"><span class="fontawesome-bullhorn"></span> Contact me</a><br />
		<a class="navlink" href="/"><span class="fontawesome-list"></span> Archives</a><br />
	</div>

	<div id="footer">
		<hr class="bottomline" />
		<p class="footerp">Copyright trgc.co 2013 | design by Jesse Schrider</p>
	</div>
	</div>
	</body>
</html>
