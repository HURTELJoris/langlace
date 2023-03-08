function test() {
  alert("Je vais modifier ma div !");
  var i = document.getElementById("test");
  i.innerHTML=("tesdt");
  
}



function mafunction(){
  //exo 9.1
  var Elements = document.getElementsByName("toto");
  Elements.forEach(element => {
      element.innerHTML = "9.1";
  });



    //exo 9.2
    Elements = document.getElementsByTagName("SPAN");
    for(i=0;i<Elements.length;i++){
        Elements[i].innerHTML = "9.2";
    }

    //exo 9.3
    Elements = document.getElementsByClassName("titi");
    for(i=0;i<Elements.length;i++){
        Elements[i].innerHTML = "9.3";
    }
  }
//exo 10
function sapristi(){
  var MaDiv = document.getElementById("div1");
  MaDiv.addEventListener("click", UneProcedureQuiChangeLetext);
  function UneProcedureQuiChangeLetext(evenement){
    evenement.target.className = "rouge";

  }
  var MaDiv2 = document.getElementById("div2");
  MaDiv2.addEventListener("mouseover", UneProcedureQuiChangeLetext2);
  function UneProcedureQuiChangeLetext2(evenement){
    evenement.target.className = "rouge2";
  }
}
test();
mafunction();
sapristi();