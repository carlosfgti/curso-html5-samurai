<?php
$namePage = 'Formulários no HTML5';
include('pags/sem-slide.php');
?>

<section class="formularios padding-40">
	<div class="container text-center">
		<h1 class="titulo padding-20	">
			Trabalhando com formulários no HTML5
		</h1>

		

		<div class="col-md-6">
			<p>Formulários no HTML 4</p>
			<form>
				<input type="text" name="nome" placeholder="Insira o seu nome">
				<br>

				<input type="password" name="password" placeholder="Insira sua senha">
				<br>

				<textarea name="descricao" placeholder="Informe a descrição"></textarea>
				<br>

				<label>
					Concordo com os termos de uso <input type="checkbox" name="check">
				</label>
				<br>

				<label>
					Mulher <input type="radio" name="sexo" value="F">
				</label>
				<label>
					Homem <input type="radio" name="sexo" value="M">
				</label>

				<br>
				<select name="select">
					<option>Escolha o Estado</option>
					<option value="GO">Goiás</option>
					<option value="MG">Minas Gerais</option>
					<option value="SP">São Paulo</option>
				</select>

				<br>

				<input type="file" name="imagem">

				<br>
				<button>Botão Enviar</button>
				<input type="submit" name="enviar" value="Enviar Agora">
			</form>
		</div>
		<!--Final Formulários do HTML4-->


		<div class="col-md-6">
			<p>Novos Elementos de Formulário HTML5</p>

			<form formaction="#" formmethod="POST" formenctype="multipart/form-data" formnovalidate>
				<div class="form-group">
					<input type="tel" name="telefone" placeholder="Telefone" autofocus>
				</div>

				<div class="form-group">
					<input type="search" name="search" placeholder="Search">
				</div>

				<div class="form-group">
					<input type="url" name="url" placeholder="Insira uma url" autocomplete>
				</div>

				<div class="form-group">
					<input type="email" name="email" placeholder="E-mail">
				</div>

				<div class="form-group">
					<input type="date" name="data" placeholder="Data">
				</div>

				<div class="form-group">
					<input type="time" name="time" placeholder="Horário">
				</div>

				<div class="form-group">
					<input type="month" name="month" placeholder="Mês do ano">
				</div>

				<div class="form-group">
					<input type="datetime-local" name="datetime">
				</div>

				<div class="form-group">
					<input type="number" name="number">
				</div>

				<div class="form-group">
					10 <input type="range" min="10" max="100" value="25"> 100
				</div>

				<div class="form-group">
					<input type="color" name="color">
				</div>


				<div class="form-group">
					<input type="submit" name="enviar" value="Submeter">
				</div>
			</form>
		</div>
		<!--Final Formulários do HTML6-->
	</div>
</section>