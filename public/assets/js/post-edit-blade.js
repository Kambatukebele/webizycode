const showHideIMG = () => {
    const cardImage = document.getElementById("card-image");
    //show image input and hide the image div
    const btn_showHideInput = document.getElementById("btn-show-hidden-input");
    //hide image input and show the image div
    const btn_HideInput = document.getElementById("btn-hide-hidden-input");
    //Div Image
    const divImage = document.getElementById("divImage");

    //Hide image and upload new one
    btn_showHideInput.addEventListener("click", () => {
        divImage.classList.remove("block");
        divImage.classList.add("hidden");
        btn_HideInput.classList.remove("hidden");
        btn_HideInput.classList.add("block");
        btn_showHideInput.classList.add("hidden");

        //Capturing the link
        const linkGet = window.location.href;
        const link = linkGet.split("/", 5);
        let nameAttr = "";

        if (link[3] === "post") {
            nameAttr = "featured_image";
        }
        if (link[3] === "portfolio") {
            nameAttr = "company_image";
        }

        console.log(nameAttr);

        const input = document.createElement("input");
        input.setAttribute("type", "file");
        input.setAttribute("name", nameAttr);
        input.setAttribute("id", "hideMe");

        cardImage.appendChild(input);
    });

    //Hide the possibility to upload new image and revert to the actual one
    btn_HideInput.addEventListener("click", () => {
        const HideInput = document.getElementById("hideMe");
        divImage.classList.remove("hidden");
        divImage.classList.add("block");
        btn_HideInput.classList.remove("block");
        btn_HideInput.classList.add("hidden");
        btn_showHideInput.classList.add("block");
        btn_showHideInput.classList.remove("hidden");

        HideInput.remove();
    });
};

showHideIMG();
