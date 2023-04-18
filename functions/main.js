const filterButton = document.getElementById("filter-button");
const filterOptions = document.getElementById("filter-options");

filterButton.addEventListener("click", function() {
  if (filterOptions.style.display === "none") {
    filterOptions.style.display = "block";
  } else {
    filterOptions.style.display = "none";
  }
});


