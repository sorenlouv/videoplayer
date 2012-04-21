<?php
include("functions/lib.php");
$movies = json_encode(find_all_files("files/movies"));
$series = json_encode(find_all_files("files/series"));
?>
<!DOCTYPE html>
<html>
<head>
  <title>Video player</title>
  <meta charset="utf-8">

  <link href="css/video-js.min.css" rel="stylesheet" type="text/css">
  <link href="css/ui-lightness/jquery-ui-1.8.19.custom.css" rel="stylesheet" type="text/css"> 
  <link href="css/screen.css" rel="stylesheet" type="text/css">   

  <script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
  <script type="text/javascript" src="js/jquery-ui-1.8.19.custom.min.js"></script>  
  <script type="text/javascript" src="js/jquery.zclip.min.js"></script>
  <script type="text/javascript" src="js/video.min.js"></script>
  <script type="text/javascript" src="js/screen.js"></script>
  <script type="text/javascript">
    var movies = <?php echo $movies ?>;
    var series = <?php echo $series ?>;
  </script>

</head>
<body class="bp">

<div id="container">
  <div id="nav">
    <div id="buttons">
      <input type="radio" id="all" class="jqueryui-radio" name="radio" checked="checked" /><label for="all">All</label>    
      <input type="radio" id="movies" class="jqueryui-radio" name="radio" /><label for="movies">Movies</label>
      <input type="radio" id="series" class="jqueryui-radio" name="radio" /><label for="series">Series</label>    
      <label for="search"></label>
      <input id="search" />    
    </div>
    <a id="list-all" href="#">List all</a>  
  </div>

  <div id="content">
  </div>


  <!--
    <video class="video-js vjs-default-skin" controls preload="none" width="640" height="264"
        poster="http://video-js.zencoder.com/oceans-clip.png"
        data-setup="{}">
      <source src="<?php echo $movie["path"] ?>" type='video/mp4' />
      <track kind="captions" src="captions.vtt" srclang="en" label="English" />
    </video>
  -->
  </div>
</body>
</html>
