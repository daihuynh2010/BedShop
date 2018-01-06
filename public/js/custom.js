/* master */
$NAVBAR_MENU = $('.navbar-menu');

$NAVBAR_MENU.find('a').on('click', function (ev) {
 	$('li.active').removeClass('active');
 	$(this).parent('li').addClass('active');
});

$('.search').on('keyup',function(){
    $('.list-search').css("display", "block");
    if($('.search').val()==""){
        $('.list-search').css("display", "none");
    }
})

window.onclick = function(event) {
    $('.list-search').css("display", "none");
}

/* menu account*/
/*$account_menu_list = $('.account_menu_list');

$account_menu_list.find('a').on('click',function (ev){
	$('a').removeClass('account_menu_link_active');
	$('a').addClass('account_menu_link');
	$(this).addClass('account_menu_link_active');
	$(this).removeClass('account_menu_link');
})*/

/* Register */

$('#confim_psw_register').on('keyup', function () {
    if ( $('#psw_register').val() == $('#confim_psw_register').val() )  {
        $("#register_mess").html("Matching").css("color", "green");
    } else{
        $("#register_mess").html("Not Matching").css("color", "red");
    }
});


/*Admin*/
$("#ChooseChucVu_Add").change(function(){
    if($("#ChooseChucVu_Add").val()=='1'){
        $("#ChooseUser_Add").show();
    } else{
        $("#ChooseUser_Add").hide();
    }
});

$("#ChooseChucVu_Edit").change(function(){
    if($("#ChooseChucVu_Edit").val()=='1'){
        $("#ChooseUser_Edit").show();
    } else{
        $("#ChooseUser_Edit").hide();
    }
});

//manage
if(window.File && window.FileList && window.FileReader)
{
    $('#manager_add_product_image').on("change", function(event){
        // var files = event.target.files; //FileList object
        // var output = document.getElementById("manager_product_image");
        // for(var i = 0; i< files.length; i++)
        // {
        //     var file = files[i];
        //     //Only pics
        //     if(!file.type.match('image'))
        //         continue;
        //     var picReader = new FileReader();
        //     picReader.addEventListener("load",function(event){
        //         var picFile = event.target;
        //         var div = document.createElement("div");
        //         div.innerHTML = "<img class='thumbnail' id='product_img' style='width:100px;height:auto' src='" + picFile.result + "'" +
        //         "title='" + picFile.name + "'/>";
        //         output.insertBefore(div,null);
        //     });
        //     //Read the image
        //     picReader.readAsDataURL(file);
        // }
    });
}
else
{
    console.log("Không load được ảnh");
}
/*detail*/
(function($) {
$('#zoom').elevateZoom();})