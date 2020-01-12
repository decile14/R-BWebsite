
<?php
$currentPage = "R&B | Sign-Up";
?>
	
	<?php include "inc/sign-html-top.inc"; ?>
<!-- 	
4. Let website visitors sign-up for newsletter(s) (your choice: multiple newsletters?)
 -->


<!--   <form class="login">
  
  <input type="text" placeholder="Email address" name="mail" required class="entr-email">
	  <button>Sign In</button>
</form> -->

<!-- </div> -->
					<!-- <div class ="login" > -->
<div id="form-wrapper">
                    <form class ="login" method="post" action = "#" id="sub-form">
                            <div style="color: #b01030" class="line">Sign up for monthly updates on everything in the R&B world!</div>
                          
                                <!-- <label for = "email">Email:</label> -->
								<input type="text" placeholder="Email address" name="email" id="email">
	  							<!-- <button>Sign In</button>

                                <input type="text" name="email" id="email"> -->
                                <input style="background-color: #b01030;" type="submit" name="submit" value="subscribe">
                               
                                
         		</div>            
              </form>
              <!-- </div> -->



<footer style=" bottom: 0%; position: absolute;">
  <div>Copyright © 2019 by Dominique Dorvil</div>
</footer>

<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
<script>
$("#sub-form").submit(function(e)
	{
                      var formData = $("#sub-form").serialize();
	$.ajax({
		type: 'POST',
		url: "new.php",
		data: formData,
		success: function(data){
			$("#form-wrapper").html("Thank you for subscribing!");
		}
	});

		e.preventDefault();		
	});


</script>
<?php include "inc/scripts.inc"; ?>

  </body>
</html>
