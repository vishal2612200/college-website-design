function myFunc(myObj) {
      console.log(myObj.name);
}


$(function(){    
  function myFunc(myObj) {
      console.log(myObj.name);
}


  archive = new DatArchive(window.location)

//document.querySelector('#sub').addEventListener('click',function(){



document.querySelector('#sub').addEventListener('click', function () {
      var e=document.getElementById("notice-upload")
      
      if (e.files) {
        const {files} = e
        console.log(files,$())
        for (let i = 0; i < files.length; i += 1) {
          updateDatabase(e.files[i].name,$('#blah').val(),$('select[name="category"]').val())
          const reader = new FileReader()
          const file = files[i]

          reader.onload = async function () {
            const path = `backend/notices/${file.name}`
            
            try {
              await archive.stat(path)
            } catch (e) {
              await archive.writeFile(path, reader.result)
              await archive.commit()
              //appendImage(path, orientation)
            }
          }

          reader.readAsArrayBuffer(file)
        }
      }
      
    })

  function updateDatabase(fileName,descrip,category)
  {
    var k,date
    id = indexing(descrip)
    archive.readFile('/notices/data.json','utf8').then(function(result){
     date =  new Date().toJSON().slice(0,10).replace(/-/g,'/');
      k=JSON.parse(result)
      //k = console.log(JSON.parse(result))
      var obj = {id : `${id}`, date : `${date}` ,path : `/backend/notices/${fileName}`, description : `${descrip}`,category : `${category}`}
          console.log(k)

      //k.push(obj)
      k.push(obj)
    archive.writeFile('/backend/JSONS/data.json',JSON.stringify(k)) 
    console.log(k)
  
    })
  //  console.log('k : ' + k)
    }
  //index new element
  function indexing(description){
      var neglect = ['is','are','my','the','this','is','will','be','have','had','been','on','of','for']
      var tags =[]
      var id
      description.toLowerCase().split(' ').forEach(function (obj){
        if(!neglect.includes(obj))
          tags.push(obj)
        })


    archive.readFile('/backend/index/notices.json','utf8').then(function(result){
      read=JSON.parse(result)
      id = 0
      var obj = {id : `${id}`,tags : `${tags}`}
      read.push(obj)
          archive.writeFile('/backend/index/notices.json',JSON.stringify(read))
      return id
        })

    
  
  }
})
