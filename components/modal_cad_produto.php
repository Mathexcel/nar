<div id="modal6" class="modal">

	<div class="modal-content" id="design_modal">

		<div id="font_titulo_modal"> Cadastrar Produto </div>

		<div id="font_modal">

			<form name="cadastro_produto" id="cadastro_produto">

				<table id="dynamic_field_produto">

					<tr class="row">

						<td>

							<div class="row">

								<div class="input-field col s6">

									<input placeholder="Digite o produto" id="tipo_produto" type="text" class="validate">
									<label class="active" for="tipo_produto">Produto</label>
								</div>

								<div class="input-field col s6">

									<input placeholder="Digite a marca" id="tipo_marca" type="text" class="validate">
									<label class="active" for="tipo_marca">Marca</label>
								</div>
							</div>

							<div class="row">

								<div class="input-field col s6">

									<input placeholder="Digite o modelo" id="tipo_modelo" type="text" class="validate">
									<label class="active" for="tipo_modelo">Modelo</label>
								</div>

								<div class="input-field col s6">

									<input placeholder="Digite o preço" id="preco" type="text" class="validate">
									<label class="active" for="preco">Preço</label>
								</div>
							</div>

							<div class="row">

								<div class="input-field col s6">

									<input placeholder="Digite a quantidade" id="quantidade" type="text" class="validate">
									<label class="active" for="quantidade">Quantidade</label>
								</div>

								<div class="col s6 center">

									<a type="button" class="waves-effect waves-light grey darken-3 btn fonte_button modal-trigger" id="add_produto" name="add_produto" ><i class="material-icons left">input</i>Novo Produto</a>
								</div>
							</div>
						</td>
					</tr>
				</table>

				<a type="button" name="submit_produto" id="submit_produto" class="waves-effect waves-light grey darken-3 btn modal-trigger"><i class="material-icons left">add</i>Cadastrar Produto</a>
			</form>
		</div>

		<!--<div class="modal-footer">

			<a href="#!" class="modal-close waves-effect waves-green btn-flat">Fecha</a>
		</div>-->
	</div>
</div>