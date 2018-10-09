
$(function(){
	var k
/*	var reader = new FileReader()
	reader.onload = function(result){
		k= JSON.parse(result)
	}
	console.log(k)
	reader.readAsText('/notices/data.json','utf8')*/

	var archive = new DatArchive(window.location)
	 archive.readFile('notices/data.json','utf8').then(function(result){
		k=JSON.parse(result)
		console.log(k)
		for(var i=0;i<k.length;++i)
			if(k)
			render(k[i].date,k[i].category,k[i].description,k[i].path)
	})

	function render (date,category,description,path){

		var appendHTML = `<tr>
						<td><strong>${date}</strong></td>
						<td>${category}</td>
						<td><a href= ${path} >${description}</a></td>
					  </tr>`
		$('#notice-tbl-bdy').before(appendHTML)
	}
	
})