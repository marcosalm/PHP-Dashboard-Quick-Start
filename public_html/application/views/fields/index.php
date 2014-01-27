<div style="float:right;">
  <a class="btn btn-lg btn-primary" href="/dashboard/fields/add" role="button">New Field &raquo;</a>
</div>
<h1>Fields</h1>

<?php if($this->session->flashdata('status')) echo $this->session->flashdata('status');
?>

<table class="table table-hover tablesorter" id="table" style="margin-top:30px;">
    <thead>
        <tr class="header">
          <th>Name</th>
          <th></th>
         </tr>
    </thead>
    <tbody> 
        <?php foreach($fields as $field) { ?>
          <tr>
            <td width=200><a href="/dashboard/event/1" style="color:#333;"><?= $field->field_name; ?></a></td>
              <td width=150>
                <div style="float:right">
                  <a href="/dashboard/fields/<?= $field->field_id; ?>" data-toggle="tooltip" title="Edit">
                    <span class="options glyphicon glyphicon-edit"></span>
                  </a>
                  &nbsp;
                  <a href="#" data-toggle="tooltip" title="Delete" class="delete_btn" name="this field" redirect="/dashboard/fields/delete/<?= $field->field_id; ?>">
                    <span class="options glyphicon glyphicon-remove-circle"></span>
                  </a>
                </div>
              </td>
          </tr>
        <?php } ?>
    </tbody>
</table>