function showToastr(toast,title,text)
{
	var opts = {
				  "closeButton": true,
				  "positionClass": "toast-bottom-right",
				  "onclick": null,
				  "showDuration": "1000",
				  "hideDuration": "1000",
				  "timeOut": "10000",
				  "extendedTimeOut": "1000",
				  "showEasing": "swing",
				  "hideEasing": "linear",
				  "showMethod": "fadeIn",
				  "hideMethod": "fadeOut"
				};
	
	if (toast == 'info')
	{
		toastr.info(text, title, opts);
	}
	else if(toast == 'error')
	{
		toastr.error(text, title, opts);
	}
	else if(toast == 'warning')
	{
		toastr.warning(text, title, opts);
	}
	else if(toast == 'success')
	{
		toastr.success(text, title, opts);
	};
	
}
	
	
	
	
