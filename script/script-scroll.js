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

let observeds = [
  document.querySelector(".DefinitionAPDC"),
  document.querySelector(".SliderAndContent"),
  document.querySelector(".location"),
  document.querySelector(".schedules"),
  document.querySelector("section.profile-card"),
  document.querySelector(".form-container"),
];

if (observeds) {
  observeds.forEach((observed) => {
    if (observed) {
      observer.observe(observed);
    }
  });
}
