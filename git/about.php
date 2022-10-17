<div class="about-section">
    <h1>About Us Page</h1>
    <p>Some text about who we are and what we do.</p>
    <p>Resize the browser window to see that this page is responsive by the way.</p>
  </div>
  
  <h2 style="text-align:center">Our Courses</h2>
  <div class="row">
    <div class="column">
      <div class="card">
        <img src="https://www.jotform.com/blog/wp-content/uploads/2020/07/How-to-Become-a-Web-Designer-Your-Go-to-Guide-to-Kick-start-Your-Career-03-2.png" alt="Jane" style="width:100%">
        <div class="container">
          <h2>Web development</h2>
          <p class="title">web designer</p>
          <p>Web development refers to the building, creating, and maintaining of websites. It includes aspects such as web design, web publishing, web programming, and database management.</p>
          <p>https://www.geeksforgeeks.org/web-development/</p>
          <p><a href="https://www.geeksforgeeks.org/web-development/"><button class="button">Contact</button></a></p>
        </div>
      </div>
    </div>
  
    <div class="column">
      <div class="card">
        <img src="https://www.appsinvo.com/blog/wp-content/uploads/2020/07/Inportance-of-Programming-Language-by-appsinvo.jpg" alt="Mike" style="width:100%">
        <div class="container">
          <h2>Programing Langugues</h2>
          <p class="title">Programmer</p>
          <p>computer programming language, any of various languages for expressing a set of detailed instructions for a digital computer. </p>
          <p>https://www.britannica.com/technology/computer-programming-language</p>
          <p><a href="https://www.britannica.com/technology/computer-programming-language"><button class="button">Contact</button></a></p>
        </div>
      </div>
    </div>
  
    <div class="column">
      <div class="card">
        <img src="https://miro.medium.com/max/580/1*5AKv5i_omy24uvWcz64NpA.png" alt="John" style="width:100%">
        <div class="container">
          <h2>Software Engineering</h2>
          <p class="title">software engineer</p>
          <p>Software engineers design and create computer systems and applications to solve real-world problems.</p>
          <p>https://www.coursera.org/articles/software-engineer</p>
          <p><a href="https://www.coursera.org/articles/software-engineer"><button class="button">Contact</button></a></p>
        </div>
      </div>
    </div>
  </div>
<style>
    body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color:#055099;
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: darkblue;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
</style>