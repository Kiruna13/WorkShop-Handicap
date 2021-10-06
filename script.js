const menuItems = Array.from(document.querySelectorAll('.menu-item'));


const containTask = document.getElementById("tacheContainer");
const taskArray = []
let index = 0;

containTask.innerHTML = "<div class='centered' id='tache'></div>";
const currentTask = document.getElementById("tache");
menuItems.forEach(item => {

  item.addEventListener('click', function(){
    index = menuItems.indexOf(this)
    menuItems[index].classList.add('active-anim');
    currentTask.style.animationName = "away";
    containTask.innerHTML = "<div class='centered' id='tache'></div>";
  })
})