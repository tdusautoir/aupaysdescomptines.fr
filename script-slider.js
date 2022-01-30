var i;
var counter = 1;

setInterval(function()
{
    for(i=1; i<=4; i++){ 
        if(document.getElementById('radio' + i).checked == true) //to always start at the right image.
        {
            counter = i + 1;
            if(counter > 4)
            {
                counter = 1;
            }
        }
    }
    document.getElementById('radio' + counter).checked = true;
    counter++;
    if(counter > 4)
    {
        counter = 1;
    }
}, 10000);