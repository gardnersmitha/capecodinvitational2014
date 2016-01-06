		<div class="row footer">
			<p class="text-center copyright"> © <?php echo (date('Y')); ?> Cape Cod Invitational</p>
		</div>



		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
		<!-- Facebook Javascript SDK -->
		    <script>
		      window.fbAsyncInit = function() {
		        FB.init({
		          appId      : '{your-app-id}',
		          xfbml      : true,
		          version    : 'v2.0'
		        });
		      };

		      (function(d, s, id){
		         var js, fjs = d.getElementsByTagName(s)[0];
		         if (d.getElementById(id)) {return;}
		         js = d.createElement(s); js.id = id;
		         js.src = "//connect.facebook.net/en_US/sdk.js";
		         fjs.parentNode.insertBefore(js, fjs);
		       }(document, 'script', 'facebook-jssdk'));
		    </script>

		    <!-- Google Analytics -->
		    <script>
			  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

			  ga('create', 'UA-50879116-1', 'capecodinvitational.com');
			  ga('send', 'pageview');

			</script>
			<!-- End Google Analytics -->


			<!-- Mailchimp -->
			<script type="text/javascript">
				var $mcGoal = {'settings':{'uuid':'cb1b115840f326e317df63f73','dc':'us6'}};
				(function() {
					 var sp = document.createElement('script'); sp.type = 'text/javascript'; sp.async = true; sp.defer = true;
					sp.src = ('https:' == document.location.protocol ? 'https://s3.amazonaws.com/downloads.mailchimp.com' : 'http://downloads.mailchimp.com') + '/js/goal.min.js';
					var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(sp, s);
				})(); 
			</script>
			<!-- End Mailchimp -->

	</body>
</html>