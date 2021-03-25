
$(document).ready(function(){

	/* mobile nav toggle button code */

	$('#toggler').click(function(){
		  $('.foldable').toggle();
	});

	/* mobile nav toggle button code end */


	/* products page category select code */

	$('#filterbutton').click(function(){

		var category = $('#category').val();
		
		console.log(category);

		switch (category) {

			case 'tshirt':
				
				$('.products').css('display','none');
				$('.tshirt').css('display','inline');

			break;


			case 'denim':

				$('.products').css('display','none');
				$('.denim').css('display','inline');


			break;

		
			case 'hats':

				$('.products').css('display','none');
				$('.hats').css('display','inline');
	
	
			break;	


			case 'shoes':

				$('.products').css('display','none');
				$('.shoes').css('display','inline');


			break;


			case 'watches':

				$('.products').css('display','none');
				$('.watches').css('display','inline');


			break;


			case 'all':

				$('.products').css('display','inline');
				


			break;



			default:

			break;
		}

	});


		/* end of products page category select code */



	/*---------------------- contact form input field validation -------------------------------- */


	$('#sendbutton').click(()=>{

		if($('#fullname').val()==""){

			alert("full name field is empty");

		}

		
		if($('#email').val()==""){

			alert("email field is empty");

		}


		if($('#mobileno').val()==""){

			alert("mobile number field is empty");

		}else{

			var mnumber = $('#mobileno').val();

			if(mnumber.length<11){

				if(mnumber.length>9){
				
					// the number is correct

				}
				else {

					alert("incorrect mobile number");
				}
				
			}

			else{

				alert("incorrect mobile number");

			}

		}

		

		

		
		if($('#messagebox').val()==""){

			alert("message box is empty");

		}
		
		
		
	});

  });