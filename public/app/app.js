var app = angular.module('bedshop',[]).constant('API_URL',UrlAngular);

app.controller('SanPhamControllerNG',function($scope,$http,API_URL){
    $http.get(API_URL+'list-sanpham').then(function(response){
        $scope.sanphamListnew=response.data.sanphamListnew;
        $scope.sanphamListsale=response.data.sanphamListsale;
        // console.log(response.data.sanphamListnew);
    }).catch(angular.noop);

    $scope.detail=function(idsp,idloai){
        localStorage.setItem('idsp', idsp);
        localStorage.setItem('idloai', idloai);
    }
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
        $scope.sanphamList=response.data.sanphamList;
        $scope.nameloai=localStorage.getItem('nameloai');
        $scope.colum=localStorage.getItem('colum');
        console.log(response.data);
    }).catch(angular.noop);
});

app.controller('DetailSanPhamControllerNG',function($scope,$http,API_URL){
    var idsp=localStorage.getItem('idsp');
    $http.get(API_URL+'detail-sanpham/'+idsp).then(function(response){
        $scope.Detailsanpham=response.data.sanphamDetail;
        $scope.bl_nx_yt=response.data.bl_nx_yt;
        // console.log(response.data.bl_nx_yt);
    });
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

app.controller('LoginControllerNG',function($scope,$http,API_URL){
    $scope.login=function(){
        $http({
            method:'POST',
            url:API_URL+'login-user',
            data:  $.param($scope.taikhoanlogin),
            headers: {'Content-Type': 'application/x-www-form-urlencoded'}
        })
        .then(function (){
            console.log('đăng nhập thành công');
        },function(error){
            console.log(error);
        });;
    }
});