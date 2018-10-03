function sumNuber(a,b) {
	// body...
	return parseInt(a) + parseInt(b);
}

$('#number1').keyup(function () {
	// body...
	var a=$('#number1').val();
	var b=$('#number2').val();
	$('#result').html(sumNuber(a,b));
});

$('#number2').keyup(function () {
	// body...
	var a=$('#number1').val();
	var b=$('#number2').val();
	$('#result').html(sumNuber(a,b));
});