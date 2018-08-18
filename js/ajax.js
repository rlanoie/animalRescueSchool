//--AJAX DATA COLLECTION & SETUP------------------------------------------------------
	function doAjax(data, url){
		ajax = ajaxPosting(url, data);
		ajax.fail(function(data){
			var string = JSON.stringify(data);
			console.log(string);});
			return ajax;
		}
	//--AJAX POST------------------------------------------------------
		var currentRequest;
		function ajaxPosting(url, data){
			currentRequest = $.ajax({
				url: url,
				type: 'POST',
				data: data,
			});
			return currentRequest;
		}
				
				


	/*AJAX CHAINBREAK - Used to break out of the ajax chain*/	
	function chainBreak(data){
		console.log(data);
		if(data === true)
		{
			return true;							
		}else if (data===false){
			return Promise.reject('cancelled');
		}
	}

/*Parses data and determines next procedure after AJAX call*/
function  phpAJAX_Done(response_in){
	console.log('phpAJAX_DONE' + response_in);
	try{	
		var parsedData = JSON.parse(response_in);
		return parsedData;
	}catch(e){
		console.log('parsin failure: ' + e);
	}
	
}




					


