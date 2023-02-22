const slideContent = document.getElementById("slideContent");

const JasperAbout = "<h2>Jasper!</h2><p>some about stuff</p>";

const SebastienAbout = "<h2>Sebastien!</h2><p>some about stuff</p>";

const NamanAbout = "<h2>Naman!</h2><p>some about stuff</p>";

let slideIndex = 0;

function moveSlide(increment) 
{
    const numSlides = 4;

    slideIndex += increment;

    if (slideIndex < 0)
    {
        slideIndex = numSlides - 1;
    }

    if (slideIndex > numSlides - 1)
    {
        slideIndex = 0;
    }

    slideContent.style.opacity = 0;

    setTimeout(()=>{

        switch (slideIndex)
        {
            case 0:
                slideContent.innerHTML = "<h2>Meet the team!</h2><br><ul><li class=\"teamMember\">Jasper Charlinski</li><li class=\"teamMember\">Sebastien Van Den Bremt</li><li class=\"teamMember\">Naman Batra</li></ul>";
                break;
            case 1:
                slideContent.innerHTML = NamanAbout;
                break;
            case 2:
                slideContent.innerHTML = SebastienAbout;
                break;
            case 3:
                slideContent.innerHTML = JasperAbout;
                break;
        }
        slideContent.style.opacity = 1;
    }, 200);
}