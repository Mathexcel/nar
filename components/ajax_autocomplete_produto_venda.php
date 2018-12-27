<!--<script>

  $(document).ready(function() {

    $('#produto_venda').keyup(function() {

      var query = $(this).val();

      if(query != '') {

        $.ajax({

          url:"components/autocomplete_produto_venda.php",  
          method:"POST",  
          data:{query:query},  
          success:function(data) {

            $('#countryList').fadeIn();  
            $('#countryList').html(data);  
          }
        });
      }
    });

    $(document).on('click', 'li', function() {

      $('#produto_venda').val($(this).text());
      $('#countryList').fadeOut();
    });
  });
</script>-->

<script>

  $(document).ready(function(){

    $('input.autocomplete_produto_venda').autocomplete({

      data: {

        "Apple": null,
        "Microsoft": null,
        "Google": null
      }
    });
  });
</script>