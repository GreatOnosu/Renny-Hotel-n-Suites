$(document).ready(function(){
/***********************************************************/
	$(":button").click(function(){
		$cat = $(this).attr('name');
		$price = $(this).attr('id');
		if($price != ""){
			$("#selectRoom").fadeOut(1500, function(){
				$("#room_type").val($cat);
				$("#room_price").val($price);
				$("#priceBox").fadeIn(1500);
			});
		}			
	});
/***********************************************************/
	$("#printButton").click(function(){
		var divToPrint = document.getElementById("printTable");
	   	newWin= window.open("");
	   	newWin.document.write(divToPrint.outerHTML);
	   	newWin.print();
	   	newWin.close();
	   });
/***********************************************************/
    
});