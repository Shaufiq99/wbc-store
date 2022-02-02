<div class="main-container ace-save-state" id="main-container">
	<script type="text/javascript">
		try {
			ace.settings.loadState('main-container');
		} catch (e) {}
	</script>
	<div id="sidebar" class="sidebar responsive ace-save-state">
		<script type="text/javascript">
			try {
				ace.settings.loadState('sidebar');
			} catch (e) {}
		</script>

		<div class="sidebar-shortcuts" id="sidebar-shortcuts">
			<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
				<span class="badge badge-primary py-2 px-3">
					<b>
						<?php echo "LOGIN : " . strtoupper($this->session->userdata('level')); ?>
					</b>
				</span>
			</div>

			<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
				<span class="btn btn-success"></span>

				<span class="btn btn-info"></span>

				<span class="btn btn-warning"></span>

				<span class="btn btn-danger"></span>
			</div>
		</div><!-- /.sidebar-shortcuts -->