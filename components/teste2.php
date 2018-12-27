<html>
  
  <head>

    <script type="text/javascript">

      $('#add').click(function() {

        $('.fields').append('<input type="text" name="valor[]" id="valor" value="0" onkeyup="sum()" />');
      });

      function sum(){

        let total = 0;
        $('.fields input').each(function() {

          total += +$(this).val();
        });

        $('#total').val(total);
      }
    </script>
  </head>

  <body><!--
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>

    <form id="FrmLoja" method="post" action="#">

      <div class="fields">

        <input type="text" name="valor[]" id="valor" value="0" onkeyup="sum()"/>
      </div>

      <input type="text" name="total" id="total" value="" />

      <button type="button" id="add">+</button>
    </form>
  </body>
</html>-->

----------------------------------------------------------------------------------------------------------------------------------------------------------
<body>
<form name="cadastro_venda" id="cadastro_venda">

  <div class="table-responsive">

    <table class="table table-bordered" id="dynamic_field_venda">

      <tr class="row">

        <td>

          <div class="input-field col s6">

            <input placeholder="Digite o Produto" name="input_produto_venda[]" type="text" class="validate">
            <label class="active" for="input_produto_venda[]">Produto</label>
          </div>

          <div class="fields input-field col s2">

            <input placeholder=" " name="input_quantidade_venda[]" class="input_quantidade_venda" type="text" class="validate" value="1" onkeyup="sum()">
            <label class="active" for="input_quantidade_venda[]">Quantidade</label>
          </div>

          <div class="input-field col s2">

            <div class="input_preco_venda"></div>
            <label class="active" for="input_preco_venda">Preço</label>
          </div>

          <div class="input-field col s2">

            <button type="button" class="btn-floating btn-large waves-effect waves-light grey darken-3" id="add" name="add" ><i class="material-icons">add</i></button>
          </div>
        </td>
      </tr>
    </table>

    <div class="row">

      <div class="input-field col s3">

        <?php echo "O Total é: R$" ?><div name="total" id="total"></div>
      </div>

      <div class="input-field col s9">

        <a type="button" name="submit" id="submit" class="waves-effect waves-light grey darken-3 btn fonte_button modal-trigger"><i class="material-icons left">attach_money</i>Registrar Venda</a>
      </div>
    </div>
  </div>
</form>
</body>
</html>