
<!-- Wrapper -->
<div id="wrapper">

<!-- Titlebar
================================================== -->
<div id="titlebar" class="centered margin-bottom-70">
	<div class="container">
		<div class="row">
			<div class="col-md-12">

				<h2>News</h2>

			</div>
		</div>
	</div>
</div>

</div>
<div class="clearfix"></div>

<!-- Content
================================================== -->
<div class="container">
    <div class="row">
	<!-- Widgets -->
	<div class="col-md-4">
		<!-- Categories -->
		<div class="widget">
			<h4>Recent Posts</h4>
		</div>
					<!-- Recent Posts -->
					<ul class="widget-tabs">       
                                                <?php foreach($news as $new): ?>
						<!-- Post #1 -->
						<li>
									<h5><a href="/content/news/<?= $new['Blog']['id']; ?>"><?= $new['Blog']['name']; ?></a></h5>
                                                                        <h5>Posted on: <span><?= date('M d y', strtotime($new['Blog']['created'])); ?></span></h5>
						</li>
                                                <?php endforeach; ?>
					</ul>
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
        <div class="col-md-8">

	<!-- Projects -->
	<div class="gutter-30px isotope-one-cols isotope-wrapper">
		<div class="isotope-sizer"></div>
                <?php foreach($news as $n): ?>
		<!-- Item -->
		<div class="isotope-item" id="<?= $n['Blog']['id']; ?>">
			<!-- Post -->
			<div class="post-container">
				<div class="post-img"><a href="blog-full-width-single-post.html" class="img-hover"><img src="images/blog-01-big.jpg" alt=""></a></div>

				<div class="post-content">
					<!-- Meta -->
					<div class="meta-tags">
						<span><?= date('d M y', strtotime($n['Blog']['created'])); ?></span>
					</div>

					<a href="#"><h3><?= $n['Blog']['name']; ?></h3></a>
                                        <p><?= $n['Blog']['blog']; ?></p>
				</div>

			</div>
		</div>	
                <?php endforeach; ?> 
	</div>
	<!-- Isotope Wrapper / End -->
        </div>
    </div>
</div>
