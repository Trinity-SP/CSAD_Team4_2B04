function toggleOverflow() {
    const overflowRow = document.querySelector(".overflow-row");
    const dropdownBtn = document.querySelector(".dropdown-btn");

    if (overflowRow.classList.contains("hidden")) {
        overflowRow.classList.remove("hidden");
        dropdownBtn.innerHTML = "&#x25B2;"; // Up Arrow
    } else {
        overflowRow.classList.add("hidden");
        dropdownBtn.innerHTML = "&#x25BC;"; // Down Arrow
    }
}
