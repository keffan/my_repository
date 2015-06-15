window.onload = function()
{
    var nameButton = document.getElementById('changeButton');
    nameButton.onclick = onChangeButtonClick;
}

function onChangeButtonClick()
{
    var fieldName = document.getElementById('userName');
    var name = fieldName.value;
    var headText = document.getElementById('head');
    if (name != '')
    {
        var newColor = getRandomColor();
        headText.innerHTML = "JavaScript is greeting you, " + name + '!';
        headText.setAttribute("style", newColor);
    }
}

function getRandomColor()
{
    var max = 256 * 256 * 256;
    var randomColorNum = Math.round(Math.random() * (max));
    var newAttr = "color: #" + randomColorNum.toString(16);
    return newAttr;
}