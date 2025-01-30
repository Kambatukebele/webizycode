//Display Sub-menu service on Hover
const ShowHideSubMenuServices = () => {
    const services = document.getElementById("services");
    const servicesCard = document.getElementById("services-card");

    //On Hover on Services Link show the sub-menu card
    services.addEventListener("mouseover", () => {
        servicesCard.classList.remove("lg:hidden");
        servicesCard.classList.add("lg:block");
    });
    //On Leave Hide the sub-menu Card

    servicesCard.addEventListener("mouseleave", () => {
        servicesCard.classList.remove("lg:block");
        servicesCard.classList.add("lg:hidden");
    });
};

ShowHideSubMenuServices();

//Show and Hide Menu on Small Devices

const showHideMenuOnSmallDevices = () => {
    const smallDeviceCardMenu = document.getElementById(
        "small-device-card-menu"
    );
    const closeMenu = document.getElementById("close-menu");
    const hamburgerMenu = document.getElementById("hamburger-menu");

    hamburgerMenu.addEventListener("click", () => {
        hamburgerMenu.classList.remove("block");
        hamburgerMenu.classList.add("hidden");
        closeMenu.classList.remove("hidden");
        closeMenu.classList.add("block");
        smallDeviceCardMenu.classList.remove("hidden");
        smallDeviceCardMenu.classList.add("block");
    });

    closeMenu.addEventListener("click", () => {
        closeMenu.classList.remove("block");
        closeMenu.classList.add("hidden");
        smallDeviceCardMenu.classList.remove("block");
        smallDeviceCardMenu.classList.add("hidden");
        hamburgerMenu.classList.remove("hidden");
        hamburgerMenu.classList.add("block");
    });
};

showHideMenuOnSmallDevices();

// Show And Hide Translation Button
const changeLanguage = () => {
    let langText = document.getElementsByClassName("langText")[0];
    let lang = document.getElementsByClassName("lang")[0];
    let english = document.getElementsByClassName("en")[0];
    let czech = document.getElementsByClassName("cs")[0];

    // Retrieve the selected language from localStorage
    let selectedLanguage = localStorage.getItem("selectedLanguage") || "EN";
    langText.innerHTML = selectedLanguage;

    lang.addEventListener("click", () => {
        if (
            english.classList.contains("hidden") &&
            czech.classList.contains("hidden")
        ) {
            english.classList.remove("hidden");
            czech.classList.remove("hidden");
        } else {
            english.classList.add("hidden");
            czech.classList.add("hidden");
        }

        english.addEventListener("click", () => {
            langText.innerHTML = "EN";
            // Store the selected language in localStorage
            localStorage.setItem("selectedLanguage", "EN");
            english.classList.add("hidden");
            czech.classList.add("hidden");
        });
        czech.addEventListener("click", () => {
            langText.innerHTML = "CZ";
            // Store the selected language in localStorage
            localStorage.setItem("selectedLanguage", "CZ");
            english.classList.add("hidden");
            czech.classList.add("hidden");
        });
    });
};

// Call the function to set the initial language on page load
changeLanguage();

//Project
const PROJECT_FUNC = () => {
    // Grab the div that going to show the list of projects
    const projectsCard = document.querySelector("#projects");

    const projects = [
        {
            img: "../images/kamba.png",
            tags: ["Web design", "Laravel"],
            title: "Kamba",
            link: "link",
        },
        {
            img: "./images/project-img-2.jpg",
            tags: ["Web design", "UI/UX"],
            title: "Features Two",
            link: "link",
        },
        {
            img: "./images/slider-img-1.jpg",
            tags: ["Web design", "UI/UX"],
            title: "Features Three",
            link: "link",
        },
        {
            img: "./images/slider-img-2.jpg",
            tags: ["Web design", "UI/UX"],
            title: "Features Four",
            link: "link",
        },
        {
            img: "./images/slider-img-3.jpg",
            tags: ["Web design", "UI/UX"],
            title: "Features Five",
            link: "link",
        },
        {
            img: "./images/slider-img-4.jpg",
            tags: ["Web design", "UI/UX"],
            title: "Features six",
            link: "link",
        },
    ];

    const InnerList = projects.map((project) => {
        const { img, title, tags, link } = project;
        return `<li class="projects__list">
          <a href="${link}" target="_blank" class="projects__list--imgGroup">
            <img
              src="{{ asset('assets/images/kamba.png') }}"
              alt=""
              width="746"
              height="475"
            />
          </a>
          <div class="projects__list--text">
            <span>${tags[0]}</span>
            <span>${tags[1]}</span>
          </div>
          <div class="project__list--iconGroup">
            <a href="${link}" class="projects__list--icon">
              <img src="./images/icon-black-solid-sharp-arrow-right.svg" alt="arrow icon" />
            </a>
          </div>
          <div class="projects__list--bottomText">
            <h4>${title}</h4>
          </div>
        </li>`;
    });

    projectsCard.innerHTML = InnerList.join("");
};

// PROJECT_FUNC();
