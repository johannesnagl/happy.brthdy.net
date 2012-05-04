<?
		$name         = ucfirst(strtolower((!empty($_GET["name"])) ? $_GET["name"] : "Unbekannte/r"));
		$ogTitle      = "Happy Birthday, " . $name . "!";
		$webAppPath   = "http://happy.brthdy.net";
		$ogUrl        = $webAppPath . "/" . str_replace("/", "", strtolower($_SERVER['REQUEST_URI']));
    $youtubeToken = (empty($_GET["party_mode"])) ? "wFh-rX_Sfhs" : "ZkZX9HZos9w";
 ?>
<!DOCTYPE html> 
  <meta charset="utf-8"> 
  <title><?=$ogTitle?></title> 
  <link rel="stylesheet" href="<?=$webAppPath?>/css/app.css"> 
  <meta property="og:title" content="<?=$ogTitle?>">
  <meta property="og:site_name" content="brthdy.net">
  <meta property="og:url" content="<?=$ogUrl?>">
  <meta property="og:type" content="article">
  <meta property="og:image" content="<?=$webAppPath?>/img/cake.gif">
  <meta property="og:description" content="<?=$name?> hat heute Geburtstag und wir möchten dir alle herzlich dazu gratulieren. Hoch sollst du leben, <?=$name?>!">
	<meta property="fb:app_id" content="209699839076964">

	<script type="text/javascript">

	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-24519864-1']);
	  _gaq.push(['_setDomainName', '.brthdy.net']);
	  _gaq.push(['_trackPageview']);

	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = 'http://www.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();

	</script>

  <table> 
    <tr> 
      <td> 
      	<div class="app">
					<span class="opener">Bitte alle Lautsprecher voll aufdrehen ... *sing*</span>
					<br><br><br>
	        <span><font color="red">H</font><font color="green">a</font><font color="blue">p</font><font color="red">p</font><font color="green">y</font> 
	        	Birthday, <?=$name?>!</span>
	        <br><br><br>
	        <span class="plugins cf">
						<div><a href="http://twitter.com/share" data-via="jollife" data-lang="de" data-count="horizontal" data-url="<?=$ogUrl?>" class="twitter-share-button">Tweet</a></div>
	        	<div><fb:like href="<?=$ogUrl?>" send="false" layout="button_count" show_faces="false" font="verdana"></fb:like></div>
	        	<div><g:plusone size="medium" href="<?=$ogUrl?>"></g:plusone></div>
	        </span>

					<div class="comments">
						<fb:comments width="496" href="<?=$ogUrl?>" num_posts="5"></fb:comments>
					</div>
				</div>
      </td> 
    </tr> 
  </table> 

	<iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/<?=$youtubeToken?>?rel=0&autoplay=1" style="position: absolute; left: -5000px; top: -5000px;"></iframe> 

	<script src="<?=$webAppPath?>/js/ga_social_tracking.js"></script> 
	<div id="fb-root"></div>
	<script>
	  window.fbAsyncInit = function() {
	    FB.init({appId: '209699839076964', status: true, cookie: true, xfbml: true});
	    _ga.trackFacebook();
	  };
	  (function() {
	    var e = document.createElement('script'); e.async = true;
	    e.src = 'http://connect.facebook.net/de_DE/all.js';
	    document.getElementById('fb-root').appendChild(e);
	  }());
	</script>
  <script> 
    (function(){
      var twitterWidgets = document.createElement('script');
      twitterWidgets.type = 'text/javascript';
      twitterWidgets.async = true;
      twitterWidgets.src = 'http://platform.twitter.com/widgets.js';
 
      // Setup a callback to track once the script loads.
      twitterWidgets.onload = _ga.trackTwitter;
 
      document.getElementsByTagName('head')[0].appendChild(twitterWidgets);
    })();
  </script> 
	<script type="text/javascript" src="https://apis.google.com/js/plusone.js">{lang: 'de'}</script>
</html> 