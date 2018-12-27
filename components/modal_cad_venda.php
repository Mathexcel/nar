<div id="modal8" class="modal">

	<div class="modal-content" id="design_modal">

		<div id="font_titulo_modal"> Cadastrar Venda </div>

		<div id="font_modal" class="form-group">

			<form name="cadastro_venda" id="cadastro_venda">

				<div class="table-responsive">

					<div class="row">

						<div class="col s3"></div>

						<div class="input-field col s6">

							<input placeholder="Digite o nome do cliente" name="cliente_venda" id="cliente_venda" type="text" class="validate center">
							<label class="active" for="cliente_venda">Cliente</label>
						</div>

						<div class="col s3"></div>
					</div>

					<table class="table table-bordered" id="dynamic_field_venda">

						<tr class="row">

							<td>

								<div class="input-field col s6">

									<input placeholder="Digite o Produto" name="input_produto_venda[]" id="produto_venda" type="text" class="validate autocomplete_produto_venda">
									<div id="countryList"></div>
									<label class="active" for="input_produto_venda[]">Produto</label>
								</div>

								<div class="input-field col s2">

									<input placeholder=" " name="input_quantidade_venda[]" class="input_quantidade_venda" type="text" class="validate" value="1">
									<label class="active" for="input_quantidade_venda[]">Quantidade</label>
								</div>

								<div class="input-field col s2">

									<div class="input_preco_venda"></div>
									<label class="active" for="input_preco_venda">Preço</label>
								</div>

								<div class="input-field col s4">

									<!--<button type="button" class="btn-floating btn-large waves-effect waves-light grey darken-3" id="add" name="add" ><i class="material-icons">add</i></button>-->
								</div>
							</td>
						</tr>
					</table>

					<div class="row">

						<div class="input-field col s3">

							<div class="row">

								<div class="input-field col s9">

									<?php echo "O total é R$ " ?>
								</div>

								<div class="input-field col s3">

									<div class="soma_venda" name="soma_venda" id="soma_venda"></div>
									<input type="hidden" name="soma_venda">
								</div>
							</div>
						</div>

						<div class="input-field col s7">

							<a type="button" name="submit" id="submit" class="waves-effect waves-light grey darken-3 btn fonte_button modal-trigger"><i class="material-icons left">attach_money</i>Registrar Venda</a>
						</div>

						<div class="col s2">

							<button type="button" class="btn-floating btn-large waves-effect waves-light grey darken-3" id="add" name="add" ><i class="material-icons">add</i>
						</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>