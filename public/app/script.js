const menuItems = Array.from(document.querySelectorAll('.menu-item'));


const containTask = document.getElementById("tacheContainer");
var taskArray = [["tache1"],["tache2"]];
let numTask = 0
let index = 0;

containTask.innerHTML = "<div class='centered' id='tache'></div>";
const currentTask = document.getElementById("tache");

menuItems.forEach(item => {

  item.addEventListener('click', function(){

    if(taskArray.length > 0){
      currentTask.innerHTML = "<p>"+taskArray[0]+"</p>";
      currentTask.style.animationName = "away";
      taskArray.shift();
      //containTask.innerHTML = "<div class='centered' id='tache'></div>";
      setTimeout(function(){
        currentTask.style.animationName = "";
        numTask +=1
        if(taskArray.length == 0){
          currentTask.innerHTML = "<div class='noTasks'>Vous n'avez plus aucunes taches pour aujourd'hui.</div>";
        }
      },1500);

    }else{
    }

  });

})

