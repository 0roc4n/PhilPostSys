<style>
  * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
  }

  body {
      height: 100vh;
      width: 100%;
      display: flex;
      justify-content: center;
      align-items: center;
      font-family: sans-serif;
      background-color: #2c54ff;
  }

  .wrapper {
      height: 5px;
      width: 700px;
      box-shadow: 0 0 20px rgba(218, 216, 207, 0.5); /* Add a hint of glow */
      background-color: #edeade;
      border-radius: 2px;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      display: flex;
      justify-content: center;
      z-index: 0;
  }

  .lid {
      position: absolute;
      height: 100%;
      width: 100%;
      top: 0;
      left: 0;
      border-radius: 4px;
      border-right: 350px solid transparent; /* Adjust the border sizes */
      border-bottom: 200px solid transparent; /* Adjust the border sizes */
      border-left: 350px solid transparent; /* Adjust the border sizes */
      transform-origin: top;
      transition: transform 0.25s linear;
  }

  /* lid when closed */
  .lid.one {
      border-radius: 4px;
      border-top: 250px solid #edeade; /* Adjust the border size and color */
      transform: rotateX(0deg);
      z-index: 7;
      transition-delay: 0.75s;
  }

  /* lid when opened */
  .lid.two {
      border-radius: 4px;
      border-top: 150px solid #dad8cf; /* Adjust the border size and color */
      transform: rotateX(90deg);
      z-index: 1;
      transition-delay: 0.5s;
  }

  .envelope {
      position: absolute;
      height: 100%; /* Adjust the height of the envelope */
      width: 100%; /* Adjust the width of the envelope */
      top: 50%; /* Move the envelope slightly down */
      left: 0;
      border-radius: 4px;
      border-top: 150px solid transparent; /* Adjust the border sizes */
      border-right: 350px solid #dad8cf; /* Adjust the border sizes and color */
      border-bottom: 150px solid #dad8cf; /* Adjust the border sizes and color */
      border-left: 350px solid #dad8cf; /* Adjust the border sizes and color */
      z-index: 3;
  }

  .letter {
      position: absolute;
      top: 0;
      width: 99%;
      height: 300px; /* Increase the height of the letter */
      background-color: white;
      box-shadow: 0 0 20px rgba(218, 216, 207, 0.5);
      border-radius: 2px;
      z-index: 2;
      transition: 0.5s;
      justify-content: center;
      align-items: center;
      flex-direction: column;
      overflow: hidden; /* Ensure contents are not visible initially */
  }

  .letter form {
      font-family: Arial;
      display: flex;
      flex-direction: column;
      align-items: center;
  }

  .letter input {
      margin-bottom: 10px;
      padding: 1px;
      border: 1px solid #ccc;
      border-radius: 4px;
  }

  .letter input[type="submit"] {
      padding: 5px 10px;
      background-color: #2c54ff;
      color: white;
      cursor: pointer;
      border: none;
      border-radius: 4px;
  }

  .letter p {
      text-align: center;
      font-size: 20px;
      font-family: Arial;
      margin-bottom: 11px;
      color: #3b4049;
  }

  .wrapper:hover .lid.one {
      transform: rotateX(90deg);
      transition-delay: 0s;
  }

  .wrapper:hover .lid.two {
      transform: rotateX(180deg);
      transition-delay: 0.25s;
  }

  .wrapper:hover .letter {
      top: -250px; /* Adjusted position on hover */
      height: 500px; /* Increased height on hover */
      transform: translateY(-50px);
      transition-delay: 0.5s;
  }

  /* Style for the photo */
  .lid.one img {
      position: absolute;
      top: -100px; /* Adjust position to fit with the lid */
      left: 50%;
      transform: translateX(-50%);
      transition: 0.5s;
      z-index: 8; /* Ensure it's above lid.two */
  }

  .wrapper:hover .lid.one img {
      top: -350px; /* Adjust position to fit with the opened envelope */
      transition-delay: 0.25s;
  }
</style>
<body>
  <div class="wrapper">
    <div class="lid one">
        <!-- Add an image for the photo -->
        <img
            src="public/assets/PhilPost_OfficeLogo.png"
            alt="PhilPost Office Logo"
            width="100"
        />
    </div>
    <div class="lid two"></div>
    <div class="envelope"></div>
    <div class="letter">
      <p>Log In</p>
      <form>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</body>