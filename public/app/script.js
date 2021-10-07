const menuItems = Array.from(document.querySelectorAll('.menu-item'));


const containTask = document.getElementById("tacheContainer");
var taskArray = [
  {tache:'Cours de Francais', heure:'8h30', description:'Suivre attentivement le cours et prendre des notes'},
  {tache:'Cours de Mathématiques', heure:'10h30', description:'Suivre attentivement le cours et prendre des notes'},
  {tache:'Cours d\'histoire' , heure:'14h30', description:'Suivre attentivement le cours et prendre des notes'},
  {tache:'Cours d\'anglais', heure:'16h30', description:'Suivre attentivement le cours et prendre des notes'}
];

let numTask = 0
let index = 0;

containTask.innerHTML = "<div class='centered' id='tache'></div>";
const currentTask = document.getElementById("tache");
currentTask.classList.add("fontCentered");
currentTask.innerHTML = "<p>"+taskArray[0].tache+"</p>";
currentTask.innerHTML += "<p>"+taskArray[0].description+"</p>";
currentTask.innerHTML += "<p>"+taskArray[0].heure+"</p>";
menuItems.forEach(item => {

  item.addEventListener('click', function(){

    if(taskArray.length > 0){

      currentTask.style.animationName = "away";
      taskArray.shift();
      //containTask.innerHTML = "<div class='centered' id='tache'></div>";
      if(taskArray.length == 0){
        setTimeout(function() {
          currentTask.innerHTML = "<div class='noTasks'>Vous n'avez plus aucune taches pour aujourd'hui.</div>";
        },1500);
      }else{
        setTimeout(function(){
          currentTask.style.animationName = "";
          numTask +=1
          currentTask.innerHTML = "<p>"+taskArray[0].tache+"</p>";
          currentTask.innerHTML += "<p>"+taskArray[0].description+"</p>";
          currentTask.innerHTML += "<p>"+taskArray[0].heure+"</p>";
          console.log(taskArray.length);

        },1500);
      }


    }

  });

})

