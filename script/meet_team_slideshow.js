const slideTeamContent = document.getElementById("teamSlideContent");
const JasperAbout = "<h2>Jasper!</h2><p>some about stuff</p>";
const SebastienAbout = "<h2>Sebastien!</h2><p>A Computer Science student focused on CyberSecurity and Script Automation. Has spent many years as a Craft Brewer and an Organic Farmer, and is now ready to join the immersive world of Software. On his spare time he enjoys skateboarding, snowboarding, travel and hacking exercises.</p>";
const NamanAbout = "<h2>Naman!</h2><p>some about stuff</p>";

let teamSlideIndex = 0;

function moveTeamSlide(increment) 
{
    const numSlides = 4;

    teamSlideIndex += increment;

    if (teamSlideIndex < 0)
    {
        teamSlideIndex = numSlides - 1;
    }

    if (teamSlideIndex > numSlides - 1)
    {
        teamSlideIndex = 0;
    }

    slideTeamContent.style.opacity = 0;

    setTimeout(()=>{

        switch (teamSlideIndex)
        {
            case 0:
                slideTeamContent.innerHTML = "<h2>Meet the team!</h2><br><ul><li class=\"teamMember\">Jasper Charlinski</li><li class=\"teamMember\">Sebastien Van Den Bremt</li><li class=\"teamMember\">Naman Batra</li></ul>";
                break;
            case 1:
                slideTeamContent.innerHTML = NamanAbout;
                break;
            case 2:
                slideTeamContent.innerHTML = SebastienAbout;
                break;
            case 3:
                slideTeamContent.innerHTML = JasperAbout;
                break;
        }
        slideTeamContent.style.opacity = 1;
    }, 200);
}