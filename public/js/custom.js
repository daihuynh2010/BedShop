/* Fire Base */
// Initialize Firebase
  var config = {
    apiKey: "AIzaSyAecZOJBM_zk1hz_6zriomMogIntNizFio",
    authDomain: "bebshop-17017.firebaseapp.com",
    databaseURL: "https://bebshop-17017.firebaseio.com",
    projectId: "bebshop-17017",
    storageBucket: "bebshop-17017.appspot.com",
    messagingSenderId: "196200717801"
  };
  firebase.initializeApp(config);

/* */
    var firestore = firebase.firestore();
    const docRef=firestore.doc("samples/login");
    $('#guest_btnlogin').on('click',function(){
        var uname=$('#guest_txtemail').val();
        var pws=$('#guest_txtpas').val();
        docRef.set({
            username:uname,
        })
    });
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
