
document.addEventListener("DOMContentLoaded",function name(params) {
    const hamburger=document.querySelector('.hamburger');
    const navlinks=document.querySelector('.nav-links');
    hamburger.addEventListener("click",function name(params) {
        navlinks.classList.toggle("active");
        
    });
    
});
// document.addEventListener("DOMContentLoaded",function name(params){
//     const signupmodal=document.querySelector(".Signup-modal");
//     const applybtn=document.querySelector("#Applybtn");
// const showsignup=document.querySelector("#showsignup");
// const showlogin=document.querySelector("#showlogin");
// const loginmodal=document.querySelector(".login-modal");
// const text=document.querySelector(".Text");
// // const message=document.queryselector(".message");
// applybtn.addEventListener("click",function name(params) {
//     //loginmodal.style.display="none";
//     //signupmodal.classList.toggle("active");
//     text.style.display="none";
//     loginmodal.classList.toggle("active");
//     //message.style.display="none";
    
// });
// showsignup.addEventListener("click",function name(params) {
// loginmodal.style.display="none";
//     signupmodal.classList.toggle("active");

// });
// });
document.addEventListener("DOMContentLoaded", function () {
    const searchInput = document.getElementById("searchInput");
    const searchButton = document.getElementById("searchButton");
    const searchResults = document.getElementById("searchResults");

    // Sample data for demonstration
    const data = ["Apple", "Banana", "Orange", "Grapes", "Mango", "Pineapple"];

    // Function to filter data based on search input
    function filterData(query) {
        return data.filter(item => item.toLowerCase().includes(query.toLowerCase()));
    }

    // Function to display search results
    function displayResults(results) {
        searchResults.innerHTML = "";
        results.forEach(result => {
            const listItem = document.createElement("li");
            listItem.textContent = result;
            searchResults.appendChild(listItem);
        });
    }

    // Event listener for button click
    searchButton.addEventListener("click", function () {
        const query = searchInput.value;
        const results = filterData(query);
        displayResults(results);
    });

    // Event listener for click on search result
    searchResults.addEventListener("click", function (event) {
        if (event.target.tagName === "LI") {
            // You can handle the click on the search result here
            console.log("Clicked on:", event.target.textContent);
        }
    });
});

let slideIndex = 1;

function showSlides(n, containerId) {
  const slides = document.getElementById(containerId).getElementsByClassName("mySlides");

  if (n > slides.length) {
    slideIndex = 1;
  }
  if (n < 1) {
    slideIndex = slides.length;
  }

  for (let i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }

  slides[slideIndex - 1].style.display = "block";
}

function plusSlides(n, containerId) {
  showSlides(slideIndex += n, containerId);
}

// Initial display for each container
showSlides(slideIndex, 'container1');
showSlides(slideIndex, 'container2');
showSlides(slideIndex, 'container3');
showSlides(slideIndex, 'container4');