function mafonction(){
    setInterval(function(){
        //pour appeler une API on utilise la méthode fetch()
        fetch('exercice.api.php').then((resp) => resp.json())
        .then(function(data) {
        // data est la réponse http de notre API.
        console.log(data);
    
        UpdateDiv("toto",data[0]);
    
        
    
        })
        .catch(function(error) {
        // This is where you run code if the server returns any errors
        console.log(error);
        })
    }
    ,2000);
 }
 

 
 function UpdateDiv(id,text){
   var e = document.getElementById(id).innerHTML = text;
 }
 mafonction();