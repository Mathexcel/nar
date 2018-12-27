<script> 
 
  $(document).ready(function(){

    var i=1;
    $('#add_produto').click(function(){

      i++;
      $('#dynamic_field_produto').append('<tr id="row'+i+'"><td><input type="text" name="name[]" placeholder="Enter your Name" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');  
    });

    $(document).on('click', '.btn_remove', function(){

      var button_id = $(this).attr("id");
      $('#row'+button_id+'').remove();
    });

    $('#submit_produto').click(function(){

      $.ajax({

        url:"name.php",
        method:"POST",
        data:$('#cadastro_produto').serialize(),
        success:function(data)

        {

          alert(data);
          $('#cadastro_produto')[0].reset();
        }
      });
    });
  });
</script>