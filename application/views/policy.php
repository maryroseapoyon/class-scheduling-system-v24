<?php
$policy = '';
foreach($data as $row){
  $policy .= '<div class="col-12 col-md-4">'.
  '<label class="form-control-label col-12">'.$row->policyName.
  '<input name="'.$row->id.'" class="form-control" id="'.$row->policyName.'" value="'.$row->policyValue.'" >'.'</div>';  
  }

?>

  <div class="breadcrumbs">
    <div class="col-sm-4">
      <div class="page-header float-left">
        <div class="page-title">
            <h1>Policies</h1>
        </div>
      </div>
    </div>
    <div class="col-sm-8">
      <div class="page-header float-right">
          <div class="page-title">
              <ol class="breadcrumb text-right">
                  <li><a href="<?php echo site_url('welcome_admin');?>">Home</a></li>
                  <li><a href="#">Policy</a></li>
              </ol>
          </div>
      </div>
    </div>
  </div>

  <div class="card-body card-block">
      <div class="form-group">
          <?php echo $policy ?>          
      </div>
      <div class="modal-footer">
      </div>
  </div>
  <input type="submit" name="edit" value="Edit" />  

<script type="text/javascript">
  $('#btnupd_faculty').on('click', function(){
      var ffname = $('#ffname_upd').val();
      var fmname = $('#fmname_upd').val();
      var flname = $('#flname_upd').val();
      var fcontact = $('#fcontact_upd').val();
      var fposition = $('#fposition_upd').val();
      var fdepCode = $('#fdepCode_upd').val();
      var fid = $('#profid').val();
      $.ajax({
          type: 'post',
          url: "<?php echo site_url('welcome_admin/editFaculty'); ?>",
          data: {
                fname: ffname,
                mname: fmname,
                lname: flname,
                contact: fcontact,
                position: fposition,
                depCode: fdepCode,
                fid : fid
          },
        dataType: 'JSON',
        success: function(data){
            if (data.status) {
                alert("Update Succesful!");
                location.reload();
                $('#editfaculty').modal('hide');
            }else{
                $('.alert').css('display', 'block');
                $('.alert').html(data.notif);   
            }
        },
        error: function(request, status, error){
          alert(request.responseText);
        }
    });return false;
  });        
</script>
