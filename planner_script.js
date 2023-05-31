window.onload = function() { start() }

const cal = document.getElementsByTagName('section')[0]
let pos = { top: 0, left: 0, x: 0, y: 0 }

const mouseDownHandler = function (e) 
{
    pos = { left: cal.scrollLeft, top: cal.scrollTop, x: e.clientX, y: e.clientY }

    document.addEventListener('mousemove', mouseMoveHandler)
    document.addEventListener('mouseup', mouseUpHandler)

    cal.style.cursor = 'grabbing'
    cal.style.userSelect = 'none'
}
const mouseMoveHandler = function (e) 
{
    const dx = e.clientX - pos.x
    const dy = e.clientY - pos.y
  
    cal.scrollTop = pos.top - dy
    cal.scrollLeft = pos.left - dx
}
const mouseUpHandler = function () 
{
    document.removeEventListener('mousemove', mouseMoveHandler)
    document.removeEventListener('mouseup', mouseUpHandler)
  
    cal.style.cursor = 'grab'
    cal.style.removeProperty('user-select')
}

cal.addEventListener('mousedown', mouseDownHandler)


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
            line.style.top = j * 100 / 24 + 0.2 + "%"
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

