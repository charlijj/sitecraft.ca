const slideTemplateContent = document.getElementById("templateSlideContent");

const sebTemplate = `
    <h2>Template 1</h2>
    <a href="templates/seb_template.html" class="templateLink" id="sebTemplate"></a>
`;
const jasperTemplate = `
    <h2>Template 2 (Coming Soon)</h2>
    <a href="templates/seb_template.html" class="templateLink" id="jasperTemplate"></a>
`;
const namanTemplate = `
    <h2>Template 3 (Coming Soon)</h2>
    <a href="templates/seb_template.html" class="templateLink" id="namanTemplate"></a>
`;

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
    }, 200);
}