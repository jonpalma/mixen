<div class="search widget">
		<form method="get" id="searchform" action="<?php echo home_url(); ?>/">
			<div class="input-group">
				<input type="text" class="form-control" value="<?php echo esc_html($s, 1); ?>" name="s" id="s"  placeholder="Search..." />
				<span class="input-group-addon"><input  class="fa fa-search" id="searchsubmit" value="" type="submit" ></span>
			</div>
		</form>
</div>