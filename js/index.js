"use-strict";

const ProductPanels = document.querySelectorAll(".panel-default");
const lineBreaks = document.querySelectorAll("br");
const mainFooter = document.querySelector(".main__footer");
const mainTrustBuilders = document.querySelector(".main__trustbuilders");
const mainMobileContainer = document.querySelector(
  ".main__mobile-product-right"
);
const mainProductLeft = document.querySelector(".main__product-left");
const mainProductRight = document.querySelector(".main__product-right");
const mainProduct = document.querySelector(".main__product");
if (ProductPanels.length > 0) {
  //Checking if there are three panels (3 if there is a product, one if there was an error)
  ProductPanels.length > 1 && ProductPanels[2].remove();
  //Reorganizing the DOM since the RAW HTML inserted changes the layout
  mainFooter.remove();
  mainMobileContainer.remove();
  mainTrustBuilders.remove();
  mainProductLeft.appendChild(mainFooter);
  mainProductLeft.appendChild(mainMobileContainer);
  mainProductLeft.appendChild(mainTrustBuilders);
  mainProduct.appendChild(mainProductRight);

  //Creating the price box if there is a product
  if (ProductPanels.length > 1) {
    //Manipulating the Price description;
    const renewalCTA = document.querySelector(".pricing-action");
    const pricingArea = document.querySelector(".pricing-action-area");
    const pricingDesc = document.querySelector(".pricing-desc");
    renewalCTA.remove();
    const noteTitle = document.createElement("span");
    noteTitle.classList.add("note__title");
    const noteContent1 = document.createElement("span");
    noteContent1.classList.add("note__content");
    const noteContent2 = document.createElement("span");
    noteContent2.classList.add("note__content");
    noteTitle.textContent = "Nota Importante:";
    noteContent1.textContent =
      "El proceso de Renovación puede tardar un máximo de 24 Horas.";
    noteContent2.textContent =
      "Caso contrario comunicarse con Atención al cliente.";
    pricingArea.appendChild(noteTitle);
    pricingArea.appendChild(noteContent1);
    pricingArea.appendChild(noteContent2);
    pricingArea.appendChild(renewalCTA);
    document.querySelector(".pricing-meta strong").textContent = "Renovar por:";

    //Reorganizing the Owner Fields
    const ownerData = [];
    const ownerFields = document.querySelectorAll(".col_full .form-group-lg");
    ownerFields.forEach((ownerField) => {
      ownerData.push(ownerField.querySelector("input").value);
    });
    document.querySelector(".col_full").remove();
    document.querySelector(".panel-heading").remove();

    //Creating the last section of the Pricing box
    const ownerHeader = document.createElement("div");
    ownerHeader.classList.add("pricing-owner-details");
    const disclaimer = document.createElement("div");
    disclaimer.classList.add("pricing-disclaimer");
    pricingDesc.prepend(ownerHeader);
    pricingDesc.appendChild(disclaimer);
    const ownerDataHeader = document.createElement("div");
    ownerDataHeader.classList.add("pricing-owner-header");
    const ownerDataDetails = document.createElement("div");
    ownerDataDetails.classList.add("pricing-owner-info");
    ownerDataHeader.innerHTML = `<span>Propietario:</span>`;
    ownerDataDetails.innerHTML = `
  <span>${ownerData[0]}</span>
  <span>${ownerData[1]}</span>`;
    ownerHeader.appendChild(ownerDataHeader);
    ownerHeader.appendChild(ownerDataDetails);

    //Creating the disclaimer
    const paragraphDisc = document.querySelector(".bg-info p");
    const discAction = document.querySelector(".bg-info a");
    document.querySelector(".bg-info").remove();
    disclaimer.appendChild(paragraphDisc);
    disclaimer.appendChild(discAction);
    document.querySelector(".pricing-box").classList.remove("bottommargin");
  }

  if (ProductPanels.length === 1) {
    const quotationP = document.querySelector(".product-price blockquote p");
    const productOptions = document.querySelectorAll(
      ".product-price blockquote footer p"
    );
    document.querySelector(".product-price blockquote").remove();
    console.log(quotationP, productOptions);
    const productOptionsSpan = document.querySelector("span");
    productOptionsSpan.innerHTML = "";
    document.querySelector(".product-price").append(quotationP);
    document.querySelector(".product-price").append(productOptionsSpan);
    productOptions.forEach((option) =>
      document.querySelector(".product-price span").appendChild(option)
    );
  }
}

const faqContainers = document
  .querySelectorAll(".faq__container")
  .forEach((faq) => {
    faq.addEventListener("click", function (e) {
      if (!e.target.closest(".faq__element")) return;

      const faqQuestionObtained = $(e.target.closest(".faq__element"));
      console.log(faqQuestionObtained);
      const answerObtained = faqQuestionObtained.find(".faq__item-answer");
      answerObtained.slideToggle("slow");
    });
  });
