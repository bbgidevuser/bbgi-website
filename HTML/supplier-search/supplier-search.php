<?php ?>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="colorlib.com">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,600,700" rel="stylesheet" />
      <style>
          table, th, td
          {
              font: 17px Calibri;
              border: solid 1px #DDD;
              border-collapse: collapse;
              padding: 2px 3px;
              text-align: center;
              margin: 10px 0;
              width: 67%;
          }
          th {
              font-weight:bold;
          }
      </style>
      <script>

          window.onload = function(){
            document.getElementById("no-results").style.display='none';
          };

          function buildTable(data) {
              var table = document.createElement("table");
              table.className="gridtable";
              var thead = document.createElement("thead");
              var tbody = document.createElement("tbody");
              var headRow = document.createElement("tr");
              ["Name","Surname","Phone","Company","Service","Industry"].forEach(function(el) {
                  var th=document.createElement("th");
                  th.appendChild(document.createTextNode(el));
                  headRow.appendChild(th);
              });
              thead.appendChild(headRow);
              table.appendChild(thead);
              data.forEach(function(el) {
                  var tr = document.createElement("tr");
                  for (var o in el) {

                      var td = document.createElement("td");

                      td.appendChild(document.createTextNode(el[o]));

                      tr.appendChild(td);
                  }
                  tbody.appendChild(tr);
              });
              table.appendChild(tbody);
              return table;
          }

          function clearTable(){
              $("#results tr").detach();
              $("#no-results tr").detach();
              document.getElementById("no-results").style.display = "none";
          }

          function buildNoResults() {
              clearTable();
              var table = document.createElement("table");
              table.className="gridtable";
              var thead = document.createElement("thead");
              var tbody = document.createElement("tbody");
              var headRow = document.createElement("tr");
              ["No Results Found"].forEach(function(el) {
                  var th=document.createElement("th");
                  th.appendChild(document.createTextNode(el));
                  headRow.appendChild(th);
              });
              thead.appendChild(headRow);
              table.appendChild(thead);
              table.appendChild(tbody);
              return table;
          }

          function fetch() {
              // GET SEARCH TERM
              var data = new FormData();
              data.append('search', document.getElementById("search").value);
              data.append('service', document.getElementById("service").value);
              data.append('industry', document.getElementById("industry").value);
              data.append('com', document.getElementById("com").value);
              data.append('ajax', 1);

              // AJAX SEARCH REQUEST
              var xhr = new XMLHttpRequest();
              xhr.open('POST', "phpSearch.php", true);
              xhr.onload = function () {
                  if (this.status==200) {
                      if(this.response) {
                          var results = JSON.parse(this.response),
                              wrapper = document.getElementById("results");
                          wrapper.innerHTML = "";
                          if (results.length > 0) {
                              for (var res of results) {
                                  document.getElementById("no-results").style.display = "none";
                                  var line = buildTable(results);
                                  wrapper.appendChild(line);
                              }
                          } else {
                              console.log('Inside no results section');
                              var line = buildNoResults();
                              wrapper.appendChild(line);
                              document.getElementById("no-results").style.display = "block";
                              //wrapper.innerHTML = "No results found";
                          }
                      } else {
                          console.log('Inside alternative no results section');
                          wrapper = document.getElementById("no-results");
                          var line = buildNoResults();
                          wrapper.appendChild(line);
                          document.getElementById("no-results").style.display = "block";
                      }
                      } else {
                      alert("ERROR LOADING FILE!");
                  }
              };
              xhr.send(data);
              return false;
          }

      </script>
  </head>
  <body>
    <div class="s009">
      <form onsubmit="return fetch();">
        <div class="inner-form">
          <div class="basic-search">
            <div class="input-field">
              <input id="search" type="text" placeholder="Type Keywords" />
              <div class="icon-wrap">
                <svg class="svg-inline--fa fa-search fa-w-16" fill="#ccc" aria-hidden="true" data-prefix="fas" data-icon="search" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                  <path d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"></path>
                </svg>
              </div>
            </div>
          </div>
          <div class="advance-search">
            <span class="desc">ADVANCED SEARCH</span>
            <div class="row">
              <div class="input-field">
                <div class="input-select">
                  <select id="service" data-trigger="" name="service">
                    <option placeholder="" value="">Service</option>
                    <option value="Interior Design">Interior Design</option>
                    <option value="Software Development">Software Development</option>
                      <option value="Other">Other</option>
                  </select>
                </div>
              </div>
                <div class="input-field">
                    <div class="input-select">
                        <select id="com" data-trigger="" name="com">
                            <option placeholder="" value="">Company</option>
                            <option value="Go">Go</option>
                            <option value="Subject c">Subject c</option>
                            <option value="New">New</option>
                        </select>
                    </div>
                </div>
              <div class="input-field">
                <div class="input-select">
                  <select id="industry" data-trigger="" name="industry">
                    <option placeholder="" value="">Industry</option>
                    <option value="Engineering">Engineering</option>
                    <option value="Subject c">Subject c</option>
                  </select>
                </div>
              </div>

            </div>

            <div class="row third">
              <div class="input-field">
                <div class="result-count">
                  <span>108 </span>results</div>
                <div class="group-btn">
                    <button class="btn-delete" onclick="clearTable()" type="reset" id="delete">
                    RESET</button>
                  <button class="btn-search submit">SEARCH</button>
                </div>
              </div>
            </div>
          </div>
        </div>

          <div class="bg-color-sky-light">
              <div class="content-lg container">
                  <div class="row row-space-1">
                      <form action="">
                          <!-- [SEARCH RESULTS] -->
                          <div class="inner-form">
                              <div class="advanced-search">
                                  <h3>SEARCH RESULTS</h3>
                                  <div class="row">
                                      <div id="results"></div>
                                  </div>
                                  <div class="row">
                                      <div id="no-results"></div>
                                      <button id="no-results" onclick="popup('add-service/add-service.php')">Add Service</button>
                                  </div>
                              </div>
                          </div>
                      </form>
                  </div>
              </div>
          </div>

      </form>
    </div>

    <script src="js/extention/choices.js"></script>
    <script>
      const customSelects = document.querySelectorAll("select");
      const deleteBtn = document.getElementById('delete')
      const choices = new Choices('select',
      {
        searchEnabled: true,
        itemSelectText: '',
        removeItemButton: true,
      });
      deleteBtn.addEventListener("click", function(e)
      {
        e.preventDefault()
        const deleteAll = document.querySelectorAll('.choices__button')
        for (let i = 0; i < deleteAll.length; i++)
        {
          deleteAll[i].click();
        }
      });

    </script>
    <script>
        function popup (url) {
            win = window.open(url, "window1", "width=600,height=400,status=yes,scrollbars=yes,resizable=yes");
            win.focus();
        }
    </script>

  </body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
