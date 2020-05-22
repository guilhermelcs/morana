<div class="container">
        <div class="row">
			<div class="col-12">
			<div class="row pt-md-5 mt-md-5 text-center">
				<div class="col-md-12 text-center">
					<div class="border-top pt-5 text-center">
						<p class="text-center">
							Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Made By Devware</a>
						</p>
					</div>
				</div>
			</div>
        </div>
      </div>
  </div> <!-- .site-wrap -->

	<!-- Modal Cadastrar Produto -->
	<div id="cadastro-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					  <h1 class="modal-title">Cadastrar Produto</h1>
				</div>
	  			<div class="modal-body">
	  				<div class="container">
						<div class="row">
							<div class="col-12">
								<form id="send-form" action="#" method="POST" class="needs-validation" novalidate></form>
								<div class="gui-validation" data-validation="cadastro-form">
									<div class="form-group">
										<label class="form-label" for="input-name">Nome</label>
										<input id="input-name" name="nome" type="text" class="form-control" form="send-form" required>
										<div class="invalid-feedback">
											Preencha este campo!
										</div>
									</div>
									<div class="form-group">
										<label class="form-label" for="input-description">Descrição</label>
										<input id="input-description" name="descricao" type="text" class="form-control" form="send-form" required>
										<div class="invalid-feedback">
											Preencha este campo!
										</div>
									</div>
									<div class="form-group">
										<label class="form-label" for="input-price">Preço</label>
										<input id="input-price" name="preco" type="text" class="form-control maskMoney" data-symbol="R$ " data-thousands="." data-decimal="," form="send-form" required>
										<div class="invalid-feedback">
											Preencha este campo!
										</div>
									</div>
									<div class="form-group">
										<label class="form-label" for="input-video">Url do vídeo (opcional)</label>
										<input id="input-video" name="video" type="text" class="form-control">
									</div>
									<div class="form-group">
										<label class="form-label" for="input-ref">Referência</label>
										<input id="input-ref" name="referencia" type="number" class="form-control" form="send-form" required>
										<div class="invalid-feedback">
											Preencha este campo!
										</div>
									</div>
									<div class="form-group">
										<label class="form-label" for="input-qtd">Quantidade</label>
										<input id="input-qtd" name="quantidade" type="number" class="form-control" form="send-form" required>
										<div class="invalid-feedback">
											Preencha este campo!
										</div>
									</div>
									<div class="form-group">
										<label class="form-label" for="input-category">Categoria</label>
										<select id="input-category" name="categoria" class="form-control" form="send-form" required>
											<div class="invalid-feedback">
											Preencha este campo!
										</div>
											<option>Brinco</option>
											<option>Colar</option>
											<option>Pulseira</option>
											<option>Anel</option>
											<option>Conjunto</option>
											<option>Acessórios</option>
											<option>Berloques</option>
											<option>Tornozeleira</option>
										</select>
									</div>
									<div class="form-group">
										<label class="form-label" for="input-color">Cor</label>
										<select id="input-color" name="color" class="form-control" form="send-form" required>
											<div class="invalid-feedback">
												Preencha este campo!
											</div>
											<option>Prata</option>
											<option>Dourado</option>
											<option>Grafite</option>
										</select>
									</div>
									<div class="form-group">
										<label class="form-label" for="send-img">Imagem</label>
										<form id="send-image-form" action="#" method="POST" class="needs-validation dropzone" enctype="multipart/form-data" novalidate></form>
										<div class="invalid-feedback">
												Envie a Imagem do Produto!
										</div>
										<button type="submit" form="send-image-form" data-image="edit" class="send-btn mt-2">Salvar Imagem</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button class="cancel-btn" data-dismiss="modal">Cancelar</button>
					<button type="submit" form="send-form" class="send-btn" value="Salvar" data-validation="cadastro-form">Cadastrar</button>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Modal Editar Produto -->
	<div id="editar-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					  <h1 class="modal-title">Editar Produto</h1>
				</div>
	  			<div class="modal-body">
	  				<div class="container">
						  	<div class="row">
							  	<div class="col-12">
	  								<form id="edit-form" action="#" method="POST" class="needs-validation" novalidate></form>
	  								<form id="edit-img-form" action="#" method="POST" class="needs-validation" novalidate></form>
									<div class="gui-validation" data-validation="edit-form">  
										<div class="form-group">
											<label class="form-label" for="edit-name">Nome</label>
											<input id="editt-name" name="nome" type="text" class="form-control" form="edit-form" required>
											<div class="invalid-feedback">
												Preencha este campo!
											</div>
										</div>
										<div class="form-group">
											<!-- Davi, Pegar Dados deste campo no banco de dados ;) -->
											<label class="form-label" for="edit-description">Descrição</label>
											<input id="edit-description" name="descricao" type="text" class="form-control" form="edit-form" required>
											<div class="invalid-feedback">
												Preencha este campo!
											</div>
										</div>
										<div class="form-group">
											<label class="form-label" for="edit-price">Preço</label>
											<input id="edit-price" name="preco" type="text" class="form-control maskMoney" data-symbol="R$ " data-thousands="." data-decimal="," form="edit-form" required>
											<div class="invalid-feedback">
												Preencha este campo!
											</div>
										</div>
										<div class="form-group">
											<label class="form-label" for="edit-video">Url do vídeo (opcional)</label>
											<input id="edit-video" name="video" type="text" class="form-control" form="edit-form">
										</div>
										<div class="form-group">
											<label class="form-label" for="edit-ref">Referência</label>
											<input id="edit-ref" name="referencia" type="number" class="form-control" form="edit-form" required>
											<div class="invalid-feedback">
												Preencha este campo!
											</div>
										</div>
										<div class="form-group">
											<label class="form-label" for="edit-qtd">Quantidade</label>
											<input id="edit-qtd" name="quantidade" type="number" class="form-control" form="edit-form" required>
											<div class="invalid-feedback">
												Preencha este campo!
											</div>
										</div>
										<div class="form-group">
											<label class="form-label" for="edit-category">Categoria</label>
											<select id="edit-category" name="categoria" class="form-control" form="edit-form" required>
												<div class="invalid-feedback">
												Preencha este campo!
											</div>
												<option>Brinco</option>
												<option>Colar</option>
												<option>Pulseira</option>
												<option>Anel</option>
												<option>Conjunto</option>
												<option>Acessórios</option>
												<option>Berloques</option>
												<option>Tornozeleira</option>
											</select>
										</div>
										<div class="form-group">
											<label class="form-label" for="edit-color">Cor</label>
											<select id="edit-color" name="cor" class="form-control" form="edit-form" required>
												<div class="invalid-feedback">
												Preencha este campo!
												</div>
												<option>Prata</option>
												<option>Dourado</option>
												<option>Grafite</option>
											</select>
										</div>
										<div class="form-group">
											<label class="form-label" for="edit-img">Imagem (escolha uma apenas caso queira edita-la)</label>
											<form id="edit-image-form" name="image" action="#" method="POST" class="needs-validation dropzone" enctype="multipart/form-data" novalidate></form>
											<div class="invalid-feedback">
												Envie a Imagem do Produto!
											</div>
											<button type="submit" form="edit-image-form" data-image="edit" class="send-btn mt-2">Salvar Imagem</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button class="cancel-btn" data-dismiss="modal">Cancelar</button>
						<button type="submit" class="send-btn" form="edit-form" data-validation="edit-form">Salvar</button>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Modal Confirmar Pagamento -->
	<div id="confirmar-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					  <h1 class="modal-title">Confirmar Pagamento do Produto</h1>
				</div>
	  			<div class="modal-body">
	  				<div class="container">
						  	<div class="row">
							  	<div class="col-12">
	  								<form id="pagamento-form" action="#" method="POST" class="needs-validation" novalidate></form>
									<div class="gui-validation" data-validation="pagamento-form">  
										<div class="form-group">
											<label class="form-label" for="pagamento-name">Nome</label>
											<input id="pagamento-name" name="nome" type="text" class="form-control" form="pagamento-form"  readonly>
											<div class="invalid-feedback">
												Preencha este campo!
											</div>
										</div>
										<div class="form-group">
											<label class="form-label" for="pagamento-description">Descrição</label>
											<input id="pagamento-description" name="descricao" type="text" class="form-control" form="pagamento-form" readonly>
											<div class="invalid-feedback">
												Preencha este campo!
											</div>
										</div>
										<div class="form-group">
											<label class="form-label" for="pagamento-price">Preço</label>
											<input id="pagamento-price" name="preco" type="text" class="form-control maskMoney" data-symbol="R$ " data-thousands="." data-decimal="," form="pagamento-form" disabled>
											<div class="invalid-feedback">
												Preencha este campo!
											</div>
										</div>
										<div class="form-group">
											<label class="form-label" for="edpagamentoit-video">Url do vídeo (opcional)</label>
											<input id="pagamento-video" name="video" type="text" class="form-control" form="pagamento-form" readonly>
										</div>
										<div class="form-group">
											<label class="form-label" for="pagamento-ref">Referência</label>
											<input id="pagamento-ref" name="referencia" type="number" class="form-control" form="pagamento-form" readonly>
											<div class="invalid-feedback">
												Preencha este campo!
											</div>
										</div>
										<div class="form-group">
											<label class="form-label" for="pagamento-qtd">Quantidade</label>
											<input id="pagamento-qtd" name="quantidade" type="number" class="form-control" form="pagamento-form" required>
											<div class="invalid-feedback">
												Preencha este campo!
											</div>
										</div>
										<div class="form-group">
											<label class="form-label" for="pagamento-category">Categoria</label>
											<select id="pagamento-category" name="categoria" class="form-control" form="pagamento-form" readonly>
												<div class="invalid-feedback">
												Preencha este campo!
											</div>
												<option>Brinco</option>
												<option>Colar</option>
												<option>Pulseira</option>
												<option>Anel</option>
												<option>Conjunto</option>
												<option>Acessórios</option>
												<option>Berloques</option>
												<option>Tornozeleira</option>
											</select>
										</div>
										<div class="form-group">
											<label class="form-label" for="pagamento-color">Cor</label>
											<select id="pagamento-color" name="cor" class="form-control" form="pagamento-form" readonly>
												<div class="invalid-feedback">
												Preencha este campo!
												</div>
												<option>Prata</option>
												<option>Dourado</option>
												<option>Grafite</option>
											</select>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button class="cancel-btn" data-dismiss="modal">Cancelar</button>
						<button type="submit" class="send-btn" form="pagamento-form" data-validation="pagamento-form">Confirmar</button>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Modal Remover -->
	<div id="remover-modal" class="modal" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Este produto será excluído</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<p>Você realmente deseja excluir este produto?</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-info py-2" data-dismiss="modal">Cancelar</button>
				<button type="button" class="btn btn-danger py-2">Excluir</button>
			</div>
			</div>
		</div>
	</div>

	<!-- Modal Cancelar Pagamento -->
	<div id="cancelar-modal" class="modal" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Pagamento não concluído</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<p>Você realmente deseja excluir este produto da lista de pagamento?</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-info py-2" data-dismiss="modal">Cancelar</button>
				<button type="button" class="btn btn-danger py-2">Excluir</button>
			</div>
			</div>
		</div>
	</div>

	
	<script src="assets/js/jquery-3.3.1.min.js"></script>
	<script src="assets/js/jquery-migrate-3.0.1.min.js"></script>
	<script src="assets/js/jquery-ui.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/owl.carousel.min.js"></script>
	<script src="assets/js/jquery.stellar.min.js"></script>
	<script src="assets/js/jquery.countdown.min.js"></script>
	<script src="assets/js/bootstrap-datepicker.min.js"></script>
	<script src="assets/js/jquery.easing.1.3.js"></script>
	<script src="assets/js/aos.js"></script>
	<script src="assets/js/jquery.fancybox.min.js"></script>
	<script src="assets/js/jquery.sticky.js"></script>
	<script src="assets/js/jquery.maskMoney.min.js"></script>
	<script src="assets/js/connection.js"></script>
	<script src="assets/js/dropzone.min.js"></script>

  
  <script src="assets/js/main.js"></script>
  <script src="assets/js/morana-admin.js"></script>

  	<script>
		$(function () {
			$('[data-toggle="tooltip"]').tooltip()
		})
		$(function() {
			$('.maskMoney').maskMoney();
		})
	  </script>
	  
	<script>
		// Example starter JavaScript for disabling form submissions if there are invalid fields
		(function() {
		'use strict';
		window.addEventListener('load', function() {
			// Fetch all the forms we want to apply custom Bootstrap validation styles to
			var forms = document.getElementsByClassName('needs-validation');
			// Loop over them and prevent submission
			var validation = Array.prototype.filter.call(forms, function(form) {
				form.addEventListener('submit', function(event) {
					if (form.checkValidity() === false) {
						event.preventDefault();
						event.stopPropagation();
					}
					form.classList.add('was-validated');
			}, false);
			});
		}, false);
		})();
	</script>

	<script>
		//Validação para Forms Externos
		(function() {
		'use strict';
		window.addEventListener('load', function() {
			$('button[data-validation]').on('click', function() {
				let dataValidation = $(this).data('validation');
				let form = $(`div[data-validation='${dataValidation}']`);
				// console.log(form)
				form.addClass('was-validated')
			});
		}, false);
		})();
	</script>
  </body>
</html>