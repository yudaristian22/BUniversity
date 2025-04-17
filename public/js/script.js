document.addEventListener("DOMContentLoaded", function () {
  const menuToggleButton = document.querySelector(
    'button[aria-controls="mobile-menu"]'
  );

  const mobileMenu = document.getElementById("mobile-menu");

  menuToggleButton.addEventListener("click", function () {
    mobileMenu.classList.toggle("hidden");
    const isExpanded =
      menuToggleButton.getAttribute("aria-expanded") === "true";
    menuToggleButton.setAttribute("aria-expanded", !isExpanded);
    const [menuIcon, closeIcon] = menuToggleButton.querySelectorAll("svg");
    menuIcon.classList.toggle("hidden");
    closeIcon.classList.toggle("hidden");
  });

  const dropdownMenuToggleButtons =
    document.querySelectorAll(".x-dropdown-button");

  dropdownMenuToggleButtons.forEach((button) => {
    button.addEventListener("click", function () {
      const targetMenuId = button.getAttribute("data-target");
      const dropdownMenu = document.getElementById(targetMenuId);
      if (dropdownMenu) {
        dropdownMenu.classList.toggle("hidden");

        const dropdownIcons = button.querySelectorAll("i");
        dropdownIcons.forEach((icon) => {
          icon.classList.toggle("rotate-180");
        });
      }
    });
  });
});
