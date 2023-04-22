// Define the path to the daily specials text file
const dailySpecialsFile = "daily-specials.txt";
// Read the contents of the daily specials text file
fetch(dailySpecialsFile)
    .then((response) => response.text())
    .then((text) => {
        // Parse the contents of the text file into an array of objects
        const specials = text
            .trim()
            .split("\n")
            .map((special) => {
                const [name, description, price] = special.split(",");
                return {
                    name,
                    description,
                    price
                };
            });
        // Create the HTML elements for each daily special
        const dailySpecialsContainer = document.getElementById("daily-specials");
        specials.forEach((special) => {
            const card = document.createElement("div");
            card.className = "col-md-4";
            card.innerHTML = `
          <div class="card">
              <div class="card-body">
                  <h5 class="card-title">${special.name}</h5>
                  <p class="card-text">${special.description}</p>
              </div>
              <div class="card-footer">
                  <p class="price">${special.price}</p> 
                  <button class="btn btn-warning order-btn" data-item="${special.name}" onclick="window.location.href='order-menu.php?item=${encodeURIComponent(special.name)}&price=${encodeURIComponent(special.price)}'">Order Now</button>
              </div>
          </div>
      `;
            dailySpecialsContainer.appendChild(card);
        });
    })
    .catch((error) => {
        console.error(`Failed to load daily specials: ${error}`);
    });