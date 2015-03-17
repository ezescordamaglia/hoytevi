<script type="text/javascript">
$(document).ready(function() {
	$("body").ezBgResize({
		img : "<?=base_url()?>images/fondo_pag.jpg", // Relative path example.  You could also use an absolute url (http://...).
		opacity : 0.8, // Opacity. 1 = 100%.  This is optional.
		center  : true // Boolean (true or false). This is optional. Default is true.
	});
});
</script>

<script src="<?=base_url()?>js/jquery.ez-bg-resize.js" type="text/javascript" charset="utf-8"></script>


	<body>
		<div class="container_12">
			<div class="grid_12">
				<h1 style="text-align: center">Bienvenido <?=$this->session->userdata('perfil')?></h1>
			</div>
		</div>	

		<BR>
		<BR>
		<BR>
		<BR>
		<BR>
		<BR>
		<BR>
		<BR>
		<BR>
		<BR>
		<BR>
		<BR>


	</body>
