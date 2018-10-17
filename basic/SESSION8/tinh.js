function sum() {
			// body...
				var a = document.getElementById('so_a').value;
				var b = document.getElementById('so_b').value;
				var c = parseInt(a)+parseInt(b);
				// document.getElementById("kq2").innerHTML = "asass112122";
				document.getElementById("kq2").value = c;
				document.getElementById("kq").innerHTML = c;
		};
function tru() {
			// body...
				var a = document.getElementById('so_a').value;
				var b = document.getElementById('so_b').value;
				var c = parseInt(a)-parseInt(b);
				// document.write(c);
				document.getElementById("kq").innerHTML = c;
		};
function nhan() {
			// body...
				var a = document.getElementById('so_a').value;
				var b = document.getElementById('so_b').value;
				var c = parseInt(a)*parseInt(b);
				// document.write(c);
				document.getElementById("kq").innerHTML = c;
		};
function chia() {
			// body...
				var a = document.getElementById('so_a').value;
				var b = document.getElementById('so_b').value;
				if( parseInt(b) != 0){
				var c = parseInt(a)/parseInt(b);
				// document.write(c);
				document.getElementById("kq").innerHTML = c;}
				else
				document.getElementById("kq").innerHTML = "element B = 0 can not chia";
		}