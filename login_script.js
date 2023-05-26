window.onload = function(){start()}

function lines()
{
    let n = 20;
    for (let i = 0; i < n; i++)
    {
        let line = document.createElement("div")
        document.getElementsByTagName("section")[0].appendChild(line)
        line.className = "line"
    }
}
function dots()
{
    let n = 10;
    for (let i = 0; i < n; i++)
    {
        let dot = document.createElement("div")
        document.getElementById("margin").appendChild(dot)
        dot.className = "dot"
    }
}

function start()
{
    lines()
    dots()
}