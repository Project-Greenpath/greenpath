@extends ('layouts.layout')

@section('content')

<section class="dashboard">
    <div class="dashboard-card">
        <div class="dashboard-left">
            <canvas id="days-rem"></canvas>
            <div class="cta">Return Bicycle</div>
            <div class="cta-sec">Extend Borrow Period</div>
        </div>
        <div class="dashboard-right">
            <div class="cycle-info-card">
                <div class="cycle-pic"><img src="/images/cycle.jpg" alt="Bicycle"></div>
                <div class="cycle-info">
                    <h2 class="cycle-name">BMX Example Cycle</h2>
                    <p class="cycle-details">
                        <div class="owner-name">John Doe</div>
                        <div class="owner-year">2023</div>
                        <div class="owner-dept">Computer Science and Engineering</div>
                        <div class="owner-number">9876543210</div>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection