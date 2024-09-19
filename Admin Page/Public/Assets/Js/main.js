const hamBurger = document.querySelector(".toggle-btn");
const sidebar = document.querySelector("#sidebar");

// Check if the sidebar state is stored in localStorage
if (localStorage.getItem("sidebarState") === "expanded") {
  sidebar.classList.add("expand");
}

// Toggle sidebar and save state in localStorage
hamBurger.addEventListener("click", function () {
  sidebar.classList.toggle("expand");

  // Save the current state of the sidebar in localStorage
  if (sidebar.classList.contains("expand")) {
    localStorage.setItem("sidebarState", "expanded");
  } else {
    localStorage.setItem("sidebarState", "collapsed");
  }
  
});
