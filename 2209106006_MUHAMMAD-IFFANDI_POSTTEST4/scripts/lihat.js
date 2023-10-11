// Function to fetch and display data
function fetchData() {
    const recipeContainer = document.getElementById("recipe-container");

    fetch("../view/getdata.php")
        .then((response) => response.json())
        .then((data) => {
            // Loop through the data and create HTML elements for each record
            data.forEach((record) => {
                const recipeData = document.createElement("div");
                recipeData.className = "recipe-data";

                // Create HTML content for the recipe data
                const recipeHTML = `
                    <div class="recipe">
                        <img class="gambar" src="images/${record.gambar}" alt="${record.judul}" width="300px">
                        <h2 class="judul-resep">${record.nama_resep}</h2>
                        <p class="kategori" id="kategori"><b>Kategori: </b>${record.kategori}</p>
                        <p class="bahan" id="bahan"><b>Bahan-bahan:</b> <br> ${record.bahan}</p>
                        <p class="instruksi" id="instruksi"><b>Instruksi:</b> <br> ${record.instruksi}</p>
                    </div>
                `;

                // Set the inner HTML of the recipe data div
                recipeData.innerHTML = recipeHTML;

                // Append the new recipe data to the recipe container
                recipeContainer.appendChild(recipeData);
            });
        })
        .catch((error) => {
            console.error("Error fetching data: ", error);
        });
}

// Call the fetchData function to populate the grid with data
fetchData();

