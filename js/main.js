
//inicializa app com angularjs
var todo = angular.module('todo',[]);


todo.controller('ctrlEmpresa',function($scope,$http){
	$scope.empresas = [];

	$scope.save = function(){
		$scope.empresas.push({id:0,nome:'', cidade:''});
	}	

	$scope.remove = function(empresa){
		$scope.empresas.splice(empresa, 1);
	}

	$scope.saveAll = function (){
		//url, dados
		$http.post('empresa/save',{dados : $scope.empresas}).
		success(function(data) {
			//faz alguma coisa quando terminar 
		}).
		error(function(data) {
			//caso ocorra alguma erro na requisição tratar aqui
		});
	}


});