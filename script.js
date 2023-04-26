const navbarToggle = document.querySelector('.navbar-toggle');
const navbarMenu = document.querySelector('.navbar-menu');

navbarToggle.addEventListener('click', () => {
  navbarToggle.classList.toggle('active');
  navbarMenu.classList.toggle('active');
});


// ------------------scroll-------------

const navBehaviour = document.querySelector('.navbar');

document.addEventListener('scroll',(e)=>{

    const scroll = window.scrollY;
    

    if(scroll>180)
    {
        navBehaviour.style.backgroundColor = "#1f1f1faa";
    }
    else{
        navBehaviour.style.backgroundColor = "transparent";
    }

    // console.log(navBehaviour)

})


// ----------------------question section---------------------


let questionShowHide = document.getElementsByClassName('question');
let answer = document.getElementsByClassName('answer');
let icon = document.getElementsByClassName('question-icon');


for(let i = 0; i<questionShowHide.length; i++)
{
    
    questionShowHide[i].addEventListener('click',(e)=>{
    
    
        console.log(icon[i].className)
        if(icon[i].className.split(" ")[1]=='ri-add-line')
        {
            icon[i].classList.remove('ri-add-line');
            icon[i].classList.add('ri-subtract-line');
            
        }
        else
        {
            icon[i].classList.add('ri-add-line');
            icon[i].classList.remove('ri-subtract-line');
        }
        answer[i].classList.toggle('active');
    
    })

}