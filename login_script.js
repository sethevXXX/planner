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
// function signUp()
// {
//     document.getElementsByTagName("section")[0].style.backgroundColor = "#81C2B5"
//     document.getElementsByTagName("input")[0].style.backgroundColor = "#81C2B5"
//     document.getElementsByTagName("input")[1].style.backgroundColor = "#81C2B5"
//     document.getElementById("loginButton").value = "sign up"
//     document.getElementById("loginButton").style.color = "#81C2B5"
//     document.getElementById("signUp").hidden = "hidden"
// }
function start()
{
    lines()
    dots()
}