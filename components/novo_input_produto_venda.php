<script>

	function somaTotal() {

		var total = 0;

		$(".input_preco_venda").each(function(){

			total += parseFloat($(this).text());
		});

		$(".soma_venda").text(total);

		$("[name=soma_venda]").val(total);
	}
	
	// A função que gera inputs dinamicamente:
	$(document).ready(function () {

		// A função que multiplica o preço do produto pela quantidade:
		$(document).on("keyup", ".input_quantidade_venda", function(){

			// pego o índice da classe
			var indice = $(".input_quantidade_venda").index(this);

			var n1 = parseInt(this.value, 10);
			// aplico a outra classe com o mesmo índice
			$('.input_preco_venda:eq('+indice+')').html(n1 * 10);

			somaTotal();
		});

		var i = 1;

		$('#add').click(function () {

			i++;

			$('#dynamic_field_venda').append('<tr class= "row" id="row' + i + '"><td><div class="input-field col s6"><input placeholder="Digite o Produto" name="input_produto_venda[]" type="text" class="validate"><label class="active" for="input_produto_venda[]">Produto</label></div><div class="input-field col s2"><input placeholder=" " name="input_quantidade_venda[]" class="input_quantidade_venda" type="text" class="validate" value="1"><label class="active" for="input_quantidade_venda[]">Quantidade</label></div><div class="input-field col s2"><div class="input_preco_venda"></div><label class="active" for="input_preco_venda[]">Preço</label></div><div class="input-field col s2"><button type="button" class="btn-floating btn-large waves-effect waves-light grey darken-3 btn btn-danger btn_remove" name="remove" id="' + i + '"><i class="material-icons">remove</i></button></div></td> </tr>');
		});

		$(document).on('click', '.btn_remove', function () {

			var button_id = $(this).attr("id");
			$('#row' + button_id + '').remove();

			somaTotal();
		});

		$('#submit').click(function(){

			$.ajax({

				url:"components/cad_venda.php",
				method:"POST",
				data:$('#cadastro_venda').serialize(),
				success:function(data) {

					alert(data);
					$('#cadastro_venda')[0].reset();
				}
			});
		});

		M.updateTextFields();//Manter este recurso aqui
	});
</script>