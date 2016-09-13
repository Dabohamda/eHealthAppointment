(function() {
  var app = angular.module('myApp', []);

app.controller('createController',function($scope,$location,$window,$http){
       $scope.tab={};
       for (var i = 1900; i <= 2016; i++) {
         $scope.tab={
           "id":i
         };
       }
      this.saveData=function(){
      $http.post("php/register.php", {
      'nom':$scope.nom,
      'prenom':$scope.prenom,
      'annee':$scope.annee,
      'sexe':$scope.sexe,
      'tel':$scope.tel,
      'adresse':$scope.adresse,
      'email':$scope.email,
      'password':$scope.password,
    })

      .success(function(data,status,headers,config){
        alert("Account Created Successfully");
        $scope.nom = null;
        $scope.prenom = null;
        $scope.annee = null;
        $scope.sexe = null;
        $scope.tel = null;
        $scope.adresse = null;
        $scope.email = null;
        $scope.password = null;
        $window.location.href = 'http://localhost:8080/ehealth/index.html';
      });
    }
  });

  app.controller('demandeController',function($scope,$location,$window,$http){
        this.saveData=function(){
        $http.post("php/request.php", {
        'type':$scope.type,
        'description':$scope.description,
        'jour':$scope.jour,
        'heure':$scope.heure,

      })

        .success(function(data,status,headers,config){
          alert("Request Sent Successfully");
          $scope.type = null;
          $scope.description = null;
          $scope.jour = null;
          $scope.heure = null;
          $window.location.href = 'http://localhost:8080/ehealth/profil.html';
        });
      }

    });

  app.controller('StoreController', ['$http', function($http){
    var store = this;
    store.products = [];
    $http.get('./php/profil.php').success(function(data){
        store.products = data;
    });

  }]);

    app.controller('DemandeController', ['$http', function($http){
    var demande = this;
    demande.list = [];
    $http.get('./php/demande.php').success(function(data){
        demande.list = data;
    });

  }]);





})();
