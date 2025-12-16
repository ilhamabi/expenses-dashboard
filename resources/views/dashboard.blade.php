@extends('layouts.app')

@section('content')
<div class="container-fluid p-0">
    <div class="main-card shadow-lg">
        <div class="row h-100 m-0">
            <!-- Middle Content -->
            <div class="col-lg-9 p-5">
                <div class="d-flex justify-content-between align-items-start mb-5">
                    <div>
                        <h1 class="fw-bold mb-1">Expenses</h1>
                        <p class="text-muted mb-0">01 - 25 March, 2020</p>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="d-flex me-3">
                            <img src="https://i.pravatar.cc/150?img=32" class="rounded-circle border border-2 border-white" width="35" height="35" style="margin-right: -10px;">
                            <img src="https://i.pravatar.cc/150?img=12" class="rounded-circle border border-2 border-white" width="35" height="35" style="margin-right: -10px;">
                            <img src="https://i.pravatar.cc/150?img=59" class="rounded-circle border border-2 border-white" width="35" height="35">
                        </div>
                        <button class="btn btn-light rounded-circle d-flex align-items-center justify-content-center" style="width: 35px; height: 35px; border: 1px solid #ddd;">
                            <i class="bi bi-plus text-muted"></i>
                        </button>
                    </div>
                </div>

                <!-- Chart -->
                <div class="mb-5">
                    <x-expense-chart />
                </div>

                <!-- Expense List -->
                <div class="expense-list">
                    <div class="d-flex justify-content-between align-items-center mb-3 border-bottom pb-3">
                        <h5 class="fw-bold mb-0">Today</h5>
                        <i class="bi bi-three-dots text-muted"></i>
                    </div>

                    <!-- Item 1 -->
                    <div class="d-flex justify-content-between align-items-center expense-item">
                        <div class="d-flex align-items-center">
                            <div class="icon-circle icon-grocery me-3">
                                <i class="bi bi-cart"></i>
                            </div>
                            <div>
                                <div class="fw-bold">Grocery</div>
                                <small class="text-muted">5:12 pm • Belanja di pasar</small>
                            </div>
                        </div>
                        <div class="fw-bold fs-5">-326.800</div>
                    </div>

                    <!-- Item 2 -->
                    <div class="d-flex justify-content-between align-items-center expense-item">
                        <div class="d-flex align-items-center">
                            <div class="icon-circle icon-transport me-3">
                                <i class="bi bi-bus-front"></i>
                            </div>
                            <div>
                                <div class="fw-bold">Transportation</div>
                                <small class="text-muted">5:12 pm • Naik bus umum</small>
                            </div>
                        </div>
                        <div class="fw-bold fs-5">-15.000</div>
                    </div>

                    <!-- Item 3 -->
                    <div class="d-flex justify-content-between align-items-center expense-item">
                        <div class="d-flex align-items-center">
                            <div class="icon-circle icon-housing me-3">
                                <i class="bi bi-house-door"></i>
                            </div>
                            <div>
                                <div class="fw-bold">Housing</div>
                                <small class="text-muted">5:12 pm • Bayar Listrik</small>
                            </div>
                        </div>
                        <div class="fw-bold fs-5">-185.750</div>
                    </div>

                    <div class="d-flex justify-content-between align-items-center mb-3 mt-4 border-bottom pb-3">
                        <h5 class="fw-bold mb-0">Monday, 23 March 2020</h5>
                        <i class="bi bi-three-dots text-muted"></i>
                    </div>

                    <!-- Item 4 -->
                    <div class="d-flex justify-content-between align-items-center expense-item">
                        <div class="d-flex align-items-center">
                            <div class="icon-circle icon-food me-3">
                                <i class="bi bi-cup-hot"></i>
                            </div>
                            <div>
                                <div class="fw-bold">Food and Drink</div>
                                <small class="text-muted">5:12 pm • Makan Steak</small>
                            </div>
                        </div>
                        <div class="fw-bold fs-5">-156.000</div>
                    </div>

                    <!-- Item 5 -->
                    <div class="d-flex justify-content-between align-items-center expense-item">
                        <div class="d-flex align-items-center">
                            <div class="icon-circle icon-entertainment me-3">
                                <i class="bi bi-play-circle"></i>
                            </div>
                            <div>
                                <div class="fw-bold">Entertainment</div>
                                <small class="text-muted">5:12 pm • Nonton Bioskop</small>
                            </div>
                        </div>
                        <div class="fw-bold fs-5">-35.200</div>
                    </div>
                </div>
            </div>

            <!-- Right Summary Panel -->
            <div class="col-lg-3 p-5" style="background-color: #F9FAFC;">
                <h5 class="fw-bold mb-4">Where your money go?</h5>

                <div class="mt-4 mb-4">
                    <div class="d-flex justify-content-between progress-label">
                        <span>Food and Drinks</span>
                        <span>872.400</span>
                    </div>
                    <div class="custom-progress">
                        <div class="bar" style="width: 30%; background-color: #31ba96;"></div>
                    </div>
                </div>

                <div class="mb-4">
                    <div class="d-flex justify-content-between progress-label">
                        <span>Shopping</span>
                        <span>1.378.200</span>
                    </div>
                    <div class="custom-progress">
                        <div class="bar" style="width: 50%; background-color: #31ba96;"></div>
                    </div>
                </div>

                <div class="mb-4">
                    <div class="d-flex justify-content-between progress-label">
                        <span>Housing</span>
                        <span>928.500</span>
                    </div>
                    <div class="custom-progress">
                        <div class="bar" style="width: 35%; background-color: #31ba96;"></div>
                    </div>
                </div>

                <div class="mb-4">
                    <div class="d-flex justify-content-between progress-label">
                        <span>Transportation</span>
                        <span>420.700</span>
                    </div>
                    <div class="custom-progress">
                        <div class="bar" style="width: 20%; background-color: #31ba96;"></div>
                    </div>
                </div>

                <div class="mb-5">
                    <div class="d-flex justify-content-between progress-label">
                        <span>Vehicle</span>
                        <span>520.000</span>
                    </div>
                    <div class="custom-progress">
                        <div class="bar" style="width: 25%; background-color: #31ba96;"></div>
                    </div>
                </div>

                <div class="save-money-card mt-auto position-relative">
                    <div class="d-flex justify-content-between align-items-end mb-2">
                        <img src="{{ asset('images/box-ilustration.png') }}" width="60" alt="Boxes">
                        <img src="{{ asset('images/plant-ilustration.png') }}" width="50" alt="Plant">
                    </div>
                    <div>
                        <h5 class="fw-bold mb-2">Save more money</h5>
                        <p class="text-muted small mb-4">eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</p>
                    </div>
                    <button class="btn btn-dark-custom w-100">VIEW TIPS</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection