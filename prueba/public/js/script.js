$("#dep_id").change(event => {
	$.get(`ciudades/${event.target.value}`, function(response, dep_id){
		 for (var i = 0; i < response.length; i++) {
       $("#ciu_id").append("<option value='"+response[i].ciu_id+"'>"+response[i].municipio+"</option>");
     }
		});
	});
