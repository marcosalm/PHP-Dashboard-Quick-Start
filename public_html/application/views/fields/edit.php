<h1>Fields <span>:: Edit</span></h1>

<hr />
<?php if(validation_errors()) echo validation_errors();
?>
<?php echo form_open('','class="form"'); ?>
 <div class="form-group">
 	<label for="field_name">Name</label>
 	<?php echo form_input('field_name', $field->field_name, 'class="span10 form-control"'); ?>
  </div>
 <?php echo form_submit('','Save','class="btn btn-primary"');  ?>
</form>