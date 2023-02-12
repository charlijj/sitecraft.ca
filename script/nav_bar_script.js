function navBarChange () {

    let nav = document.getElementById(`navBar`);
    let rect = document.getElementById(`top`).getBoundingClientRect();

    nav.style.opacity = `0.5`;
    nav.style.height = `33px`;

    if (rect.top < 0)
    {
        nav.style.position = `fixed`;

    }
    else if (rect.top == 0)
    {
        nav.style.position = `static`;

    }

    setTimeout(() => {
        
        nav.style.opacity = `1`; 
        nav.style.height = '45px';
        nav.style.marginBottom = '40px';     

    }, 500);

}