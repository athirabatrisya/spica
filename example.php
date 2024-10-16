<!--style for slot A3poster.php-->

<style>
    .container {
  display: grid;
  gap: 10px;
  grid-template-columns: repeat(auto-fill, minmax(200px, 1fr)); /* Flexible columns */
  grid-column-gap: 25px;
  grid-row-gap: 25px;
  max-width: 90%; /* Max width to limit horizontal space */
  margin: 0 auto;
  background-color: white;
  color: white;
  border-radius: 10px;
  border: 2px solid white;
  padding: 20px;
  overflow: auto; /* Allow the container to scroll if the number of slots exceeds available height */
}

.container > * {
  background-color: #000080;
  border-radius: 10px;
  padding: 10px;
  display: flex;
  align-items: center;
  justify-content: center;
  color: white;
}

body {
  background-color: #30353b;
  height: 100vh;
  margin: 0;
  padding: 0;
  display: flex;
  justify-content: center;
  align-items: center;
}

</style>

