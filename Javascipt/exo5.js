function mafonction(){
   //pour appeler une API on utilise la méthode fetch()
   var myInit = { method: 'POST',
               mode: 'cors',
               cache: 'default', 
               name: 'tata',
               };

   fetch('exercice.api.php',myInit).then((resp) => resp.json())
   .then(function(data) {
   // data est la réponse http de notre API.
   console.log(data);

   UpdateDiv("toto",data[0]);

   

   })
   .catch(function(error) {
   // This is where you run code if the server returns any errors
   console.log(error);
   });
}



function UpdateDiv(id,text){
  var e = document.getElementById(id).innerHTML = text;
}


 