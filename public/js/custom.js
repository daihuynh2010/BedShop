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
