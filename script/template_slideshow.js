const slideTemplateContent = document.getElementById("templateSlideContent");

const sebTemplate = `<a href="templates/seb_template.html" class="teamSlideContent" id="sebTemplate">seb</a>`
const jasperTemplate = `<a href="templates/seb_template.html" class="teamSlideContent" id="jasperTemplate">jasper</a>`
const namanTemplate = `<a href="templates/seb_template.html" class="teamSlideContent" id="namanTemplate">nanma</a>`

let templateSlideIndex = 0;

function moveTemplateSlide(increment) 
{
    const numSlides = 3;

    templateSlideIndex += increment;

    if (templateSlideIndex < 0)
    {
        templateSlideIndex = numSlides - 1;
    }

    if (templateSlideIndex > numSlides - 1)
    {
        templateSlideIndex = 0;
    }


    slideTemplateContent.style.opacity = 0;

    setTimeout(()=>{

        switch (templateSlideIndex)
        {
            case 0:
                slideTemplateContent.innerHTML = sebTemplate;
                break;
            case 1:
                slideTemplateContent.innerHTML = jasperTemplate;
                break;
            case 2:
                slideTemplateContent.innerHTML = namanTemplate;
                break;
        }
        slideTemplateContent.style.opacity = 1;
    }, 200);
}