<!doctype html>
<html lang="en">
  <head>
    <title>resume</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    {{-- fontawesome --}}
    <script src="https://use.fontawesome.com/ffb1fe00e0.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
              aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="collapsibleNavId">
              <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                  <li class="nav-item active">
                      <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="#">Link</a>
                  </li>
                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                      <div class="dropdown-menu" aria-labelledby="dropdownId">
                          <a class="dropdown-item" href="#">Action 1</a>
                          <a class="dropdown-item" href="#">Action 2</a>
                      </div>
                  </li>
              </ul>
              <form class="form-inline my-2 my-lg-0">
                  <input class="form-control mr-sm-2" type="text" placeholder="Search">
                  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
              </form>
          </div>
      </nav>
      <style>
          .container{
              display: grid;
              grid-template-columns: repeat(1, 1fr 2fr 1fr);
              grid-template-rows: auto;
              grid-gap: 1px;
              font-family: 'Times New Roman', Times, serif;
              font-size: 22px;
          }
          .head{
              grid-column: 1 / 4;
              grid-row: 1;
             color: black;
              height: auto;
              padding: 12px 16px;
              display: flex;
              justify-content: space-between;
          }
          .head > address {
            font-size: 18px;
            margin: 0;
            padding: 0;
          }
/*---------------------------------------------------------*/

        .desc{
            grid-column: 1 / 4;
            grid-row: 2;
            color: black;
            height: auto;
            text-align: center;
            margin: 6px;
            border: 1px solid black;
            border-radius: 10px;
            background-color: lightgray;
            padding: 6px;
          }




/*---------------------------------------------------------*/
          .left{
              grid-column: 1 / 2;
              grid-row: 3;
              color: black;
              height: auto;
              padding: 6px 16px;
              margin: 0;
              padding-left: 0;

          }

          .left > ul li {
              list-style:none;
              font-size: 18px;
              padding: 0 4px;
              margin-left:4px;
              border-radius: 6px;
              margin: 1px;
              padding: 3px;

          }

 /*---------------------------------------------------------*/
          .middle{
              grid-column: 2/ 3;
              grid-row: 3;
              color:black;
              height: auto;
              padding: 6px 20px;
          }
          .middle > p {
              font-size: 18px;
          }
/*---------------------------------------------------------*/
          .right{
              grid-column: 3 / 4;
              grid-row: 3;
              color: black;
              height: auto;
          }
/*---------------------------------------------------------*/
          .footer{
              grid-column: 1 / 4;
              grid-row: 4;
              height: 80px;
              padding: 6px 12px;
              color: black;
          }
/*---------------------------------------------------------*/
      </style>
    <div class="container py-3">
        <div class="head">
        <address>
            <h4><i class="fa fa-user text-primary" aria-hidden="true"></i> Clovis Daba</h4>
            <i class="fa fa-home text-primary" aria-hidden="true"></i>
            6287 Sunderland dr, Apt D <br>
            &nbsp;&nbsp;&nbsp;&nbsp; Columbus Ohio, 43229 <br>
            &nbsp;&nbsp;&nbsp;&nbsp; United States.
        </address>

       <address>
      <h4>Contact</h4>
        <i class="fa fa-envelope-o text-primary" aria-hidden="true"></i>
        dabaclovis@yahoo.com <br>
        <i class="fa fa-phone text-primary" aria-hidden="true"></i>
        614-779-2576
       </address>
        </div>
        <div class="desc">
            <h3>Full Stack developer</h3>
        </div>
        <div class="left">
            <h4>SKills</h4>
            <ul>
                <li>Html</li>
                <li>Css</li>
                <li>W3css</li>
                <li>Javascript</li>
                <li>w3js</li>
                <li>Bootstrap</li>
                <li>Mysql</li>
                <li>PHP</li>
                <li>Laravel</li>


            </ul>

            <h4>Education</h4>
            <ul>
                <li><i class="fa fa-home text-primary" aria-hidden="true"></i> Columbus State community college</li>
                <li>2015 - 2018</li>
                <li><i class="fa fa-home text-primary" aria-hidden="true"></i> Bridgepoint Technologist</li>
                <li>2018 - 2019</li>
                <li>CCNA Certification</li>
                <li><i class="fa fa-home text-primary" aria-hidden="true"></i> W3schools</li>
            </ul>
        </div>
        <div class="middle">
            <h4>Profile</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing
                elit. Quod eaque beatae sit, quo ipsa error vero optio asperiores quam? Enim minus voluptatem laudantium cupiditate,
                provident hic optio quasi voluptatum sed exercitationem. Officia impedit minima minus? Odit, recusandae?
                Non laudantium blanditiis omnis optio atque suscipit, impedit
                facilis velit minus repellendus? Voluptatibus!
            </p>
            <h4>Coding Experience</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing
                elit. Quod eaque beatae sit, quo ipsa error vero optio asperiores quam? Enim minus voluptatem laudantium cupiditate,
                provident hic optio quasi voluptatum sed exercitationem. Officia impedit minima minus? Odit, recusandae?
                Non laudantium blanditiis omnis optio atque suscipit, impedit
                facilis velit minus repellendus? Voluptatibus!
            </p>
            <h4>Work experience</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing
                elit. Quod eaque beatae sit, quo ipsa error vero optio asperiores quam? Enim minus voluptatem laudantium cupiditate,
                provident hic optio quasi voluptatum sed exercitationem. Officia impedit minima minus? Odit, recusandae?
                Non laudantium blanditiis omnis optio atque suscipit, impedit
                facilis velit minus repellendus? Voluptatibus!
            </p>
        </div>
        <div class="right">
            <h4>Domains</h4>
            <ul>
                <li><a href="https://selfrichest.com"> selfrichest</a> </li>
                <li><a href="https://bussam.com"> Bussam</a> </li>
            </ul>
            <h4>Projects</h4>
            <ul>
                <li><i class="fa fa-github" aria-hidden="true"></i>
                    <ol>
                        <li><a href="">dual user login</a></li>
                        <li><a href="">Custome login</a></li>
                        <li><a href="">Crud App</a></li>
                        <li><a href="">AOS</a></li>
                    </ol>
                </li>
            </ul>
        </div>
        <div class="footer">
            &copy;2021 All rights reserved
            <p>From selfrichest.com</p>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
