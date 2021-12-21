let start = 0;
otomatis();
function otomatis()
{
    const sliders = document.querySelectorAll(".slider");
    for (let i = 0; i < sliders.length; i++)
    {
        sliders[i].style.display = "none";
    }
    sliders[start].style.display = "block";
    start++;

    setTimeout(otomatis, 10000);
}