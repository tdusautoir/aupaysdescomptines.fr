let observer = new IntersectionObserver(
  (entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add("active");
      }
    });
  },
  {
    threshold: 0.2,
  }
);

/* Accueil */

let definitionAPDC = document.querySelector(".DefinitionAPDC");
let SliderAndContent = document.querySelector(".SliderAndContent");
let locations = document.querySelector(".location");
let schedules = document.querySelector(".schedules");

if (definitionAPDC) {
  observer.observe(definitionAPDC);
  observer.observe(SliderAndContent);
  observer.observe(locations);
  observer.observe(schedules);
}

/* Equipe */

let sectionProfile = document.querySelector("section.profile-card");

if (sectionProfile) {
  observer.observe(sectionProfile);
}

/* Contact */

let form = document.querySelector(".form-container");

if (form) {
  observer.observe(form);
}
