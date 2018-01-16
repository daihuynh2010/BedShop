var app = angular.module('bedshop',[]).constant('API_URL',UrlAngular+"angular/");
// console.log("angularjs");
app.controller('SanPhamControllerNG',function($scope,$http,API_URL){
    // console.log('scas');
    $http.get(API_URL+'list-sanpham').then(function(response){
        $scope.sanphamListnew=response.data.sanphamListnew;
        $scope.sanphamListsale=response.data.sanphamListsale;
        $scope.hinhspList=response.data.hinhspList;
        $scope.sanphamListsearch=response.data.sanphamListsearch;
        $scope.URL_image=UrlAngular+"images/products/";
    }).catch(angular.noop);
    $scope.detail=function(idsp,idloai){
        localStorage.setItem('idsp', idsp);
        localStorage.setItem('idloai', idloai);
        window.location.href=UrlAngular+"guest/detail/"+idsp;
    }
    $scope.detailsp_user=function(idsp,idloai){
        localStorage.setItem('idsp', idsp);
        localStorage.setItem('idloai', idloai);
        window.location.href=UrlAngular+"user/detail/"+idsp;
    }
});

app.controller('LoaiSanPhamNG',function($scope,$http,API_URL){
        $http.get(API_URL+'list-loai_sp/').then(function(response){
            if(response.data)
                $scope.loaiSPList=response.data;
            else
                $scope.loaiSPList="";
            // console.log($scope.loaiSPList);
        }).catch(angular.noop)
    
    $scope.timkiem=function(idloai,colum,name){
        localStorage.setItem('idloai', idloai);
        localStorage.setItem('nameloai', name);
        localStorage.setItem('colum', colum);
        window.location.href=UrlAngular+"guest/search/"+idloai;
    }

    $scope.timkiemsp_user=function(idloai,colum,name){
        localStorage.setItem('idloai', idloai);
        localStorage.setItem('nameloai', name);
        localStorage.setItem('colum', colum);
        window.location.href=UrlAngular+"user/search/"+idloai;
    }
});

app.controller('SanPhamTimKiemByLoaiControllerNG',function($scope,$http,API_URL){
    var idloai=localStorage.getItem('idloai');
    // console.log(idloai);
    $http.get(API_URL+'list-sanpham-by-loai/'+idloai).then(function(response){
        $scope.sanphamList=response.data.sanphamList;
        $scope.nameloai=localStorage.getItem('nameloai');
        $scope.colum=localStorage.getItem('colum');
        $scope.hinhspList=response.data.hinhspList;
        $scope.URL_image=UrlAngular+"images/products/";
        // console.log(response.data.hinhspList);
    }).catch(angular.noop);

    $scope.detail=function(idsp,idloai){
        localStorage.setItem('idsp', idsp);
        localStorage.setItem('idloai', idloai);
        window.location.href=UrlAngular+"guest/detail/"+idsp;
    }

    $scope.detailsp_user=function(idsp,idloai){
        localStorage.setItem('idsp', idsp);
        localStorage.setItem('idloai', idloai);
        window.location.href=UrlAngular+"user/detail/"+idsp;
    }
});

app.controller('DetailSanPhamControllerNG',function($scope,$http,API_URL){
    var idsp=localStorage.getItem('idsp');
    var iduser=localStorage.getItem('iduser');
    // console.log(idsp);
    $http.get(API_URL+'detail-sanpham/'+idsp).then(function(response){
        $scope.Detailsanpham=response.data.sanphamDetail;
        $scope.bl_nx_yt=response.data.bl_nx_yt;
        $scope.hinhsp_chinh=response.data.hinhsp_chinh;
        $scope.hinhspList=response.data.hinhspList;
        $scope.hinhspLisp_orther=response.data.hinhspLisp_orther;
        $scope.URL_image=UrlAngular+"images/products/";
        $scope.isthich=0;
        for(var i=0;i<$scope.bl_nx_yt.length;i++){
            if($scope.bl_nx_yt[i].pivot.id_user==iduser)
                $scope.isthich=$scope.bl_nx_yt[i].pivot.is_thich;
        }
    });
    $scope.iduser=localStorage.getItem('iduser');
    $scope.soluong=1;
    $scope.dathang=function(iduser,idsp,gia){
        $http({
            method :'POST',
            url : API_URL + 'hoa-don',
            data:   $.param({'iduser':iduser,
                     'idsp':idsp,
                     'soluong':$scope.soluong,
                     'gia':gia
            }),
            headers: {'Content-Type': 'application/x-www-form-urlencoded'}
        })
        .then(function (response){
            // console.log(response.data);
        },function(error){
            console.log(error);
        });
    }

    $scope.addbinhluansp=function(idsp,iduser){
        $http({
            method :'POST',
            url : API_URL + 'binh-luan',
            data:   $.param({'idsp':idsp,
                    'iduser':iduser,
                    'binhluan':$scope.binhluanadd
            }),
            headers: {'Content-Type': 'application/x-www-form-urlencoded'}
        })
        .then(function (response){
            // console.log(response.data);
            location.reload();
        },function(error){
            console.log(error);
        });
    }

    $scope.danhgiasp="5";
    $scope.danhgia=function(idsp,iduser){
        $http({
            method :'POST',
            url : API_URL + 'danh-gia',
            data:   $.param({'idsp':idsp,
                    'iduser':iduser,
                    'danhgia':$scope.danhgiasp
            }),
            headers: {'Content-Type': 'application/x-www-form-urlencoded'}
        })
        .then(function (response){
            alert("Đánh giá thành công")
            location.reload();
        },function(error){
            console.log(error);
        });
    }

    $scope.thich=function(idsp,iduser,x){
        $http({
            method :'POST',
            url : API_URL + 'thichsp',
            data:   $.param({'idsp':idsp,
                    'iduser':iduser,
                    'thich':x
            }),
            headers: {'Content-Type': 'application/x-www-form-urlencoded'}
        })
        .then(function (response){
            console.log(response.data);
            // location.reload();
        },function(error){
            console.log(error);
        });
    }
});


app.controller('RegisterControllerNG',function($scope,$http,API_URL){
    $scope.register=function(){
        $http({
            method :'POST',
            url : API_URL + 'register-user',
            data:  $.param($scope.taikhoan),
            headers: {'Content-Type': 'application/x-www-form-urlencoded'}
        })
        .then(function (response){
            if(response.data==1){
                window.location.href=UrlAngular+"login";
            }
            else
                alert("Email này đã được đăng ký");
            // console.log('đăng ký thành công');
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
        .then(function (response){
            if(response.data.user){
                if(response.data.user.chuc_vu==1){
                    window.location.href=UrlAngular+"user";
                    localStorage.setItem('iduser',response.data.user.id);
                }
                if(response.data.user.chuc_vu==2)
                    window.location.href=UrlAngular+"manage";
                if(response.data.user.chuc_vu==3)
                    window.location.href=UrlAngular+"admin";
            }
            else
                alert("sai tài khoản hoặc mật khẩu");
            

            // console.log(response.data.user);
        },function(error){
            console.log(error);
        });
    }
});

app.controller('HoaDonControllerNG',function($scope,$http,API_URL){
    var iduser=localStorage.getItem('iduser');
    // console.log(iduser);
    $http.get(API_URL+'hoa-don/'+iduser).then(function(response){
        $scope.donhangList=response.data.donhang;
        $scope.hoadon=response.data.hoadon;
        $scope.detail_hoadonList=response.data.detail_hoadon;
        $scope.user=response.data.user;
        $scope.email=response.data.user.email ;
        $scope.hoten=response.data.user.name ;
        $scope.dd_giaohang=response.data.user.dd_giaohang_md;
        $scope.sdt=response.data.user.sdt;
        $scope.cach_thanhtoan=response.data.hoadon.cach_thanh_toan;
        $scope.hinhspList=response.data.hinhspList;
        $scope.URL_image=UrlAngular+"images/products/";
    }).catch(angular.noop);
    $scope.iduser=localStorage.getItem('iduser');
    $scope.thanhtoan=function(id_hoadon){
        $http({
            method:'POST',
            url:API_URL+'thanh-toan',
            data:  $.param({
                'id_hoadon':id_hoadon,
                'cach_thanhtoan': $scope.cach_thanhtoan,
                'dd_giaohang':$scope.dd_giaohang,
                'sdt':$scope.sdt
                }),
            headers: {'Content-Type': 'application/x-www-form-urlencoded'}
        })
        .then(function (response){
            // console.log(response.data);
            alert('Đặt hàng thành công');
        },function(error){
            console.log(error);
        });
    }
    $scope.detail=function(idsp,idloai){
        localStorage.setItem('idsp', idsp);
        localStorage.setItem('idloai', idloai);
    }
    $scope.removeSP=function(idsp,iduser){
        $http({
            method:'POST',
            url:API_URL+'remove-hoadon',
            data:  $.param({
                'iduser':iduser,
                'idsp': idsp
                }),
            headers: {'Content-Type': 'application/x-www-form-urlencoded'}
        })
        .then(function (response){
            // console.log(response.data);
            location.reload();
        },function(error){
            console.log(error);
        });
    }
});

app.controller('UserController',function($scope,$http,API_URL){
    var iduser=localStorage.getItem('iduser');
    // console.log(iduser);
    $http.get(API_URL+'info-user/'+iduser).then(function(response){
        $scope.user=response.data.user;
        $scope.bl_nx_ytList=response.data.bl_nx_yt;
        $scope.name=response.data.user.name;
        $scope.email=response.data.user.email;
        $scope.dd_giaohang=response.data.user.dd_giaohang_md;
        $scope.sdt=response.data.user.sdt;
    }).catch(angular.noop);

    $scope.xemsp=function(idsp){
        localStorage.setItem('idsp', idsp);
        console.log(localStorage.getItem('idsp'));
    }

    $scope.update_info=function(iduser){
        $http({
            method:'POST',
            url:API_URL+'update-info/'+iduser,
            data:  $.param({
                'iduser':iduser,
                'name': $scope.name,
                'email':$scope.email,
                'dd_giaohang':$scope.dd_giaohang,
                'sdt':$scope.sdt
                }),
            headers: {'Content-Type': 'application/x-www-form-urlencoded'}
        })
        .then(function (response){
            // window.location.href=UrlAngular+"user/info";
            alert('Thay đổi thành công');
        },function(error){
            console.log(error);
        });
    }

    $scope.change_pass=function(iduser){
        $http({
            method:'POST',
            url:API_URL+'change-pass/'+iduser,
            data:  $.param({
                'iduser':iduser,
                'pws_old': $scope.pws_old,
                'pws_new':$scope.pws_new,
                'confim_pws':$scope.confim_pws
                }),
            headers: {'Content-Type': 'application/x-www-form-urlencoded'}
        })
        .then(function (response){
            // console.log(response.data);
            if(response.data==0)
            {
                alert("Mật khẩu cũ không chính xác");
            }
            else
            {
                if(response.data==1)
                    alert("Mật lại khẩu mới phải nhập chính xác");
                else{
                    alert('Thay đổi thành công');
                    window.location.href=UrlAngular+"user/info";
                }
            }
        },function(error){
            console.log(error);
        });
    }
});

app.controller('ForgotPasswordControllerNG',function($scope,$http,API_URL){
    $scope.sendmail=function(){
        $http({
            method:'POST',
            url:API_URL+'password/email',
            data:  $.param({
                'email':$scope.email_forgot
                }),
            headers: {'Content-Type': 'application/x-www-form-urlencoded'}
        })
        .then(function (response){
            localStorage.setItem('email', $scope.email_forgot);
            alert('Vui lòng vào email để đổi mật khẩu');
            window.location.href=UrlAngular+"guest/";
        },function(error){
            console.log(error);
        });
    }
    $scope.emailsendlink=localStorage.getItem('email');
    $scope.reset=function(){
        $http({
            method:'POST',
            url:API_URL+'password/reset',
            data:  $.param({
                'email':$scope.emailsendlink,
                'password':$scope.pws_reset,
                'password_confirmation':$scope.confim_pws_reset
                }),
            headers: {'Content-Type': 'application/x-www-form-urlencoded'}
        })
        .then(function (response){
            if(response.data==0)
                alert('Nhập lại mật khẩu phải chính xác');
            else {
                if(response.data==2)
                    alert('Email này chưa được đăng ký');
                else{
                    alert('Reset mật khẩu thành công');
                    window.location.href=UrlAngular+"guest/login";
                }
            }
        },function(error){
            console.log(error);
        });
    }
});


var appadmin = angular.module('bedshop_admin',['ui.bootstrap']).constant('API_URL',UrlAngular+"angular/");
appadmin.controller('AdminControllerNG',function($scope,$http,API_URL,$uibModal){
    // $http.get(API_URL+'user-list').then(function(response){
    //     $scope.userList=response.data.user;
    // }).catch(angular.noop);

    $scope.add=function(){
            $http({
                method :'POST',
                url : API_URL + 'register-user',
                data:  $.param({
                    'email':$scope.add.email,
                    'pws':$scope.add.pws,
                    'name':$scope.add.hoten,
                    'sdt':$scope.add.sdt,
                    'chuc_vu':$scope.add.chuc_vu,
                    'tich_diem':parseInt($scope.add.tich_diem),
                    'dd_giaohang_md':$scope.add.dd_giaohang
                }),
                headers: {'Content-Type': 'application/x-www-form-urlencoded'}
            })
            .then(function (response){
                // console.log(response.data);
                alert('Thêm thành công');
                location.reload();;
            },function(error){
                console.log(error);
            });
    }
    $scope.chucvu_add=function(chuc_vu){$scope.add.chuc_vu=chuc_vu;}

    $scope.edit=function(id){
        var modalInstance = $uibModal.open({
            templateUrl: 'EditUser.html',
            size :'lg',
            keyboard:true ,
            controller: function($scope, $uibModalInstance) {
                $http.get(API_URL+'info-user/'+id).then(function(response){
                    $scope.user=response.data.user;
                }).catch(angular.noop);
                $scope.ok = function() {
                    $http({
                        method:'POST',
                        url:API_URL+'update-info/'+id,
                        data:  $.param({
                            'iduser':id,
                            'name': $scope.user.name,
                            'email':$scope.user.email,
                            'chuc_vu':$scope.chuc_vu,
                            'tich_diem':parseInt($scope.user.tich_diem),
                            'dd_giaohang':$scope.user.dd_giaohang_md,
                            'sdt':$scope.user.sdt
                            }),
                        headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                    })
                    .then(function (response){
                        // console.log(response.data);
                        alert('Thay đổi thành công');
                        location.reload();
                    },function(error){
                        console.log(error);
                    });
                };
                $scope.cancel = function() {
                    $uibModalInstance.dismiss('cancel');
                };
                $scope.chucvu=function(chuc_vu){$scope.chuc_vu=chuc_vu;}
            }
        });
    };

    $scope.delete=function(id){
        var modalInstance = $uibModal.open({
            templateUrl: 'DeleteUser.html',
            size :'lg',
            keyboard:true ,
            controller: function($scope, $uibModalInstance) {
                $http.get(API_URL+'info-user/'+id).then(function(response){
                    $scope.userdelete=response.data.user;
                }).catch(angular.noop);
                $scope.ok = function() {
                   $http.get(API_URL+'delete-user/'+id).then(function(response){
                    location.reload();
                }).catch(angular.noop);
                };
                $scope.cancel = function() {
                    $uibModalInstance.dismiss('cancel');
                };
            }
        });
    }
});

appadmin.controller('ManagerControllerNG',function($scope,$http,API_URL,$uibModal){
    
    $scope.xacnhan=function(id){
        var modalInstance = $uibModal.open({
            templateUrl: 'ConfimOrder.html',
            size :'lg',
            keyboard:true ,
            controller: function($scope, $uibModalInstance) {
                $http.get(API_URL+'hoadon-get/'+id).then(function(response){
                    // console.log(response.data);
                    $scope.hoadon=response.data.hoadon;
                }).catch(angular.noop);
                $scope.ok = function() {
                   $http.get(API_URL+'hoadon-xacnhan/'+id).then(function(){
                    window.location.href=UrlAngular+"manage/";
                }).catch(angular.noop);
                };
                $scope.cancel = function() {
                    $uibModalInstance.dismiss('cancel');
                };
            }
        });
    }

    $scope.xoa=function(id){
        var modalInstance = $uibModal.open({
            templateUrl: 'DeleteOrder.html',
            size :'lg',
            keyboard:true ,
            controller: function($scope, $uibModalInstance) {
                $http.get(API_URL+'hoadon-get/'+id).then(function(response){
                    // console.log(response.data);
                    $scope.hoadon=response.data.hoadon;
                }).catch(angular.noop);
                $scope.ok = function() {
                   $http.get(API_URL+'hoadon-xoa/'+id).then(function(){
                    window.location.href=UrlAngular+"manage/";
                }).catch(angular.noop);
                };
                $scope.cancel = function() {
                    $uibModalInstance.dismiss('cancel');
                };
            }
        });
    }
});

appadmin.controller('ThanhToanDonHangControllerNG',function($scope,$http,API_URL,$uibModal){

    $scope.thanhtoan=function(id){
        var modalInstance = $uibModal.open({
            templateUrl: 'ThanhToan.html',
            size :'lg',
            keyboard:true ,
            controller: function($scope, $uibModalInstance) {
                $http.get(API_URL+'hoadon-get/'+id).then(function(response){
                    // console.log(response.data);
                    $scope.hoadon=response.data.hoadon;
                }).catch(angular.noop);
                $scope.ok = function() {
                   $http.get(API_URL+'hoadon-thanhtoan/'+id).then(function(){
                    window.location.href=UrlAngular+"manage/pay-order";
                }).catch(angular.noop);
                };
                $scope.cancel = function() {
                    $uibModalInstance.dismiss('cancel');
                };
            }
        });
    }
});

appadmin.controller('ThongKeDonHangControllerNG',function($scope,$http,API_URL,$uibModal){
    // $http.get(API_URL+'hoadon-list-all').then(function(response){
    //     // console.log(response.data.hoadonList);
    //     $scope.hoadonList=response.data.hoadonList;
    // }).catch(angular.noop);
});

appadmin.controller('SanPhamManageControllerNG',function($scope,$http,API_URL,$uibModal){

    $http.get(API_URL+'list-sanpham').then(function(response){
        // console.log(response.data.sanpham_loai);
        $scope.sanphamList=response.data.sanphamList;
        $scope.loaiSPList=response.data.loaiSPList;
        $scope.nsxList=response.data.nsxList;
    }).catch(angular.noop);

    $scope.deleteSP=function(id){
        var modalInstance = $uibModal.open({
            templateUrl: 'DeleteProduct.html',
            size :'lg',
            keyboard:true ,
            controller: function($scope, $uibModalInstance) {
                $http.get(API_URL+'detail-sanpham/'+id).then(function(response){
                    // console.log(response.data);
                    $scope.sanphamDetail=response.data.sanphamDetail;
                }).catch(angular.noop);
                $scope.ok = function() {
                    $http.get(API_URL+'delete-sanpham/'+id).then(function(){
                    window.location.href=UrlAngular+"manage/product";
                }).catch(angular.noop);
                };
                $scope.cancel = function() {
                    $uibModalInstance.dismiss('cancel');
                };
            }
        });
    }

    $scope.exportList=function(){
        $http({
            method :'POST',
            url : API_URL + 'export-sanpham',
            headers: {'Content-Type': 'application/x-www-form-urlencoded'}
        })
        .then(function (response){
            // if(response.data==1){
            //     window.location.href=UrlAngular+"login";
            // }
            // else
            //     alert("Email này đã được đăng ký");
            console.log(response.data);
        },function(error){
            console.log(error);
        });
    }
    $scope.files_orther=[];
    var x=0;
    $scope.uploadedFile = function(files) {
        var imagefile = document.querySelector('#manager_add_product_image_orther');
        var output = document.getElementById("manager_product_image_orther");
        if (imagefile.files && imagefile.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                // $('#product_img').attr('src', e.target.result);
                var div = document.createElement("div");
                    div.innerHTML = "<img class='thumbnail' id='product_img_orther' style='width:100px;height:auto' src='" + e.target.result + "'" +
                    "title='" + e.target.name + "'/>";
                    output.insertBefore(div,null);
            };
            reader.readAsDataURL(files[0]);
            $scope.files_orther[x] = files[0];
            x++;
        }             
    };

    $scope.uploadedFile_chinh = function(files){
        var imagefile = document.querySelector('#manager_add_product_image_chinh');
        if (imagefile.files && imagefile.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#product_img_chinh').attr('src', e.target.result);
            };
            reader.readAsDataURL(files[0]);
            $scope.files_chinh = files[0];
        }
    };

    $scope.addproduct=function(){
        $http({
            method :'POST',
            url : API_URL + 'add-sanpham', 
            transformRequest: function () {
                var formData = new FormData();
                for (var i = 0; i < $scope.files_orther.length; i++) {
                    formData.append("image_orther" + i, $scope.files_orther[i]);
                }
                formData.append("length_image_orther", $scope.files_orther.length);
                formData.append("image_chinh", $scope.files_chinh);
                formData.append ("sp_ten",$scope.product.tensp);
                formData.append("sp_idloai", $scope.product.loaisp);
                formData.append("sp_gia", $scope.product.gia);
                formData.append("sp_idnsx", $scope.product.nsx);
                formData.append("sp_hsd", $scope.product.hsd);
                formData.append("sp_mota", $scope.product.mota);
                formData.append("sp_gioithieu", $scope.product.gioithieu);
                formData.append("sp_soluong", $scope.product.soluong);
                formData.append("sp_kichthuoc", $scope.product.kichthuoc);
                formData.append("sp_trongluong", $scope.product.trongluong);
                formData.append("sp_danhgia", $scope.product.danhgia);
                return formData;  
            },  
            headers: {'Content-Type': undefined}
        })
        .then(function (response){
            // console.log(response.data);
            alert('Thêm sản phẩm thành công');
            window.location.href=UrlAngular+"manage/product";
        },function(error){
            console.log(error);
        });
    };

    $scope.editproduct=function(id){
        localStorage.setItem('idsp_edit',id);
        window.location.href=UrlAngular+"manage/edit-product";
    }

});

appadmin.controller('EditSanPhamControllerNG',function($scope,$http,API_URL,$uibModal){
    var idsp=localStorage.getItem('idsp_edit');
    $http.get(API_URL+'detail-sanpham/'+idsp).then(function(response){
        // console.log(response.data.hinhsp);
        $scope.product=response.data.sanphamDetail;
        $scope.loaiSPList=response.data.loaiSPList;
        $scope.nsxList=response.data.nsxList;
        $scope.loaisp={value:$scope.loaiSPList[$scope.product.sp_idloai-1].id_loaisp};
        $scope.nsx={value:$scope.nsxList[$scope.product.sp_idnsx-1].id_nsx};
        // console.log(response.data.hinhsp_chinh);
        if(response.data.hinhsp_chinh)
            $scope.hinhsp=UrlAngular+"images/products/small/"+response.data.hinhsp_chinh.vitri_hinh;
        else
            $scope.hinhsp="";
        $scope.hinhspLisp_orther=response.data.hinhspLisp_orther;
        // console.log($scope.hinhspLisp_orther);
        $scope.URL_image_orther=UrlAngular+"images/products/thum/";
    }).catch(angular.noop);

    $scope.files_orther=[];
    var x=0;
    $scope.uploadedFile = function(files) {
        var imagefile = document.querySelector('#manager_add_product_image_orther');
        var output = document.getElementById("manager_product_image_orther");
        if (imagefile.files && imagefile.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                // $('#product_img').attr('src', e.target.result);
                var div = document.createElement("div");
                    div.innerHTML = "<img class='thumbnail' id='product_img_orther' style='width:100px;height:auto' src='" + e.target.result + "'" +
                    "title='" + e.target.name + "'/>";
                    output.insertBefore(div,null);
            };
            reader.readAsDataURL(files[0]);
            $scope.files_orther[x] = files[0];
            x++;
        }             
    };

    $scope.uploadedFile_chinh = function(files){
        var imagefile = document.querySelector('#manager_add_product_image_chinh');
        if (imagefile.files && imagefile.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#product_img_chinh').attr('src', e.target.result);
            };
            reader.readAsDataURL(files[0]);
            $scope.files_chinh = files[0];
        }
    };

    $scope.editproduct=function(id){
        $http({
            method :'POST',
            url : API_URL + 'edit-sanpham/'+id, 
            transformRequest: function (data) {
                var formData = new FormData();
                for (var i = 0; i < $scope.files_orther.length; i++) {
                    formData.append("image_orther" + i, $scope.files_orther[i]);
                }
                formData.append("length_image_orther", $scope.files_orther.length);
                formData.append("image_chinh", $scope.files_chinh);
                formData.append ("sp_ten",$scope.product.sp_ten);
                formData.append("sp_idloai", $scope.loaisp.value);
                formData.append("sp_gia", $scope.product.sp_gia);
                formData.append("sp_idnsx", $scope.nsx.value);
                formData.append("sp_hsd", $scope.product.sp_hsd);
                formData.append("sp_mota", $scope.product.sp_mota);
                formData.append("sp_gioithieu", $scope.product.sp_gioithieu);
                formData.append("sp_soluong", $scope.product.sp_soluong);
                formData.append("sp_kichthuoc", $scope.product.sp_kichthuoc);
                formData.append("sp_trongluong", $scope.product.sp_trongluong);
                formData.append("sp_danhgia", $scope.product.sp_danhgia);
                return formData;  
            },  
            headers: {'Content-Type': undefined}
        })
        .then(function (response){
            // console.log(response.data);
            alert('Chỉnh sửa sản phẩm thành công');
            window.location.href=UrlAngular+"manage/product";
        },function(error){
            console.log(error);
        });
    }
});
