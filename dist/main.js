

const checkbox = document.querySelectorAll('input[name=check]');


  checkbox.forEach(check => check.addEventListener('click' , toggleDec))


    let isDecorated = false
  function toggleDec(e){
     const target = e.target.parentElement;
      const text = target.querySelector('p');
      
            if(!isDecorated){
                text.style.textDecoration = "line-through";

                isDecorated = true;
            }
            else{
                text.style.textDecoration = "none";
                isDecorated=false;
            }

  }