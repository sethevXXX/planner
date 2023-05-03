window.onload = function(){start()}

function logout()
{
    
}
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
function add(dayNumber, color, start, end)
{
    let name = document.createElement("div")
    document.getElementsByClassName("plan")[dayNumber].appendChild(name)
    name.className = "note"
    name.style.backgroundColor = color
    name.style.top = start * 100 / 24 + 0.5 + "%"
    name.style.height = (end - start) * 100 / 24 + "%"
}
function start()
{
    hours()
}