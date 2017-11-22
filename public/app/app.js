var app = angular.module('bedshop',[]).constant('API_URL',UrlAngular);

app.controller('SanPhamControllerNG',function($scope,$http,API_URL){
    $http.get(API_URL+'list-sanpham').then(function(response){
        $scope.sanphamList=response.data;
    }).catch(angular.noop);
});

app.controller('LoaiSanPhamNG',function($scope,$http,API_URL){
    $scope.chon=function(colum){
        $http.get(API_URL+'list-loai_sp/'+colum).then(function(response){
            $scope.loaiSPList=response.data;
        }).catch(angular.noop)
    }
    
    $scope.timkiem=function(idloai,colum,name){
        localStorage.setItem('idloai', idloai);
        localStorage.setItem('nameloai', name);
        localStorage.setItem('colum', colum);
    }
});

app.controller('SanPhamTimKiemByLoaiControllerNG',function($scope,$http,API_URL){
    var idloai=localStorage.getItem('idloai');
    // console.log(idloai);
    $http.get(API_URL+'list-sanpham-by-loai/'+idloai).then(function(response){
        $scope.sanphamList=response.data;
        $scope.nameloai=localStorage.getItem('nameloai');
        $scope.colum=localStorage.getItem('colum');
        // console.log(response);
    }).catch(angular.noop);
});


app.controller('RegisterControllerNG',function($scope,$http,API_URL){
    $scope.register=function(){
        $http({
            method :'POST',
            url : API_URL + 'register-user',
            data:  $.param($scope.taikhoan),
            headers: {'Content-Type': 'application/x-www-form-urlencoded'}
        })
        .then(function (){
            console.log('đăng ký thành công');
        },function(error){
            console.log(error);
        });
    }
});
