window.addEventListener("load", () => {
    const showAndHideImageInPortfolioUpdate = () => {
        //Capture the parent parentBtnAndImage
        const parentBtnAndImage =
            document.querySelectorAll(".parentBtnAndImage");
        // Capture all the showBtn button
        const showBtn = document.querySelectorAll(".showBtn");
        // Catpture all the HideBtn button
        const hideBtn = document.querySelectorAll(".hideBtn");
        // Capture all the Images
        const showImage = document.querySelectorAll(".showImage");
        /**
         * When I click on the showBtn, this scenario will happened:
         * 1. loop all the showBtn button to find the corresponded clicked button
         * 2. One the showBtn found, I will hide it by adding a class hidden to the correspondant ShowBtn
         * 3. then I will loop also the hideBtn to find the corresponded one, and I will remove the class hidden and add the class block
         * 4. I will create a new input element of type file and add the corresponding element to it by checking the data-input element value
         * 5. When CLicking on the hide button: Destroy the created element, show the showBtn
         */

        for (let i = 0; i < showBtn.length; i++) {
            showBtn[i].addEventListener("click", (e) => {
                // console.log(e.target.parentElement.dataset.input);
                //e.target.parentElement.classList;
                //e.target.parentElement.dataset;
                // Hide the showBtn
                e.target.classList.add("hidden");
                //Show the hideBtn
                e.target.nextElementSibling.classList.remove("hidden");
                e.target.nextElementSibling.classList.add("block");
                //Hide the image
                e.target.nextElementSibling.nextElementSibling.classList.add(
                    "hidden"
                );

                //Create Input element
                const newInput = document.createElement("input");
                const typeAttr = document.createAttribute("type");
                typeAttr.value = "file";
                const nameAttr = document.createAttribute("name");
                nameAttr.value = e.target.parentElement.dataset.input;
                const valueAttr = document.createAttribute("value");
                valueAttr.value = `{{ old('${e.target.parentElement.dataset.input}') }}`;
                const classAttr = document.createAttribute("class");
                classAttr.value = "mt-2 block w-full newInput";
                newInput.setAttributeNode(typeAttr);
                newInput.setAttributeNode(nameAttr);
                newInput.setAttributeNode(valueAttr);
                newInput.setAttributeNode(classAttr);
                // Append the new input to the parent div
                e.target.parentElement.appendChild(newInput);
            });
        }
        for (let j = 0; j < hideBtn.length; j++) {
            hideBtn[j].addEventListener("click", (e) => {
                console.log(e);
                // Hide the hideBtn
                e.target.classList.add("hidden");
                //Show the showBtn
                e.target.previousElementSibling.classList.remove("hidden");
                e.target.previousElementSibling.classList.add("block");
                // //Show the image
                e.target.nextElementSibling.classList.remove("hidden");

                //Destroy or remove the corresponding input
                e.target.parentElement.removeChild(
                    e.target.parentElement.lastElementChild
                );
            });
        }
    };
    showAndHideImageInPortfolioUpdate();
});
