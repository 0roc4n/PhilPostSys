<x-app-layout>
<style>

    /* =========== Google Fonts ============ */
@import url("https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap");

/* =============== Globals ============== */
* {
  /*font-family: "RockoFLF", sans-serif;*/
  
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

:root {
  --blue: #2C54FF;
  --white: #fff;
  --gray: #f5f5f5;
  --black1: #222;
  --black2: #999;
}

body {
  min-height: 100vh;
  overflow-x: hidden;
}

.container {
  position: relative;
  width: 100%;
}

/* =============== Navigation ================ */
.navigation {
  position: fixed;
  width: 300px;
  height: 100%;
  background: #2C54FF;
  border-left: 0px solid var(--blue);
  transition: 0.5s;
  overflow: hidden;
}
.navigation.active {
  width: 80px;
}

.navigation ul {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
}

.navigation ul li {
  position: relative;
  width: 100%;
  list-style: none;
  border-top-left-radius: 30px;
  border-bottom-left-radius: 30px;
}

.navigation ul li:hover,
.navigation ul li.hovered {
  background-color: var(--white);
}

.navigation ul li:nth-child(1) {
  margin-bottom: 40px;
  pointer-events: none;
}

.navigation ul li a {
  position: relative;
  display: block;
  width: 100%;
  display: flex;
  text-decoration: none;
  color: var(--white);
}
.navigation ul li:hover a,
.navigation ul li.hovered a {
  color: var(--blue);
}

.navigation ul li a .icon {
  position: relative;
  display: block;
  min-width: 100px;
  height: 40px;
  line-height: 40px;
  padding-top: .9vh;
  padding-left: 0vh;
  text-align: center;
}
.navigation ul li a .icon ion-icon {
  font-size: 1.9rem;
}

.navigation ul li a .title {
  position: relative;
  display: block;
  padding-left: 0px;
  transform: translate(-19px, -1px);;
  height: 60px;
  line-height: 60px;
  text-align: start;
  white-space: nowrap;
}

/* --------- curve outside ---------- */
.navigation ul li:hover a::before,
.navigation ul li.hovered a::before {
  content: "";
  position: absolute;
  right: 0;
  top: -50px;
  width: 50px;
  height: 50px;
  background-color: transparent;
  border-radius: 50%;
  box-shadow: 35px 35px 0 10px var(--white);
  pointer-events: none;
}
.navigation ul li:hover a::after,
.navigation ul li.hovered a::after {
  content: "";
  position: absolute;
  right: 0;
  bottom: -50px;
  width: 50px;
  height: 50px;
  background-color: transparent;
  border-radius: 50%;
  box-shadow: 35px -35px 0 10px var(--white);
  pointer-events: none;
}

/* ===================== Main ===================== */
.main {
  position: absolute;
  width: calc(100% - 300px);
  left: 300px;
  min-height: 100vh;
  background: var(--white);
  transition: 0.5s;
}
.main.active {
  width: calc(100% - 80px);
  left: 80px;
}

.topbar {
  width: 100%;
  height: 60px;
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 0 10px;
}

.toggle {
  position: relative;
  width: 30px;
  height: 30px;
  display: flex;
  justify-content: center;
  align-items: center;
  font-size: 1.4rem;
  cursor: pointer;
}

.search {
  position: relative;
  width: 400px;
  margin: 0 10px;
}

.search label {
  position: relative;
  width: 100%;
}

.search label input {
  width: 100%;
  height: 40px;
  border-radius: 40px;
  padding: 5px 20px;
  padding-left: 35px;
  font-size: 18px;
  outline: none;
  border: 1px solid var(--black2);
}

.search label ion-icon {
  position: absolute;
  top: 0;
  left: 10px;
  font-size: 1.2rem;
}

.user {
  position: relative;
  width: 40px;
  height: 40px;
  border-radius: 50%;
  overflow: hidden;
  cursor: pointer;
}

.user img {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  object-fit: cover;
}

/* ======================= Cards ====================== */
.cardBox {
  position: relative;
  width: 100%;
  padding: 20px;
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  grid-gap: 15px;
}

.cardBox .card {
  position: relative;
  background: var(--white);
  padding: 10px;
  border-radius: 15px;
  display: flex;
  justify-content: space-between;
  cursor: pointer;
  box-shadow: 0 7px 25px rgba(0, 0, 0, 0.08);
  line-height: 20px;
  overflow: hidden; /* Add overflow hidden to hide any whitespace */
}

.cardBox .card .numbers {
  position: relative;
  padding: 1px;
  font-weight: 500;
  font-size: 1.5rem;
  color: var(--blue);
}

.cardBox .card .cardName {
  color: var(--black2);
  font-size: 12px;
  margin-top: 5px;
  line-height: 11px; /* Adjust line-height for better readability */
  white-space: nowrap; /* Prevent text from wrapping */
  overflow: hidden; /* Hide any overflow */
  text-overflow: ellipsis; /* Show ellipsis (...) for overflowed text */
}


.cardBox .card .iconBx {
  font-size: 30px;
  color: var(--black2);
  padding-right: 15px;
  white-space: nowrap; /* Prevent text from wrapping */
  overflow: hidden; /* Hide any overflow */
}

.cardBox .card:hover {
  background: var(--blue);
}
.cardBox .card:hover .numbers,
.cardBox .card:hover .cardName,
.cardBox .card:hover .iconBx {
  color: var(--white);
 
}

/* ================== Order Details List ============== */
.details {
  position: relative;
  width: 100%;
  padding: 20px;
  display: grid;
  grid-template-columns: 3fr 1fr;
  grid-gap: 10px;
  text-decoration: none;
  /* margin-top: 10px; */
}

.details .recentOrders {
  position: relative;
  text-decoration: none;
  display: grid;
  min-height: 500px;
  background: var(--white);
  padding: 20px;
  box-shadow: 0 7px 25px rgba(0, 0, 0, 0.08);
  border-radius: 20px;

}

.details .cardHeader {
  display: flex;
  justify-content: space-between;
  align-items: flex-start;
  text-decoration: none;
}
.cardHeader h2 {
  font-weight: 600;
  color: var(--blue);
  text-decoration: none;
}
.cardHeader .btn {
  position: relative;
  padding: 5px 10px;
  background: var(--blue);
  text-decoration: none;
  color: var(--white);
  border-radius: 10px;
}

.details table {
  width: 100%;
  border-collapse: collapse;
  margin-top: -120px;
  text-decoration: none;
}
.details table thead td {
  font-weight: 600;
  text-decoration: none;
}
.details .recentOrders table tr {
  color: var(--black1);
  border-bottom: 1px solid rgba(0, 0, 0, 0.1);
  text-decoration: none;
}
.details .recentOrders table tr:last-child {
  border-bottom: none;
  text-decoration: none;
}
.details .recentOrders table tbody tr:hover {
  background: var(--gray);
  color: var(--blue);
  border-radius: 20px;
  text-decoration: none;
}
.details .recentOrders table tr td {
  padding: 1px;
  text-decoration: none;
}
.details .recentOrders table tr td:last-child {
  text-align: end;
  text-decoration: none;
}
.details .recentOrders table tr td:nth-child(2) {
  text-align: end;
  text-decoration: none;
}
.details .recentOrders table tr td:nth-child(3) {
  text-align: center;
  text-decoration: none;
}
.status.delivered {
  padding: 4px 7px;
  background: #1AEEA2;
  color: var(--white);
  border-radius: 20px;
  font-size: 14px;
  font-weight: 500;
}
.status.pending {
  padding: 4px 7px;
  background: #FCCD49;
  color: var(--white);
  border-radius: 20px;
  font-size: 14px;
  font-weight: 500;
}
.status.return {
  padding: 4px 7px;
  background: #FD0752;
  color: var(--white);
  border-radius: 20px;
  font-size: 14px;
  font-weight: 500;
}
.status.inProgress {
  padding: 4px 7px;
  background: #1877f2;
  color: var(--white);
  border-radius: 20px;
  font-size: 14px;
  font-weight: 500;
}

.recentCustomers {
  position: relative;
  display: grid;
  min-height: 500px;
  padding: 21px;
  background: var(--white);
  box-shadow: 0 7px 25px rgba(0, 0, 0, 0.08);
  border-radius: 20px;
}
.recentCustomers .imgBx {
  position: relative;
  width: 30px;
  height: 30px;
  border-radius: 50px;
  overflow: hidden;
}
.recentCustomers .imgBx img {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  object-fit: cover;
}
.recentCustomers table tr td {
  padding-top: 2px;
}
.recentCustomers table tr td h4 {
  font-size: 14px;
  font-weight: 500;
  line-height: 1rem;
}
.recentCustomers table tr td h4 span {
  font-size: 12px;
  color: var(--black2);
}
.recentCustomers table tr:hover {
  background: var(--gray);
  color: var(--blue);
}
.recentCustomers table tr:hover td h4 span {
  color: var(--black1);
}
.card,
.box-container {
  border-radius: 15px;
}
/* ====================== Responsive Design ========================== */
@media (max-width: 991px) {
  .navigation {
    left: -300px;
  }
  .navigation.active {
    width: 300px;
    left: 0;
  }
  .main {
    width: 100%;
    left: 0;
  }
  .main.active {
    left: 300px;
  }
  .cardBox {
    grid-template-columns: repeat(2, 1fr);
  }
}

@media (max-width: 768px) {
  .details {
    grid-template-columns: 1fr;
  }
  .recentOrders {
    overflow-x: auto;

  }
  .status.inProgress {
    white-space: nowrap;
  }
}

@media (max-width: 480px) {
  .cardBox {
    grid-template-columns: repeat(1, 1fr);
  }
  .cardHeader h2 {
    font-size: 20px;
  }
  .user {
    min-width: 40px;
  }
  .navigation {
    width: 100%;
    left: -100%;
    z-index: 1000;
  }
  .navigation.active {
    width: 100%;
    left: 0;
  }
  .toggle {
    z-index: 10001;
  }
  .main.active .toggle {
    color: #fff;
    position: fixed;
    right: 0;
    left: initial;
  }

  .abbrevcount {
    margin-left: 5px; /* Adjust the margin as needed */
}

}

</style>

<div class="mt-3 sm:ml-4 lg:mx-3 lg:ml-60 xl:ml-80">
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

        <!-- ======================= Cards ================== -->
        <div class="cardBox">
            <div class="card">
                <div class="row">
                    <!-- Left Column for Number and Title -->
                    <div class="col">
                        <a href="/tracer">
                            <div class="numbers">{{ $totalTransmittals }}</div>
                            <div class="cardName">No. of Transmittals</div>
                        </a>
                    </div>

                    <!-- Right Column for Icon -->
                    <div class="col-auto iconBx">
                        <i class="fa-solid fa-envelope-open-text"></i>
                    </div>
                </div>
            </div>

            <div class="card">
              <div class="row">
                  <!-- First Column for Number or Count -->
                  <div class="col">
                      <a href="/tracer">
                          <div class="numbers">{{ $tolNo }}</div>
                      </a>
                  </div>

                  <!-- Second Column for Date and Text -->
                  <div class="col">
                      <a href="/tracer">
                          <div class="cardName">Most No. of Transmittals</div>
                          <div class="cardName">{{ \Carbon\Carbon::parse($freqDate)->format('F j, Y') }}</div>
                      </a>
                  </div>

                  <!-- Third Column for Icon -->
                  <div class="col-auto iconBx">
                      <i class="fa-solid fa-paper-plane"></i>
                  </div>
              </div>
          </div>



            <div class="card">
                <div class="row">
                    <!-- Left Column for Number and Title -->
                    <div class="col">
                        <a href="/tracer">
                        <div class="numbers">
                            {{ $mostUsedAbbreviation }}
                            <span class="abbrevcount">{{ $mostUsedAbbreviationCount }}</span>
                        </div>
                        <div class="cardName">Top Transmittals</div>
                        
                        </a>
                    </div>

                    <!-- Right Column for Icon -->
                    <div class="col-auto iconBx">
                        <i class="fa-solid fa-building-columns"></i>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="row">
                    <!-- Left Column for Number and Title -->
                    <div class="col">
                        <a href="/show-addressee">
                            <div class="numbers">{{ $totalAddressees }}</div>
                            <div class="cardName">No. of Addressees</div>
                        </a>
                    </div>

                    <!-- Right Column for Icon -->
                    <div class="col-auto iconBx">
                        <i class="fa-solid fa-person-circle-check"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mx-2">
            <div class="col-md-8">
                <div class="ml-4 p-3 text-gray-700 mb-0 font-bold">
                    Monthly Return Count and Return Rate
                </div>

                <!-- Include ApexCharts script -->
                <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

                <div class="  ">
                    <!-- Chart container -->
                    <div id="chart" class="w-full"></div>

                    <!-- Your chart script -->
                    <script>                
                        var options = {
                            series: [
                                {
                                    name: 'Return Count',
                                    type: 'line', // Change the type to line
                                    data: [10, 15, 8, 20, 12, 25, 18, 22, 30, 16, 12, 28]
                                },
                                {
                                    name: 'Return Rate',
                                    type: 'line', // Change the type to line
                                    data: [1, 4, 2, 5, 3, 6, 5, 17, 9, 4, 3, 7]
                                }
                            ],
                            chart: {
                                height: 350,
                                type: 'line',
                                stacked: false,
                                toolbar: {
                                    show: false
                                }
                            },
                            dataLabels: {
                                enabled: false
                            },
                            stroke: {
                                curve: 'smooth'
                            },
                            xaxis: {
                                categories: [
                                    @foreach($transmittalsChar as $date),
                                        '{{ $date }}',
                                    @endforeach
                                ]
                            },
                            yaxis: [
                                {
                                    axisTicks: {
                                        show: true,
                                    },
                                    axisBorder: {
                                        show: true,
                                        color: '#008FFB'
                                    },
                                    labels: {
                                        style: {
                                            color: '#008FFB',
                                        }
                                    },
                                    title: {
                                        text: "Return Count",
                                        style: {
                                            color: '#008FFB',
                                        }
                                    },
                                    tooltip: {
                                        enabled: true
                                    }
                                },
                                {
                                    seriesName: 'Return Rate',
                                    opposite: true,
                                    axisTicks: {
                                        show: true,
                                    },
                                    axisBorder: {
                                        show: true,
                                        color: '#00E396'
                                    },
                                    labels: {
                                        style: {
                                            color: '#00E396',
                                        }
                                    },
                                    title: {
                                        text: "Return Rate",
                                        style: {
                                            color: '#00E396',
                                        }
                                    },
                                },
                            ],
                            tooltip: {
                                shared: true,
                                intersect: false,
                                y: {
                                    formatter: function (y) {
                                        if(typeof y !== "undefined") {
                                            return y.toFixed(0) + " returns";
                                        }
                                        return y;
                                    }
                                }
                            }
                        };

                        var chart = new ApexCharts(document.querySelector("#chart"), options);
                        chart.render();
                    </script>
                </div>
            </div>

            <div class="col mt-4 mb-2">
              <div class="text-gray-700 font-bold text-center">Top Transmittal</div>
              <div class="card mt-2 shadow">
                  <div class="card-body">
                      @if($mostUsedAddresses->isEmpty())
                          <p class="text-center">Empty Addressee</p>
                      @else
                          @foreach($mostUsedAddresses as $index => $topdept)
                          <div class="box-container border mb-2 whitespace-nowrap">
                              <div class="row py-2 mx-1 d-flex ">
                                  <div class="col whitespace-nowrap" style="font-size: 13px; font-weight: 600;">{{ $topdept->abbrev }}</div>
                                  <div class="col-2 justify-end mx-2">
                                      <div class="bg-blue-600 rounded text-white inline-block px-2" style="font-size: 13px;">{{ $topdept->address_count }}</div>
                                  </div>
                              </div>
                          </div>
                          @endforeach
                      @endif
                  </div>
              </div>
          </div>
          
        </div>
    </div>
</div>

</x-app-layout>
