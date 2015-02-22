<?php echo $this->session->flashdata('crud');?>
<h3>Crud autogenerator</h3>
<fieldset>
	<?php echo form_open('crud/generate_module');?>
		<ul>
			<li>
				<?php echo form_dropdown('table',$tables);?>
			</li>
			<li>
				<?php echo form_submit('','Generate modules');?>
			</li>
		</ul>

</fieldset>


