jQuery(document).ready(function($) {

    $('#btn_faculty').on('click', function(){
        var ffname = $('#ffname').val();
        var fmname = $('fmname').val();
        var flname = $('#flname').val();
        var fcontact = $('#fcontact').val();
        // var fposition = $('#fposition').val();
        var fdepCode = $('#fdepCode').val();
        $.ajax({
            type: 'post',
            url: "<?php echo site_url('welcome_admin/addFaculty'); ?>",
            data: {
                  fname: ffname,
                  mname: fmname,
                  lname: flname,
                  contact: fcontact,
                  // fposition: fposition,
                  depCode: fdepCode
            },
          dataType: 'JSON',
          success: function(data){
              if (data.status) {
                  alert("Faculty successfully added!");
                  location.reload();
                  $('#addfaculty').modal('hide');
              }else{
                  alert("Oops there is something wrong!");
                        
              }
          },
          error: function(){
            alert('ERROR!');
          }
      });return false;
    });
    
    });