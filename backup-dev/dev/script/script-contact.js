let pattern = new RegExp(/[`#$%\^&*+=\[\]\;\/{}|\\"<>]/); //unacceptable chars.

document.forms["contact"].addEventListener("input", function (e) {
  let inputs = this;
  let submit = document.getElementById("submit");

  submit.classList.remove("errorSubmit");
  for (let i = 0; i < inputs.length; i++) {
    // -1 for not counting the input submit.
    console.log(inputs[i].value);
    let MsgError = document.getElementById("MsgError" + i);

    if (pattern.test(inputs[i].value)) {
      // verify if there is an unacceptable chars.
      inputs[i].classList.add("error");
      MsgError.classList.add("visible");
      MsgError.innerHTML = "Les caractères spéciaux sont intérdits.";
      submit.classList.add("errorSubmit");
    } else {
      inputs[i].classList.remove("error");
      if (MsgError) {
        MsgError.classList.remove("visible");
      }
    }
  }
});

let submit = document.getElementById("submit");
let sendArrow = document.getElementById("send-arrow");

submit.addEventListener("mouseover", function (e) {
  sendArrow.style.marginLeft = "20px";
  sendArrow.style.transition = "0.2s";
});

submit.addEventListener("mouseout", function (e) {
  sendArrow.style.marginLeft = "10px";
});
