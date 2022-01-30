let pattern = new RegExp(/[~`!#$%\^&*+=\-\[\]\\';/{}|\\"<>\?]/); //unacceptable chars.

document.forms["contact"].addEventListener("input", function(e) {
    let inputs = this;
    let submit = document.getElementById("submit");

    submit.classList.remove('errorSubmit');
    for(let i=0; i < inputs.length; i++){  // -1 for not counting the input submit.
        console.log(inputs[i].value);
        let MsgError = document.getElementById('MsgError' + i);

        if(pattern.test(inputs[i].value)) { // verify if there is an unacceptable chars.
            inputs[i].classList.add('error');
            MsgError.classList.add('visible');
            submit.classList.add('errorSubmit');
        } else { 
            inputs[i].classList.remove('error');
            if(MsgError){
                MsgError.classList.remove('visible');
            }
        }
    }
});

let submit = document.getElementById("submit");
let sendArrow = document.getElementById("send-arrow");


submit.addEventListener("mouseover", function(e) {
    sendArrow.style.marginLeft = "20px";
    sendArrow.style.transition = "0.2s";
});

submit.addEventListener("mouseout", function(e) {
    sendArrow.style.marginLeft = "10px";
});



// var element = document.querySelector('.inp-anim');
// var element1 = document.querySelector('.inp1-anim');
// var element2 = document.querySelector('.inp2-anim');
// var submit = document.querySelector('input[type=submit]');
// var msgError = document.querySelector('.msgError');
// var msgError1 = document.querySelector('.msgError1');
// var msgError2 = document.querySelector('.msgError2');

// element.addEventListener('input', function(e)
// {  
//     if(e.target.value.includes('$') || e.target.value.includes('<') || e.target.value.includes('>') || e.target.value.includes('{') || e.target.value.includes('}'))
//     {
//         element.classList.add('erreur');
//         submit.classList.add('erreurSubmit');
//         msgError.classList.add('visible');
//     } else
//     {
//         element.classList.remove('erreur');
//         submit.classList.remove('erreurSubmit');
//         msgError.classList.remove('visible');
//     }
// });

// element1.addEventListener('input', function(e)
// {  
//     if(e.target.value.includes('$') || e.target.value.includes('<') || e.target.value.includes('>') || e.target.value.includes('{') || e.target.value.includes('}'))
//     {
//         element1.classList.add('erreur');
//         submit.classList.add('erreurSubmit');
//         msgError1.classList.add('visible');
//     } else
//     {
//         element1.classList.remove('erreur');
//         submit.classList.remove('erreurSubmit');
//         msgError1.classList.remove('visible');
//     }
// });

// element2.addEventListener('input', function(e)
// {  
//     if(e.target.value.includes('$') || e.target.value.includes('<') || e.target.value.includes('>') || e.target.value.includes('{') || e.target.value.includes('}'))
//     {
//         element2.classList.add('erreur');
//         submit.classList.add('erreurSubmit');
//         msgError2.classList.add('visible');
//     } else
//     {
//         element2.classList.remove('erreur');
//         submit.classList.remove('erreurSubmit');
//         msgError2.classList.remove('visible');
//     }
// });

// var element = document.querySelector('.inp-anim');
// var element1 = document.querySelector('.inp1-anim');
// var element2 = document.querySelector('.inp2-anim');
// var elements = [element, element1, element2];
// var submit = document.querySelector('input[type=submit]');

// elements.forEach(el=> el.addEventListener('input', function(e)
// {
//     if(e.target.value.includes('$') || e.target.value.includes('<') || e.target.value.includes('>') || e.target.value.includes('{') || e.target.value.includes('}'))
//     {
//         el.classList.add('erreur');
//         submit.classList.add('erreurSubmit');
//         msgError.classList.add('visible');
//     } else
//     {
//         el.classList.remove('erreur');
//         submit.classList.remove('erreurSubmit');
//         msgError.classList.remove('visible');
//     }
// }));

