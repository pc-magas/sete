var get_offers=function(keyword,price,success_cb,error_cb,alwayscb)
{
	var postdata={'keyword':keyword};
	
	if(typeof price !=='undeifned' ) postdata['price'];
	$.get('index.php/offers/get',postdata)
	.done(function(data)
	{
		data=data.data;
		
		if(typeof success_cb==='function') success_cb(data);
	})
	.always(function(data)
	{
		if(typeof alwayscb==='fuunction') alwayscb(data);
	})
	.error(function(data)
	{
		if(typeof error_cb === 'function') error_cb(data);
	});
};
