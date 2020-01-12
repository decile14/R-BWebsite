<?php
$currentPage = "R&B | Home";
?>

<?php include "inc/index-html-top.inc"; ?>


		<section id="lower_left">
			<div class="box sidebar">
				<h1>Definitions and Descriptions</h1>
				<p style="background-color: #FFFFFF">R&B stands for Rhythm and Blues. Evolving out of jump blues in the late '40s, R&B laid the groundwork for rock & roll. R&B kept the tempo and the drive of jump blues, but its instrumentation was sparer and the emphasis was on the song, not improvisation. It is a genre of popular music that originated in African American communities in the 1940s.R&B lyrical themes often encapsulate the African-American experience of pain and the quest for freedom and joy, as well as triumphs and failures in terms of relationships, economics, and aspirations. Now it is usually about romance and heartbreak. The pictures on the slide show current and old faces of R&B and the city Motown aka Detroit, Michigan, one of the cities where R&B popped off. Sign up for the newsletter to get updates on everything in the R&B world! </p>
			</div>

		</section>

		<section id="lower_right">
			<a href='signup.php'><button class="button" style="vertical-align:middle"><span>Sign Up!</span></button></a>
		</section>

		<footer>
			
		</footer>

	</div>

	<!-- I got the fullclip.js from my previous team Chattanooga but found the original source: https://github.com/bdimitrovski/full_clip -->
	
<?php include "inc/scripts.inc"; ?>
	<script src="js/fullclip.js"></script> 
		<script>
		$('.fullBackground').fullClip({
		  images: ['images/ellaMai.jpeg', 'images/jSmith.jpg', 'images/isleybrothers.jpg', 'images/aliciakeys.jpg', 'images/motown.jpg'],
		  transitionTime: 1000,
		  wait: 3000
		});
		</script>

<footer style=" bottom: 0%; position: absolute;">
  <div>Copyright © 2019 by Dominique Dorvil</div>
</footer>

<?php include "inc/scripts.inc"; ?>

</body>
</html>

