<section id="menu" class="container mt-4">
      <h2 class="text-center">Speisekarte</h2>
      <br />

      <div class="row" id="menuContainer">
        <!-- Menu Item 1 -->
        <!-- Menu Item 2 -->
        <!-- Menu Item 3 -->
      </div>
      <br />

      <!-- More Food Button -->
      <!-- <div class="text-center">
        Add this button to your Menu Section -->
      <!--<button id="moreFoodButton" class="btn btn-primary mt-3">
            <i class="fas fa-utensils"></i> More Food
        </button>
    </div> -->

      <!-- More Food Button (linked to a PDF file) -->
      <div class="text-center">
        <!-- Add this button to your Menu Section --
        <a
          href="./menu/Divadis_Neueröffnung_2.pdf"
          target="_blank"
          class="btn btn-primary mt-3"
        >
          <i class="fas fa-utensils"></i> Speisekarte
        </a>
    -->
        <!-- Button to trigger the modal -->
        <button
          type="button"
          class="btn btn-primary"
          data-toggle="modal"
          data-target="#myModal"
        >
          <i class="fas fa-utensils"></i> Speisekarte
        </button>
      </div>

      <!-- Modal -->
      <div
        class="modal fade"
        id="myModal"
        tabindex="-1"
        role="dialog"
        aria-labelledby="myModalLabel"
        aria-hidden="true"
      >
      
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="myModalLabel">Menu</h5>
              <button
                type="button"
                class="close"
                data-dismiss="modal"
                aria-label="Close"
              >
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col-md-6">
                  <div class="card mb-4">
                    <!-- Image -->
                    <img
                      src="./images/IMG_1359.JPG"
                      class="card-img-top"
                      alt="Menu Item"
                    />

                    <!-- Card Body -->
                    <div class="card-body">
                      <!-- Title -->
                      <h5 class="card-title">SALAT, VORSPEISE</h5>

                      <!-- List Elements with Individual Prices -->
                      <ul class="list-group list-group-flush">
                        <li
                          class="list-group-item d-flex justify-content-between align-items-center"
                        >
                          TOMATEN MOZZARELLA
                          <span class="badge badge-primary badge-pill"
                            >7,00€</span
                          >
                        </li>
                        <li
                          class="list-group-item d-flex justify-content-between align-items-center"
                        >
                          BRUSCHETTA
                          <span class="badge badge-primary badge-pill"
                            >7,00€</span
                          >
                        </li>
                        <li
                          class="list-group-item d-flex justify-content-between align-items-center"
                        >
                          GEMISCHTER SALAT
                          <span class="badge badge-primary badge-pill"
                            >7,00€</span
                          >
                        </li>
                        <li
                          class="list-group-item d-flex justify-content-between align-items-center"
                        >
                          GRÜNER SALAT
                          <span class="badge badge-primary badge-pill"
                            >7,00€</span
                          >
                        </li>
                        <li
                          class="list-group-item d-flex justify-content-between align-items-center"
                        >
                          DIVADIS SALAT
                          <span class="badge badge-primary badge-pill"
                            >8,00€</span
                          >
                        </li>
                        <!-- Add more list elements as needed with their respective prices -->
                      </ul>
                    </div>

                    <!-- Card Footer (Optional) -->
                    <div class="card-footer">
                      <!-- Additional information can be included here if needed -->
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="card mb-4">
                    <!-- Image -->
                    <img
                      src="./images/pizza.png"
                      class="card-img-top"
                      alt="Menu Item"
                    />

                    <!-- Card Body -->
                    <div class="card-body">
                      <!-- Title -->
                      <h5 class="card-title">PIZZA</h5>

                      <!-- List Elements with Individual Prices -->
                      <ul class="list-group list-group-flush">
                        <li
                          class="list-group-item d-flex justify-content-between align-items-center"
                        >
                          Element 1
                          <span class="badge badge-primary badge-pill"
                            >7,00€</span
                          >
                        </li>
                        <li
                          class="list-group-item d-flex justify-content-between align-items-center"
                        >
                          Element 2
                          <span class="badge badge-primary badge-pill"
                            >8,00€</span
                          >
                        </li>
                        <li
                          class="list-group-item d-flex justify-content-between align-items-center"
                        >
                          Element 3
                          <span class="badge badge-primary badge-pill"
                            >9,00€</span
                          >
                        </li>
                        <!-- Add more list elements as needed with their respective prices -->
                      </ul>
                    </div>

                    <!-- Card Footer (Optional) -->
                    <div class="card-footer">
                      <!-- Additional information can be included here if needed -->
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="card mb-4">
                    <!-- Image -->
                    <img
                      src="./images/pasta.png"
                      class="card-img-top"
                      alt="Menu Item"
                    />

                    <!-- Card Body -->
                    <div class="card-body">
                      <!-- Title -->
                      <h5 class="card-title">PASTA</h5>

                      <!-- List Elements with Individual Prices -->
                      <ul class="list-group list-group-flush">
                        <li
                          class="list-group-item d-flex justify-content-between align-items-center"
                        >
                          Element 1
                          <span class="badge badge-primary badge-pill"
                            >7,00€</span
                          >
                        </li>
                        <li
                          class="list-group-item d-flex justify-content-between align-items-center"
                        >
                          Element 2
                          <span class="badge badge-primary badge-pill"
                            >8,00€</span
                          >
                        </li>
                        <li
                          class="list-group-item d-flex justify-content-between align-items-center"
                        >
                          Element 3
                          <span class="badge badge-primary badge-pill"
                            >9,00€</span
                          >
                        </li>
                        <!-- Add more list elements as needed with their respective prices -->
                      </ul>
                    </div>

                    <!-- Card Footer (Optional) -->
                    <div class="card-footer">
                      <!-- Additional information can be included here if needed -->
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="card mb-4">
                    <!-- Image -->
                    <img
                      src="./images/burek2.png"
                      class="card-img-top"
                      alt="Menu Item"
                    />

                    <!-- Card Body -->
                    <div class="card-body">
                      <!-- Title -->
                      <h5 class="card-title">BUREK</h5>

                      <!-- List Elements with Individual Prices -->
                      <ul class="list-group list-group-flush">
                        <li
                          class="list-group-item d-flex justify-content-between align-items-center"
                        >
                          Element 1
                          <span class="badge badge-primary badge-pill"
                            >7,00€</span
                          >
                        </li>
                        <li
                          class="list-group-item d-flex justify-content-between align-items-center"
                        >
                          Element 2
                          <span class="badge badge-primary badge-pill"
                            >8,00€</span
                          >
                        </li>
                        <li
                          class="list-group-item d-flex justify-content-between align-items-center"
                        >
                          Element 3
                          <span class="badge badge-primary badge-pill"
                            >9,00€</span
                          >
                        </li>
                        <!-- Add more list elements as needed with their respective prices -->
                      </ul>
                    </div>

                    <!-- Card Footer (Optional) -->
                    <div class="card-footer">
                      <!-- Additional information can be included here if needed -->
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="card mb-4">
                    <!-- Image -->
                    <img src="./images/" class="card-img-top" alt="Menu Item" />

                    <!-- Card Body -->
                    <div class="card-body">
                      <!-- Title -->
                      <h5 class="card-title">KINDERMENÜ</h5>

                      <!-- List Elements with Individual Prices -->
                      <ul class="list-group list-group-flush">
                        <li
                          class="list-group-item d-flex justify-content-between align-items-center"
                        >
                          Element 1
                          <span class="badge badge-primary badge-pill"
                            >7,00€</span
                          >
                        </li>
                        <li
                          class="list-group-item d-flex justify-content-between align-items-center"
                        >
                          Element 2
                          <span class="badge badge-primary badge-pill"
                            >8,00€</span
                          >
                        </li>
                        <li
                          class="list-group-item d-flex justify-content-between align-items-center"
                        >
                          Element 3
                          <span class="badge badge-primary badge-pill"
                            >9,00€</span
                          >
                        </li>
                        <!-- Add more list elements as needed with their respective prices -->
                      </ul>
                    </div>

                    <!-- Card Footer (Optional) -->
                    <div class="card-footer">
                      <!-- Additional information can be included here if needed -->
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="card mb-4">
                    <!-- Image -->
                    <img
                      src="./images/desert.png"
                      class="card-img-top"
                      alt="Menu Item"
                    />

                    <!-- Card Body -->
                    <div class="card-body">
                      <!-- Title -->
                      <h5 class="card-title">DESSERT</h5>

                      <!-- List Elements with Individual Prices -->
                      <ul class="list-group list-group-flush">
                        <li
                          class="list-group-item d-flex justify-content-between align-items-center"
                        >
                          Element 1
                          <span class="badge badge-primary badge-pill"
                            >7,00€</span
                          >
                        </li>
                        <li
                          class="list-group-item d-flex justify-content-between align-items-center"
                        >
                          Element 2
                          <span class="badge badge-primary badge-pill"
                            >8,00€</span
                          >
                        </li>
                        <li
                          class="list-group-item d-flex justify-content-between align-items-center"
                        >
                          Element 3
                          <span class="badge badge-primary badge-pill"
                            >9,00€</span
                          >
                        </li>
                        <!-- Add more list elements as needed with their respective prices -->
                      </ul>
                    </div>

                    <!-- Card Footer (Optional) -->
                    <div class="card-footer">
                      <!-- Additional information can be included here if needed -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button
                type="button"
                class="btn btn-secondary"
                data-dismiss="modal"
              >
                Close
              </button>
            </div>
          </div>
        </div>
      </div>
    </section>