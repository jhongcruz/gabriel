<!doctype html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>Todo List</title>
		<link rel="stylesheet" type="text/css" href="bootstrap-3.3.4/css/bootstrap.min.css">
		<script type="text/javascript" src="js/angular.min.js"></script>
		<script type="text/javascript" src="js/main.js"></script>
	</head>
	<body ng-app="todo">
		<div class="container">
			<div ng-controller="ctrlEmpresa"> 
				<br>
				<legend style="border-bottom: 6px solid #ccc;">Gabriel pensador</legend>

				<div>
					<button class="btn btn-primary" title="Adicionar telefone." ng-click="save()"><i class="glyphicon glyphicon-plus"></i></button>
					<br><br>
					<div data-ng-repeat="empresa in empresas">
						<div class="row">
		                    <div class="form-group col-md-1">
								<input type="text" class="form-control" ng-model="empresa.id" value="{{empresa.id}}" >
		                    </div>

							<div class="form-group col-md-4">
								<input type="text" class="form-control" ng-model="empresa.nome" value="{{empresa.nome}}" placeholder="Seu nome">
		                    </div>

		                    <div class="form-group col-md-4">
								<input type="text" class="form-control" ng-model="empresa.cidade" value="{{empresa.cidade}}" placeholder="Sua cidade">
		                    </div>

		                   	<div class="form-group col-md-2">
								<button class="btn" ng-click="remove(empresa)"><i class="glyphicon glyphicon-trash"></i></button>
		                    </div>
		                </div>
					</div>

					<button class="btn btn-lg btn-success" ng-click="saveAll()">Salvar tudo mano ;)</button>
				</div>
			</div>
		</div>
	</body>
</html>