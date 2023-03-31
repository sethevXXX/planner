window.onload = function(){start()}

function hours()
{
    let time, line
    for (let i = 0; i < 24; i++)
    {
        time = document.createElement("div")
        document.getElementById("hours").appendChild(time)
        time.className = "time"
        if (i < 10) document.getElementsByClassName("time")[i].innerHTML = "0" + i + ":00"
        else document.getElementsByClassName("time")[i].innerHTML = i + ":00"
        time.style.top = i * 100 / 24 + "%"
    }
    for (let i = 0; i < 7; i++)
    {
        for (let j = 0; j < 24; j++)
        {
            line = document.createElement("div")
            document.getElementsByClassName("plan")[i].appendChild(line)
            line.className = "hourLines"
            line.style.top = j * 100 / 24 + 0.5 + "%"
        }
    }
}
function start()
{
    
    hours()

}