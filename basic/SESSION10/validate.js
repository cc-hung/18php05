$('#dang_ky').click(function function_name(argument) {
	//alert("âs");
	// body...
	// alert("ádas");
	// Store
	//localStorage.setItem("lastname", "Smith");
	// Retrieve
	// alert( localStorage.getItem("lastname"));

	var ho_ten = $('#ten').val();
	var nam_sinh = $('#nam_sinh').val();
	var gioi_tinh = $('#gioi_tinh').val();
	var so_thich = $('#so_thich').val();

	// if(ho_ten=="" || nam_sinh=="" || so_thich=="")
	// {

	if (ho_ten=="") $('#name_err').html("tên không thể để trống");
	 	else 
	 	{
        	$('#name_err').html(""); 
        	// alert(ho_ten);
        	 // localStorage.setItem("hoten", ho_ten);
        	
    	}


    if (nam_sinh=="") $('#year_err').html("nam không thể để trống");
	 	else 
	 	{
        	$('#year_err').html(""); 
        	// localStorage.setItem("namsinh", nam_sinh);
    	}
    	
    localStorage.setItem("gioitinh", gioi_tinh);
   

    if (so_thich=="") $('#hobit_err').html("so thich không thể để trống");
	 	else 
	 	{
        	$('#hobit_err').html(""); 
        	// localStorage.setItem("sothich", so_thich);
    	}
	
	//window.location="nam.html";
	//window.open("nam.html",'_blank'); 
		
	window.location.assign("nam.html");
return false;
	//window.location="https://www.w3schools.com";
	// alert("dfjn");
	//alert("âsas");
	//window.open(url);
		
		// localStorage.removeItem("key");
		// localStorage.removeItem("key");
		// localStorage.removeItem("key");
		// localStorage.removeItem("key");
		
		
		// console.log(localStorage.getItem("hoten"));
		// console.log(localStorage.getItem("namsinh"));
		// console.log(localStorage.getItem("gioitinh"));
		// console.log(localStorage.getItem("sothich"));

	 // 	 localStorage.removeItem("hoten");
		// localStorage.removeItem("namsinh");
		// localStorage.removeItem("gioitinh");
		// localStorage.removeItem("sothich");

});
