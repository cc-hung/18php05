var res = '';
function add_val(a) {
			// body...
				//var a = document.getElementById('pt').value;
								
				res = res + a;
				document.getElementById("pt").value = res;	
				console.log(res);			
		};
function cal() {
	// body...
	var se = eval(res);
	document.getElementById("pt").value = se;	
}
function back() {
	// body...
	var lengresul  = res.length;
	var newresul = res.substring(0,lengresul-1);
	document.getElementById("pt").value = newresul;	
	

}