
<!-- Wrapper -->
<div id="wrapper">

<!-- Titlebar
================================================== -->
<div id="titlebar" class="centered margin-bottom-70">
	<div class="container">
		<div class="row">
			<div class="col-md-12">

				<h2>Recipes</h2>

			</div>
		</div>
	</div>
</div>

</div>
<div class="clearfix"></div>

<!-- Content
================================================== -->
<div class="container" style="margin-bottom:5%;">
<div class="row">
	<div class="col-md-9 extra-gutter-right-35px">

		<!-- Projects -->
		<div class="gutter-30px isotope-two-cols isotope-wrapper blog-wrapper-with-sidebar">

			<div class="isotope-sizer"></div>
			
                        <?php foreach($recipes as $r): ?>
			<!-- Item -->
			<div class="isotope-item" id="<?= $r['Recipe']['id']; ?>" style="margin-top:5%;">
				<!-- Post -->
				<div class="post-container">
					<div class="post-img"><a href="/content/newspost/<?= $r['Recipe']['id']; ?>" class="img-hover"><img src="images/blog-01.jpg" alt=""></a></div>

					<div class="post-content">
						<!-- Categories -->
						<ul class="post-categories">
							<li><a href="/content/newspost/<?= $r['Recipe']['id']; ?>"><?= $r['Recipe']['name']; ?></a></li>
						</ul>

						<!-- Meta -->
						<div class="meta-tags">
                                                    <h5>Posted on: <span><?= date('M d y', strtotime($r['Recipe']['created'])); ?></span></h5>
						</div>

						
                                                <p><?= $r['Recipe']['description']; ?></p>
					</div>

				</div>
			</div>
                        <?php endforeach; ?> 
		</div>
		<!-- Isotope Wrapper / End -->


	</div>

	<!-- Widgets -->
	<div class="col-md-3">

		<!-- Categories -->
		<div class="widget margin-bottom-60">
			<h4>Recipes</h4>

			<ul class="list-links">
                            <?php foreach($recipes as $recipe): ?>
				<!-- Post #1 -->
				<li>
                                    <h5><a href="/content/newspost/<?= $r['Recipe']['id']; ?>"><?= $recipe['Recipe']['name']; ?></a></h5>
				</li>
                            <?php endforeach; ?>
			</ul>
		</div>
		<!-- Social Icons -->
		<div class="widget">
			<h4>Follow Us</h4>
			<ul class="social-icons rounded color">
				<li><a class="facebook" href="http://www.facebook.com/pages/Millers-Food-Market-Inc/147225711972648"><i class="icon-facebook"></i></a></li>
			</ul>
			<div class="clearfix"></div>
		</div>
		
		<div class="margin-bottom-40"></div>
	</div>

</div>
</div>


