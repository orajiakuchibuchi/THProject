
// function toastSuccess(msg){
    
//     toastr.options = {
//     "closeButton": true,
//     "debug": false,
//     "newestOnTop": false,
//     "progressBar": false,
//     "positionClass": "toast-top-full-width",
//     "preventDuplicates": false,
//     "onclick": null,
//     "showDuration": "300",
//     "hideDuration": "1000",
//     "timeOut": "5000",
//     "extendedTimeOut": "1000",
//     "showEasing": "swing",
//     "hideEasing": "linear",
//     "showMethod": "fadeIn",
//     "hideMethod": "fadeOut"
//     };
//     toastr.success(msg);

// }


// function toastError(msg){
    
//     toastr.options = {
//     "closeButton": true,
//     "debug": false,
//     "newestOnTop": false,
//     "progressBar": false,
//     "positionClass": "toast-top-full-width",
//     "preventDuplicates": false,
//     "onclick": null,
//     "showDuration": "300",
//     "hideDuration": "1000",
//     "timeOut": "5000",
//     "extendedTimeOut": "1000",
//     "showEasing": "swing",
//     "hideEasing": "linear",
//     "showMethod": "fadeIn",
//     "hideMethod": "fadeOut"
//     }
//     toastr.error(msg);    
    
// }


function alertSuccess(msg,title="Success",url=""){
    
    $.confirm({
        title: title,
        content: msg,
        type: 'green',
        autoClose:"OK|5000",
        buttons: {
            OK: function () {
                if(url !== ''){
                    window.location.href = url;    
                }
            }
        }
    });       
}



function alertSuccessmsg(msg,title="Success",url=""){
    
    $.confirm({
        title: title,
        content: msg,
        type: 'green',
        autoClose:"OK",
        buttons: {
            OK: function () {
                if(url !== ''){
                    window.location.href = url;    
                }
            }
        }
    });       
}




function alertError(msg,title="Error!"){
    
    $.confirm({
        title: title,
        content: msg,
        type: 'red',
        // autoClose:"OK|5000",
        buttons: {
            OK: function () {
            }
        }
    });   
}