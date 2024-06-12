<style type="text/css">
.fs{
	max-width: 400px;
	margin: 0 auto;
	margin-top: 5%;
}

</style>



<form class="fs">
	<div class="text-center"><h1>Login</h1></div>
		
	<div class="form-group">
		<label>Email :</label>
		<input class="form-control" type="text" name="">
	</div>
	<div class="form-group">
		<label>Senha :</label>
		<input class="form-control" type="password" name="">
	</div>
	<div class="form-group">
		<input class="btn btn-success" style="width: 49.45%;" type="submit" value="Entrar" name="">
		<a href="<?=base_url();?>principal/cadastro" style="width: 49.45%;" class="btn btn-primary">Cadastrar-se</a>
	</div>
</form>