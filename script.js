window.onload = function(){start()}

function hours()
{
    let line
    
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