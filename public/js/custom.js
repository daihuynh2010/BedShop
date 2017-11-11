/* master */
$NAVBAR_MENU = $('.navbar-menu');

$NAVBAR_MENU.find('a').on('click', function (ev) {
 	$('li.active').removeClass('active');
 	$(this).parent('li').addClass('active');
});

/* menu account*/
/*$account_menu_list = $('.account_menu_list');

$account_menu_list.find('a').on('click',function (ev){
	$('a').removeClass('account_menu_link_active');
	$('a').addClass('account_menu_link');
	$(this).addClass('account_menu_link_active');
	$(this).removeClass('account_menu_link');
})*/

/* information */


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
    var filesInput = document.getElementById("manager_add_product_image");
    filesInput.addEventListener("change", function(event){
        var files = event.target.files; //FileList object
        var output = document.getElementById("manager_product_image");
        for(var i = 0; i< files.length; i++)
        {
            var file = files[i];
            //Only pics
            if(!file.type.match('image'))
                continue;
            var picReader = new FileReader();
            picReader.addEventListener("load",function(event){
                var picFile = event.target;
                var div = document.createElement("div");
                div.innerHTML = "<img class='thumbnail' style='width:100px;height:auto' src='" + picFile.result + "'" +
                "title='" + picFile.name + "'/>";
                output.insertBefore(div,null);
            });
            //Read the image
            picReader.readAsDataURL(file);
        }
    });
}
else
{
    console.log("Không load được ảnh");
}