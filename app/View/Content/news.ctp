<div id="header-container" data-background="images/blog-parallax.jpg" data-color="#303133" data-color-opacity="0.7">
<!-- Titlebar
================================================== -->
<div id="titlebar" class="centered margin-bottom-70">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2>Millers Food News</h2>
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

		<div class="style-5">

			<!-- Tabs Content -->
			<div class="tabs-container blog">

				<div class="tab-content" id="tab1">
					
					<!-- Recent Posts -->
					<ul class="widget-tabs">       
                                                <?php foreach($news as $new): ?>
						<!-- Post #1 -->
						<li>
							<div class="widget-content">
								
								<div class="widget-text">
									<h5><a href="/content/news/<?= $new['Blog']['id']; ?>"><?= $new['Blog']['name']; ?></a></h5>
									<span><?= date('d M y', strtotime($new['Blog']['created'])); ?></span>
								</div>
								<div class="clearfix"></div>
							</div>
						</li>
                                                <?php endforeach; ?>
					</ul>
				</div>

			</div>
				
		</div>
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
