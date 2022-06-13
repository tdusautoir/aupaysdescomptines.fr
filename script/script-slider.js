var i;
var counter = 1;

var Timer = setInterval(MyFunction, 5000);

function MyFunction() {
  for (i = 1; i <= 5; i++) {
    if (document.getElementById("radio" + i).checked == true) {
      //to always start at the checked image.
      counter = i + 1;
      if (counter > 5) {
        counter = 1;
      }
    }
  }
  document.getElementById("radio" + counter).checked = true;
  counter++;
  if (counter > 5) {
    counter = 1;
  }
}

function ResetTimer() {
  clearInterval(Timer);
  Timer = setInterval(MyFunction, 5000);
}
