const formModalOpener = document.getElementById("formModalOpener")
const modal = document.getElementById("modal")
const modalCloser = document.getElementById("modalCloser")
const contactFormContainer = document.getElementById("contactFormContainer")

formModalOpener.addEventListener("click", () => {
    modal.style.display = modal.style.display !== "flex" ? "flex" : "none"
})

modalCloser.addEventListener("click", () => {
    modal.style.display = "none"
})

modal.addEventListener("click", (event) => {
    // Vérifie si le clic est en dehors du contactFormContainer
    if (!contactFormContainer.contains(event.target) && event.target !== formModalOpener) {
        modal.style.display = "none"
    }
})

// Empêcher la propagation du clic à l'intérieur du formulaire
contactFormContainer.addEventListener("click", (event) => {
    event.stopPropagation()
})