<h1 class="text-center">Hello, world!</h1>
<div class="col-xs-12">
	<h1>Hello Hello Nice To Meet</h1>
</div>
   			<div>
   			<?php foreach ($post as $value): ?>
							  <div class="row">
							  
								  <div class="col-xs-12 col-sm-6 col-md-8">
								  	<h3>Bootstrap là gì?</h3>
								  	<h4><?php echo $value['title'] ?></h4>
								  	<img class="img-thumbnail " src="<?php echo $value['url_thumbnail'] ?>">
								  	<p><?php echo $value['content'] ?></p>
								  	<p><?php echo $value['time'] ?></p>
								  	<p><?php echo $value['tag'] ?></p>

								  </div>
								  <div class="col-xs-6 col-md-4">
								  	<h3>Bootstrap là gì?</h3>
							  		<h4><?php echo $value['title'] ?></h4>
							  		<img class="img-thumbnail " src="<?php echo $value['url_thumbnail'] ?>">
								  	<p><?php echo $value['content'] ?></p>
								  	<p><?php echo $value['time'] ?></p>
								  	<p><?php echo $value['tag'] ?></p>
								  	
							  </div>
							 
							</div>
							 <?php endforeach ?>
							  <?php foreach ($post as $value): ?>
							<div class="row">
							  <div class="col-xs-6 col-sm-4"><h3>Bootstrap là gì?</h3>
							  <h4><?php echo $value['title'] ?></h4>
							  <img class="img-thumbnail img-circle " src="<?php echo $value['url_thumbnail'] ?>">
								  	<p><?php echo $value['content'] ?></p>
								  	<p><?php echo $value['time'] ?></p>
								  	<p><?php echo $value['tag'] ?></p>
								  	
							  	</div>
							  <div class="col-xs-6 col-sm-4"><h3>Bootstrap là gì?</h3>
							  <h4><?php echo $value['title'] ?></h4>
							  <img class="img-thumbnail img-circle" src="<?php echo $value['url_thumbnail'] ?>">
								  	<p><?php echo $value['content'] ?></p>
								  	<p><?php echo $value['time'] ?></p>
								  	<p><?php echo $value['tag'] ?></p>
								  	
							  	</div>
							  <!-- Optional: clear the XS cols if their content doesn't match in height -->
								  <div class="clearfix visible-xs-block"><h3>Bootstrap là gì?</h3>
								  <h4><?php echo $value['title'] ?></h4>
								  <img class="img-thumbnail img-circle" src="<?php echo $value['url_thumbnail'] ?>">
								  	<p><?php echo $value['content'] ?></p>
								  	<p><?php echo $value['time'] ?></p>
								  	<p><?php echo $value['tag'] ?></p>
								  	
							  	</div>
								  <div class="col-xs-6 col-sm-4"><h3>Bootstrap là gì?</h3>
								  <h4><?php echo $value['title'] ?></h4>
								  <img class="img-thumbnail img-circle" src="<?php echo $value['url_thumbnail'] ?>">
								  	<p><?php echo $value['content'] ?></p>
								  	<p><?php echo $value['time'] ?></p>
								  	<p><?php echo $value['tag'] ?></p>
								  	
							  	</div>
					</div>
					<?php endforeach ?>
</div>