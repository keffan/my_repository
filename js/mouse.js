window.onload = onWindowLoaded;

function onWindowLoaded()
{
    document.onmousemove = getMousePos;
}

function getMousePos()
{
    var posX = document.getElementById('posX');
    var posY = document.getElementById('posY');
    posX.innerHTML = "X: " + window.event.pageX;
    posY.innerHTML = "Y: " + window.event.pageY;
}