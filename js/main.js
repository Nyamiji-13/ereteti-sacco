const litres = document.querySelector("#litres");
const litresMessage -
      document .querySelector("#litres-message");

      function checkLitres(){
        const amount =Number(litres.value);
        if(litres.value=""){
            litresMessage.textContent ="";
            litres.classList.remove("invalid");
        }else if (amount<=0){
            litresMessage.textContent=
            "litres must be more than 0";
            litres.classList.add("invalid");
        }else{
            litresMessage.textContent ="";
            litres.classList.remove("invalid");
        }
      }

      //event listener
      litres.addEventListener('input',checkLitres);