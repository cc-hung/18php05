
var product =[
	['product1', 'name1', 'price1','soluon'],
	['product2', 'name2', 'price2'],
	['product3', 'name3', 'price3'],
	['product4', 'name4', 'price4'],
	['product5', 'name5', 'price5'],
	['product6', 'name6', 'price6']

] ;

$('.nut').click(function(){
	var b =  $(this).attr('id');
// var a = document.getElementsByAttribute("id",this);
	 //var abc = $(this).parentsUntil(".head-div").attr("id");
	 console.log(b);

	 for(var i = 0; i < product.length; i++ ) {
	console.log(product[i]);
	for(var j = 0; j < product[i].length; j++ ) {
		document.write(product[i][j]);
		
	}
	document.write("<br>");
}
});