var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) //picture index changes and the next image appears
{
    showSlides(slideIndex += n);
}

function showSlides(n) {
    var i;
     var slides = document.getElementsByClassName("SlidesAbout"); //otherwise pictures are not displayed

    if (n > slides.length)
     {
         slideIndex = 1 //if n is bigger than the lenght of the array it will go back to the start index
     }
    if (n < 1) 
    {
        slideIndex = slides.length// if n is smaller than 1 which is the startIndex then it will go to the last pic
    }
    for (i = 0; i < slides.length; i++)  //hides the previous image 
    {
            slides[i].style.display = "none";
    }
    slides[slideIndex-1].style.display = "block"; //displayed when you start the page - otherwise only when you cklick buttons can see images 
 
}