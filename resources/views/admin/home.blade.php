@include('admin.header')
<div class="main-panel">
        <div class="content bg-dark">
            <div class="panel-header bg-dark-gradient ">
                <div class="py-5 page-inner">
                    <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                        <div>
                            <h2 class="pb-2 text-white fw-bold">Dashboard</h2>
                            <h5 class="mb-2 text-white op-7">Welcome, {{Auth::user()->name}}</h5> 
                        </div>
                        <div class="py-2 ml-md-auto py-md-0">
                            <a href="{{route('admin.manage-deposit')}}" class="mr-2 btn btn-success btn-border ">Deposits</a>
                            <a href="{{route('admin.manage-withdrawal')}}" class="mr-2 btn btn-danger btn-border ">Withdrawals</a>
                            <a href="{{route('admin.manage.users')}}" class="btn btn-secondary ">Users</a>
                        </div>
                    </div>
                </div>
            </div>
            <div>
    </div>            <div>
    </div>         <div class="page-inner mt--5">
    <!-- Beginning of  Dashboard Stats  -->
    <div class="row row-card-no-pd bg-dark shadow-lg mt--2">
        
        <!-- Total Deposit -->
        <div class="col-sm-6 col-md-3">
            <div class="card card-stats card-round bg-dark full-height">
                <div class="card-body ">
                    <div class="row">
                        <div class="col-4">
                            <div class="text-center icon-big">
                                <i class="fa fa-download text-warning"></i>
                            </div>
                        </div>
                        <div class="col-8 col-stats">
                            <div class="numbers">
                                <p class="card-category">Total Deposit</p>
                                <h4 class="card-title text-light">{{ $totalDeposits }}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pending Deposit(s) -->
        <div class="col-sm-6 col-md-3">
            <div class="card card-stats card-round bg-dark full-height">
                <div class="card-body ">
                    <div class="row">
                        <div class="col-4">
                            <div class="text-center icon-big">
                                <i class="flaticon-download text-info"></i>
                            </div>
                        </div>
                        <div class="col-8 col-stats">
                            <div class="numbers">
                                <p class="card-category">Pending Deposit(s)</p>
                                <h4 class="card-title text-light">{{ $pendingDeposits }}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Total Withdrawal -->
        <div class="col-sm-6 col-md-3">
            <div class="card card-stats card-round bg-dark full-height">
                <div class="card-body">
                    <div class="row">
                        <div class="col-4">
                            <div class="text-center icon-big">
                                <i class="flaticon-arrows-1 text-danger"></i>
                            </div>
                        </div>
                        <div class="col-8 col-stats">
                            <div class="numbers">
                                <p class="card-category">Total Withdrawal</p>
                                <h4 class="card-title text-light">{{ $totalWithdrawals }}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pending Withdrawal -->
        <div class="col-sm-6 col-md-3">
            <div class="card card-stats card-round bg-dark full-height">
                <div class="card-body">
                    <div class="row">
                        <div class="col-4">
                            <div class="text-center icon-big">
                                <i class="flaticon-arrow text-secondary"></i>
                            </div>
                        </div>
                        <div class="col-8 col-stats">
                            <div class="numbers">
                                <p class="card-category">Pending Withdrawal</p>
                                <h4 class="card-title text-light">{{ $pendingWithdrawals }}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Total Users -->
        <div class="col-sm-6 col-md-3">
            <div class="card card-stats card-round bg-dark">
                <div class="card-body ">
                    <div class="row">
                        <div class="col-4">
                            <div class="text-center icon-big">
                                <i class="flaticon-users text-success"></i>
                            </div>
                        </div>
                        <div class="col-8 col-stats">
                            <div class="numbers">
                                <p class="card-category">Total Users</p>
                                <h4 class="card-title text-light">{{ $totalUsers }}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Block Users -->
        <div class="col-sm-6 col-md-3">
            <div class="card card-stats card-round bg-dark">
                <div class="card-body ">
                    <div class="row">
                        <div class="col-4">
                            <div class="text-center icon-big">
                                <i class="flaticon-remove-user text-danger"></i>
                            </div>
                        </div>
                        <div class="col-8 col-stats">
                            <div class="numbers">
                                <p class="card-category">Users</p>
                                <h4 class="card-title text-light"></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Active Users -->
        <div class="col-sm-6 col-md-3">
            <div class="card card-stats card-round bg-dark">
                <div class="card-body ">
                    <div class="row">
                        <div class="col-4">
                            <div class="text-center icon-big">
                                <i class="flaticon-user-2 text-success"></i>
                            </div>
                        </div>
                        <div class="col-8 col-stats">
                            <div class="numbers">
                                <p class="card-category">Active Users</p>
                                <h4 class="card-title text-light">{{$activeUsers}}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Total Bots Purchased -->
        <div class="col-sm-6 col-md-3">
            <div class="card card-stats card-round bg-dark">
                <div class="card-body ">
                    <div class="row">
                        <div class="col-4">
                            <div class="text-center icon-big">
                                <i class="flaticon-diagram text-warning"></i>
                            </div>
                        </div>
                        <div class="col-8 col-stats">
                            <div class="numbers">
                                <p class="card-category">Total Bots Purchased</p>
                                <h4 class="card-title text-light">{{ $totalBotsPurchased }}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

                {{-- <div class="row">
                    <div class="col-md-12">
                        <div class="overflow-auto">
                            <canvas id="myChart" height="100" class="text-light" ></canvas>
                        </div>
                        
                        <script>
                            var ctx = document.getElementById('myChart').getContext('2d');
                            var myChart = new Chart(ctx, {
                                type: 'bar',
                                data: {
                                    labels: ['Deposit', 'Pending Deposit', 'Withdrawal', 'Pending Withdrawal', 'Total Transactions'],
                                    datasets: [{
                                        label: "# System Statistics in $",
                                        data: [
                                            "2803458880", 
                                            "203000",
                                            "1040200", 
                                            "500", 
                                            "10052830559675.262"
                                            ],
                                        backgroundColor: [
                                            'rgba(255, 99, 132, 0.2)',
                                            'rgba(54, 162, 235, 0.2)',
                                            'rgba(255, 206, 86, 0.2)',
                                            'rgba(75, 192, 192, 0.2)',
                                            'rgba(153, 102, 255, 0.2)'
                                        ],
                                        borderColor: [
                                            'rgba(255, 99, 132, 1)',
                                            'rgba(54, 162, 235, 1)',
                                            'rgba(255, 206, 86, 1)',
                                            'rgba(75, 192, 192, 1)',
                                            'rgba(153, 102, 255, 1)'
                                        ],
                                        borderWidth: 1
                                    }]
                                },
                                options: {
                                    scales: {
                                        y: {
                                            beginAtZero: true
                                        }
                                    }
                                }
                            });
                        </script>
                    </div>
                </div>
            </div> 
        </div>--}}

@include('admin.footer')
				