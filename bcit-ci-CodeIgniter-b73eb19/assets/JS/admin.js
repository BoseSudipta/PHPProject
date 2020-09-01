
  // var BASE_URL = "<?php echo base_url();?>";

    $(document).ready(function() {

      $('.edit').click(function(){
        // alert('hi');

          var id = $(this).attr('relid'); //get the attribute value
          // alert(id);
          var BASE_URL = $(this).attr('relpath');

          // console.log(id+BASE_URL);

          $.post({
              url: BASE_URL,
              data: {id:id},
              dataType: "json",
              success:function(response){
                $('#id').val(response.id);
                $('#f_name').val(response.first_name); //hold the response in id and show on popup
                $('#l_name').val(response.last_name);
                $('#password').val(response.password);
                $('#email').val(response.email);
                $('#phone_number').val(response.phone);
                $('#birth_date').val(response.birth_date);
                // $('#editModal').val({backdrop: 'static', keyboard: true, show: true});
            }
          });
      });
    });
$(document).ready(function() {
    $('#editForm').on('submit',function(){
        // var BASE_URL = $(this).attr('r_path');
        // console.log(BASE_URL);
    		var id = $('#id').val();
    		var f_name = $('#f_name').val();
    		var l_name = $('#l_name').val();
    		var password = $('#password').val();
    		var email = $('#email').val();
    		var phone_number= $('#phone_number').val();
        var birth_date = $('#birth_date').val();
    		$.post({
    		  url  : "Admin/record_update",
    			dataType : "JSON",
    			data : {id:id, first_name:f_name, last_name:l_name, password:password, email:email, phone:phone_number,birth_date:birth_date},
    			success: function(data){
            console.log(data);
    				// $("#id").val("");
    				// $("#f_name").val("");
    				// $("#l_name").val("");
    				// $("#password").val("");
    				// $('#email').val("");  
    				// $("#phone_number").val("");
    				// $("#editModal").modal('hide');
    				// // listEmployee();
    			}
    		});
    		return false;
    	});
    });
