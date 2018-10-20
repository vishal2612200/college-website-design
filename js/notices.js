$(function(){
    var myRequest = new Request('/backend/JSONs/data.json');

	var fetchInit = { method: 'GET',
               mode: 'same-origin',
               cache: 'default' };

	fetch(myRequest,fetchInit)
    	.then(res => res.json())
    	.then((result) => {
        	//result=JSON.parse(out)
			console.log(result)
			for(var i=0;i<result.length;++i)
				if(result)
				render(result[i].date,result[i].category,result[i].description,result[i].path)
	
	}).catch(err => console.error(err));


	function render (date,category,description,path){
		console.log("rendered ")
		var appendHTML = `<tr>
						<td><strong>${date}</strong></td>
						<td>${category}</td>
						<td><a href= ${path} >${description}</a></td>
					  </tr>`
		$('#notice-tbl-bdy').before(appendHTML);
	}
})
