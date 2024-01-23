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
