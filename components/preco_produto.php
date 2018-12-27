<script>

	$(document).on("keyup", ".input_quantidade_venda", function(){

		var indice = $(".input_quantidade_venda").index(this);

		var n1 = parseInt(this.value, 10);

		$('.input_preco_venda:eq('+indice+')').html(n1 * 10);
	});
</script>