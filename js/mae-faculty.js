$(function(){
    var myRequest = new Request('/backend/JSONs/Faculty-info/mae-faculty.json');

    var fetchInit = { method: 'GET',
               mode: 'same-origin',
               cache: 'default' };

    fetch(myRequest,fetchInit)
        .then(res => res.json())
        .then((result) => {
            console.log(result)
            for(var i=0;i<result.length;++i)
                if(result)
                render(result[i])
    
    }).catch(err => console.error(err));


    function render (result){
        console.log("rendered ")
        var appendHTML = `<div class="float-left">
                            <div class="single-team-member">
                                <div class="img">
                                    <img src=${result.image} alt=${result.name}>
                                        <div class="opacity tran4s">
                                            <h4>${result.name}</h4>
                                            <span>${result.designation}</span>
                                            <p>${result.specialization}</p>
                                        </div>
                                </div> <!-- /.img -->
                            <div class="member-name">
                                <h6>${result.name}</h6>
                                <p>${result.designation}</p>
                                <ul>
                                    <li><a href="#" class="tran3s round-border"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#" class="tran3s round-border"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#" class="tran3s round-border"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                    <li><a href="#" class="tran3s round-border"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                </ul>
                            </div> <!-- /.member-name -->
                            </div> <!-- /.single-team-member -->
                            </div>`
        $('#render-here').append(appendHTML);
    
}
})                                    



                                        
                                        