$( document ).ready(function() {
    

	$('#gallerymanage').click(function(){

		$("#content").load('adminlogin.php');


	});



	$('#newsmanage').click(function(){

		$("#content").load('inc/newsmanage.php');

	});



});