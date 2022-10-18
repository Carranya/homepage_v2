window.onload = function(){
    pagesIndex = ["iconHome", "iconProjects", "iconWebsites", "iconAbout"];
    pages = {iconHome: "home", iconProjects: "projects", iconWebsites: "websites", iconAbout: "about"};

    for(let i=0; i<pagesIndex.length; i++){   
        document.getElementById(pagesIndex[i]).addEventListener("click", function(e){showPage(e);});
    }
}

function showPage(e){
    closePages();
    let pickPage = document.getElementById(pages[e.target.id]);
    pickPage.style.display = "block";
    pickPage.style.transform = "translate(0, 0)";
}

function closePages(){
    document.getElementById("home").style.transform = "translate(-120%, -120%)";
    document.getElementById("projects").style.transform = "translate(120%, -120%)";
    document.getElementById("websites").style.transform = "translate(-120%, 120%)";
    document.getElementById("about").style.transform = "translate(120%, 120%)"; 
}
