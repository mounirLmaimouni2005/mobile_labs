let file = "../backend/api/api_ctg.php";
document.addEventListener("DOMContentLoaded" , function(){

    

// function getall data 
function getallData(file){
 let tbody = document.querySelector('#table-categories-body');
    
    fetch(file)
    .then(reponse =>reponse.json())
    .then(data => {
         tbody.innerHTML = "";

         data.forEach(datas => {
             let tr = document.createElement("tr");

             tr.insertAdjacentHTML("beforeend" , `
                <td>${datas.id}</td>
                <td>${datas.nom}</td>
                <td>${datas.colour}</td>
                <td>${datas.icone}</td>
                ` )
         tbody.appendChild(tr);
                
        });
    })
}

 getallData(file);
//TODO:fix this code please 
//FIXME: you should to fix this code

// add data to file json
function addData(file){
    let nom = document.querySelector("#cat-nom");
    let colour = document.querySelector("#cat-couleur");
    let incon = document.querySelector("#cat-icone");

    let nomValue = nom.value;
    let colourValue = colour.value;
    let inconValue = incon.value;

    let alldata = {
        "nom" : nomValue,
        "couleur" : colourValue,
        "incon" : inconValue 
    }
      
  fetch(file ,{
     method : "POST",
     headers:{"Content-type":"application/json"},
     body:JSON.stringify(alldata)
    })
    
    getallData(file);

    nom.value = "";
    colour.value = "";
    incon.value = "";
}

let form = document.getElementById("form-categorie");
form.addEventListener('submit',function(e){
   e.preventDefault();
   addData(file);
})


})











