<h2>Group Chat List</h2>
<?php echo anchor('group/add', 'Create Chat Group', ['class' => 'btn btn-primary btn-sm']); ?>
<br />
<br />
<table class="table table-bordered">
  <tr>
    <thead>
      <tr>
        <th>No</th>
        <th>Group name</th>
        <th>Created by</th>
        <th>Number of Members</th>
        <th>Action</th>
      </tr>
    </thead>
  </tr>
  <tbody>
  <?php
  $no = 0;
  foreach ($record->result() as $r) {
    $no++;
    echo "<tr>
      <td>$no</td>
      <td>$r->topic</td>
      <td>$r->created_by</td>
      <td>$r->total_member</td>
      <td>".
        anchor('group/check/'. $r->chat_id, 'Chat', ['class' => 'btn btn-success btn-sm'])
      ."</td>
    </tr>";
  }
  ?>
  </tbody>
</table>
</p>

<script src="<?php echo base_url(); ?>js/dashboard.js" type="text/javascript"></script>
