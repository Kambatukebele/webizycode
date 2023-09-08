//Display Sub-menu service on Hover
const ShowHideSubMenuServices = () =>{
  const services = document.getElementById("services");
  const servicesCard = document.getElementById("services-card");

  //On Hover on Services Link show the sub-menu card
  services.addEventListener('mouseover', () => {
    servicesCard.classList.remove("lg:hidden");
    servicesCard.classList.add("lg:block");
  });
  //On Leave Hide the sub-menu Card

  servicesCard.addEventListener('mouseleave', () =>{     
     servicesCard.classList.remove("lg:block");
     servicesCard.classList.add("lg:hidden");
  });
}

ShowHideSubMenuServices();

//Show and Hide Menu on Small Devices

const showHideMenuOnSmallDevices = () =>{
  const smallDeviceCardMenu = document.getElementById("small-device-card-menu");
  const closeMenu = document.getElementById("close-menu");
  const hamburgerMenu = document.getElementById("hamburger-menu");

  hamburgerMenu.addEventListener('click', () =>{
    hamburgerMenu.classList.remove('block');
    hamburgerMenu.classList.add('hidden');
    closeMenu.classList.remove('hidden');
    closeMenu.classList.add('block'); 
    smallDeviceCardMenu.classList.remove('hidden');
    smallDeviceCardMenu.classList.add('block');
    
  });

  closeMenu.addEventListener('click', () =>{
     closeMenu.classList.remove("block");
     closeMenu.classList.add("hidden");
     smallDeviceCardMenu.classList.remove("block");
     smallDeviceCardMenu.classList.add("hidden");
    hamburgerMenu.classList.remove("hidden");
    hamburgerMenu.classList.add("block");
   
    
  });
}

showHideMenuOnSmallDevices(); 