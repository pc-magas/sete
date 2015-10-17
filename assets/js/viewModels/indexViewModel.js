
function Offer(data)
{
	var self=this;
	self.order_name=ko.observable(data.offer_name);
	self.business=ko.observable(data.business_name);
	self.price=ko.observable(data.price);
	self.description=ko.observable(data.description);
	self.place_id=ko.observable(parseInt(data.place_id));
	self.place_name=ko.observable(parseInt(data.place_name));
	self.g_long=ko.observable(data['long']);
	self.g_lat=ko.observable(data['lat']);
};

function IndexViewmodel()
{
	var self=this;
	
	self.searchTerm=ko.observable();
	self.offers=ko.observableArray();
	
	self.searchTerm.subscribe(function(data)
	{
		get_offers(data,null,
		function(data)
		{
			var offers=[];
			ko.utils.arrayForEach(data,function(d)
			{
				var last_offer=new Offer(d);
				offers.push(last_offer);
			});
			self.offers(offers);
		},
		null,
		function(data)
		{
			
		});
	});
}

$(document).ready(function()
{
	var indexVm=new IndexViewmodel();
	
	ko.applyBindings(indexVm);
});

