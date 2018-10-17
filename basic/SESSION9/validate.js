$( "#my_form" ).submit(function() {
  // alert( "form submited" );
  validate();
  
});

function validate() {
	// body...
   
	var ten = $('#ten').val();
    var so_ng_lon = $('#so_ng').val();
    var so_tre_em = $('#so_tre_em').val();
    var ngay_den = $('#ng_den').val();
    var ngay_di = $('#ng_di').val();
    var ngay_den_var = new Date(ngay_den);
    var ngay_di_var = new Date(ngay_di);
    var ngay_ht = new Date();
 
    if (ten=="") $('#name_err').html("tên không thể để trống");
    else {
        $('#name_err').html(""); 
        $('#ten_res').val(ten);
    }

    if (so_ng_lon=="") $('#so_ng_lon_err').html("sô người Lớn không thể để trống");
    else 
        {
            $('#so_ng_lon_err').html("");
            $('#so_ng_res').val(so_ng_lon);
        }

    if (so_tre_em=="") $('#so_tre_em_err').html("số trẻ em không thể để trống");
    else {

         if(so_tre_em > so_ng_lon) $('#so_tre_em_err').html("số trẻ em không được nhiều hơn số người lớn"); //else alert("true");
        
        else{
             $('#so_tre_em_err').html("");
             $('#so_tre_em_res').val(so_tre_em);
        }
    }

    if (ngay_den=="") $('#ngay_den_err').html("ngày đến không thể để trống");
    else {
            if(ngay_den_var.getDate() >= ngay_ht.getDate()) 
                {
                    // alert("true");
                    $('#ngay_den_err').html("");
                    $('#ngay_den_res').val(ngay_den);

                }
                else $('#ngay_den_err').html("ngày đến phải lớn hơn ngày hiện tại");
        // alert(ngay_den);
        //alert(d.getDate());
        // $('#ngay_den_err').html("");
    }

    if (ngay_di=="") $('#ngay_di_err').html("ngày đi không thể để trống");
    else {
        if(ngay_di_var.getDate() >= ngay_den_var.getDate() ) 
            {
                // alert("true");
                $('#ngay_di_err').html("");
                $('#ngay_di_res').val(ngay_di);

            }
        else $('#ngay_di_err').html("ngày đi phải lớn hơn hoặc bằng ngày đến");
    }
	// else $('#ngay_di_err').html("");
    //alert(so_ng);
}