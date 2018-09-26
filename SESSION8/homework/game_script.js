
var pic = [0,5,6,4,8,9,7,1,3,2,10];



var name1 = '', name2 = '';
var id1='', id2='';
function select(id) {

	var x = id.getAttribute("id"); // lay thuoc tinh id gan vao x
	var e = document.getElementById(x);
	
	var c = window.getComputedStyle(e).backgroundColor; 

	if (c === "rgb(255, 255, 255)") 
	{
		if(x>=10) 
			{ 
				if(x==10) document.getElementById(x).style.background = 'url(img//'+pic[x]+'.png)';
				else document.getElementById(x).style.background = 'url(img//'+pic[x-10]+'.png)';
			}
    	else
    		{
    		document.getElementById(x).style.background = 'url(img//'+pic[x]+'.png)';
   			}
	}

	if(name1 == '') 
		{
			name1 = id.getAttribute("name");// lay name tu id 
			id1= id.getAttribute("id");
		}
	else 
		{
			name2 = id.getAttribute("name");
			id2 = id.getAttribute("id");
		}
	// 
	if(name1 !='' && name2 != '')
	{
		if (name1 == name2 ) 
		{
			//alert("true");
			name1 ='';
			name2 ='';
			
			document.getElementById(id1).onclick = "off"

			document.getElementById(id2).onclick = "off";
		}
		else {
			//alert("false");
			name1 ='';
			name2 ='';
			
			setTimeout(function () {
				// body...
				document.getElementById(id1).style.background = "#ffffff";
				document.getElementById(id2).style.background = "#ffffff";
			}, 600);
			
		}
	}
};


