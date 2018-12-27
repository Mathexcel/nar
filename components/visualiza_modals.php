<!-- Modal Structure -->

<div id="modal1" class="modal">

	<div class="modal-content" id="design_modal">

		<div id="font_titulo_modal"> Estoque </div>

		<div id="font_modal">

			<div class="row">

				<?php include("components/table.php") ?>
			</div>

			<div class="row">

				<div class="input-field col s3">

					<input placeholder="Código:" id="pesquisa_produto" type="text" class="validate">
					<label for="pesquisa_produto">Pesquisar Produto</label>
				</div>

				<div class="input-field col s1">
					<button class="btn-floating btn-large waves-effect waves-light grey darken-3" type="submit" id="buscar"><i class="material-icons">search</i></button>
				</div>

				<div class="col s8">

					<a class="waves-effect waves-light grey darken-3 btn fonte_button modal-trigger" href="#modal5"><i class="material-icons left">featured_play_list</i><div class="espaco">Ver Lista de Compras</div></a>
					<a class="waves-effect waves-light grey darken-3 btn fonte_button"><i class="material-icons left">update</i>Alterar Produto</a>
					<a class="waves-effect waves-light grey darken-3 btn fonte_button modal-trigger" href="#modal6"><i class="material-icons left">add_circle</i><div class="espaco">Cadastrar Produto</div></a>
					<a class="waves-effect waves-light grey darken-3 btn fonte_button"><i class="material-icons left">delete</i>Excluir Produto</a>
				</div>
			</div>
		</div>

		<!--<div class="modal-footer">

			<a href="#!" class="modal-close waves-effect waves-green btn-flat">Fecha</a>
		</div>-->
	</div>
</div>

<div id="modal2" class="modal">

	<div class="modal-content" id="design_modal">

		<div id="font_titulo_modal"> Cliente </div>

		<div id="font_modal">

			<div class="row">

				<div class="input-field col s3">

					<input placeholder="Código:" id="pesquisa_produto" type="text" class="validate">
					<label for="pesquisa_produto">Pesquisar Cliente</label>
				</div>

				<div class="input-field col s1">
					<button class="btn-floating btn-large waves-effect waves-light grey darken-3" type="submit" id="buscar"><i class="material-icons">search</i></button>
				</div>

				<div class="col s8">

					<a class="waves-effect waves-light grey darken-3 btn fonte_button modal-trigger" href="#modal7"><i class="material-icons left">add_circle</i><div class="espaco">Cadastrar Cliente</div></a>
					<a class="waves-effect waves-light grey darken-3 btn fonte_button"><i class="material-icons left">update</i>Alterar Cliente</a>
					<a class="waves-effect waves-light grey darken-3 btn fonte_button"><i class="material-icons left">delete</i>Excluir Cliente</a>
				</div>
			</div>
		</div>

		<!--<div class="modal-footer">

			<a href="#!" class="modal-close waves-effect waves-green btn-flat">Fecha</a>
		</div>-->
	</div>
</div>

<div id="modal3" class="modal">

	<div class="modal-content" id="design_modal">

		<div id="font_titulo_modal"> Vendas </div>

		<div id="font_modal">

			<div class="row">

				<div class="input-field col s3">

					<input placeholder="Código:" id="pesquisa_produto" type="text" class="validate">
					<label for="pesquisa_produto">Pesquisar Vendas</label>
				</div>

				<div class="input-field col s1">
					<button class="btn-floating btn-large waves-effect waves-light grey darken-3" type="submit" id="buscar"><i class="material-icons">search</i></button>
				</div>

				<div class="col s8">

					<a class="waves-effect waves-light grey darken-3 btn fonte_button modal-trigger" href="#modal8"><i class="material-icons left">add_circle</i>Cadastrar Venda</a>
					<a class="waves-effect waves-light grey darken-3 btn fonte_button"><i class="material-icons left">update</i>Alterar Venda</a>
					<a class="waves-effect waves-light grey darken-3 btn fonte_button"><i class="material-icons left">delete</i>Excluir Venda</a>
				</div>
			</div>
		</div>

		<!--<div class="modal-footer">

			<a href="#!" class="modal-close waves-effect waves-green btn-flat">Fecha</a>
		</div>-->
	</div>
</div>

<div id="modal4" class="modal">

	<div class="modal-content" id="design_modal">

		<div id="font_titulo_modal"> Aluguéis </div>

		<div id="font_modal">

			<div class="row">

				<div class="input-field col s3">

					<input placeholder="Código:" id="pesquisa_produto" type="text" class="validate">
					<label for="pesquisa_produto">Pesquisar Aluguéis</label>
				</div>

				<div class="input-field col s1">
					<button class="btn-floating btn-large waves-effect waves-light grey darken-3" type="submit" id="buscar"><i class="material-icons">search</i></button>
				</div>

				<div class="col s8">

					<a class="waves-effect waves-light grey darken-3 btn fonte_button"><i class="material-icons left">add_circle</i><div class="espaco">Cadastrar Aluguel</div></a>
					<a class="waves-effect waves-light grey darken-3 btn fonte_button"><i class="material-icons left">refresh</i><div class="espaco">Recomeçar Aluguel</div></a>
					<a class="waves-effect waves-light grey darken-3 btn fonte_button"><i class="material-icons left">update</i>Alterar Aluguel</a>
					<a class="waves-effect waves-light grey darken-3 btn fonte_button"><i class="material-icons left">done</i><div class="espaco">Terminar Aluguel</div></a>
					<a class="waves-effect waves-light grey darken-3 btn fonte_button"><i class="material-icons left">delete</i>Excluir Aluguel</a>
				</div>
			</div>
		</div>

		<!--<div class="modal-footer">

			<a href="#!" class="modal-close waves-effect waves-green btn-flat">Fecha</a>
		</div>-->
	</div>
</div>

<div id="modal5" class="modal">

	<div class="modal-content" id="design_modal">

		<div id="font_titulo_modal"> Lista de Compras </div>

		<div id="font_modal">

			<div class="row">

				<div class="input-field col s3">

					<input placeholder="Código:" id="pesquisa_produto" type="text" class="validate">
					<label for="pesquisa_produto">Pesquisar Lista</label>
				</div>

				<div class="input-field col s1">
					<button class="btn-floating btn-large waves-effect waves-light grey darken-3" type="submit" id="buscar"><i class="material-icons">search</i></button>
				</div>

				<div class="col s8">

					<a class="waves-effect waves-light grey darken-3 btn fonte_button"><i class="material-icons left">add_circle</i><div class="espaco">Criar Lista de Compras</div></a>
					<a class="waves-effect waves-light grey darken-3 btn fonte_button"><i class="material-icons left">update</i>Alterar Lista</a>
					<a class="waves-effect waves-light grey darken-3 btn fonte_button"><i class="material-icons left">delete</i>Excluir Lista</a>
				</div>
			</div>
		</div>

		<!--<div class="modal-footer">

			<a href="#!" class="modal-close waves-effect waves-green btn-flat">Fecha</a>
		</div>-->
	</div>
</div>

<?php include ("components/modal_cad_produto.php"); ?>

<div id="modal7" class="modal">

	<div class="modal-content" id="design_modal">

		<div id="font_titulo_modal"> Cadastrar Cliente </div>

		<div id="font_modal">

			<div class="row">

				<div class="input-field col s4">

					<input placeholder="Digite o nome do cliente" id="nome_cliente" type="text" class="validate">
					<label for="nome_cliente">Cliente</label>
				</div>

				<div class="input-field col s4">

					<input placeholder="Digite o telefone" id="telefone" type="text" class="validate">
					<label for="telefone">Telefone</label>
				</div>

				<div class="col s4 center">

					<a class="waves-effect waves-light grey darken-3 btn fonte_button2 modal-trigger" href="#"><i class="material-icons left">add_circle</i><div class="espaco2">Cadastrar Cliente</div></a>
				</div>
			</div>
		</div>

		<!--<div class="modal-footer">

			<a href="#!" class="modal-close waves-effect waves-green btn-flat">Fecha</a>
		</div>-->
	</div>
</div>

<?php include ("components/modal_cad_venda.php"); ?>