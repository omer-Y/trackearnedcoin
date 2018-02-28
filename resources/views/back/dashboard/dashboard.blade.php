@extends('back.cover')
@section('content')
    <div id='mainContent'>
        <div class="row gap-20 masonry pos-r">
            <div class="masonry-sizer col-md-6"></div>
            <div class="masonry-item  w-100">
                <div class="row gap-20">
                    <!-- #Toatl Visits ==================== -->
                    <div class='col-md-3'>
                        <div class="layers bd bgc-white p-20">
                            <div class="layer w-100 mB-10">
                                <h6 class="lh-1">@lang('dashboard/page.zpool_balance')</h6>
                            </div>
                            <div class="layer w-100">
                                <div class="peers ai-sb fxw-nw">
                                    <div class="peer peer-greed">
                                        <span id="sparklinedash"></span>
                                    </div>
                                    <div class="peer">
                                        <span class="d-ib lh-0 va-m fw-600 bdrs-10em pX-15 pY-15 bgc-green-50 c-green-500">+10%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- #Total Page Views ==================== -->
                    <div class='col-md-3'>
                        <div class="layers bd bgc-white p-20">
                            <div class="layer w-100 mB-10">
                                <h6 class="lh-1">@lang('dashboard/page.miningpoolhub_balance')</h6>
                            </div>
                            <div class="layer w-100">
                                <div class="peers ai-sb fxw-nw">
                                    <div class="peer peer-greed">
                                        <span id="sparklinedash2"></span>
                                    </div>
                                    <div class="peer">
                                        <span class="d-ib lh-0 va-m fw-600 bdrs-10em pX-15 pY-15 bgc-red-50 c-red-500">-7%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- #Unique Visitors ==================== -->
                    <div class='col-md-3'>
                        <div class="layers bd bgc-white p-20">
                            <div class="layer w-100 mB-10">
                                <h6 class="lh-1">@lang('dashboard/page.hashrafinery_balance')</h6>
                            </div>
                            <div class="layer w-100">
                                <div class="peers ai-sb fxw-nw">
                                    <div class="peer peer-greed">
                                        <span id="sparklinedash3"></span>
                                    </div>
                                    <div class="peer">
                                        <span class="d-ib lh-0 va-m fw-600 bdrs-10em pX-15 pY-15 bgc-purple-50 c-purple-500">~12%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- #Bounce Rate ==================== -->
                    <div class='col-md-3'>
                        <div class="layers bd bgc-white p-20">
                            <div class="layer w-100 mB-10">
                                <h6 class="lh-1">@lang('dashboard/page.ahashpool_balance')</h6>
                            </div>
                            <div class="layer w-100">
                                <div class="peers ai-sb fxw-nw">
                                    <div class="peer peer-greed">
                                        <span id="sparklinedash4"></span>
                                    </div>
                                    <div class="peer">
                                        <span class="d-ib lh-0 va-m fw-600 bdrs-10em pX-15 pY-15 bgc-blue-50 c-blue-500">33%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="masonry-item  w-100">
                <div class="row gap-20">
                    <!-- #Toatl Visits ==================== -->
                    <div class='col-md-3'>
                        <div class="layers bd bgc-white p-20">
                            <div class="layer w-100 mB-10">
                                <h6 class="lh-1">@lang('dashboard/page.nanopool_balance')</h6>
                            </div>
                            <div class="layer w-100">
                                <div class="peers ai-sb fxw-nw">
                                    <div class="peer peer-greed">
                                        <span id="sparklinedash"></span>
                                    </div>
                                    <div class="peer">
                                        <span class="d-ib lh-0 va-m fw-600 bdrs-10em pX-15 pY-15 bgc-green-50 c-green-500">+10%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- #Total Page Views ==================== -->
                    <div class='col-md-3'>
                        <div class="layers bd bgc-white p-20">
                            <div class="layer w-100 mB-10">
                                <h6 class="lh-1">@lang('dashboard/page.nicehash_balance')</h6>
                            </div>
                            <div class="layer w-100">
                                <div class="peers ai-sb fxw-nw">
                                    <div class="peer peer-greed">
                                        <span id="sparklinedash2"></span>
                                    </div>
                                    <div class="peer">
                                        <span class="d-ib lh-0 va-m fw-600 bdrs-10em pX-15 pY-15 bgc-red-50 c-red-500">-7%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- #Unique Visitors ==================== -->
                    <div class='col-md-3'>
                        <div class="layers bd bgc-white p-20">
                            <div class="layer w-100 mB-10">
                                <h6 class="lh-1">@lang('dashboard/page.new_pool')</h6>
                            </div>
                            <div class="layer w-100">
                                <div class="peers ai-sb fxw-nw">
                                    <div class="peer peer-greed">
                                        <span id="sparklinedash3"></span>
                                    </div>
                                    <div class="peer">
                                        <span class="d-ib lh-0 va-m fw-600 bdrs-10em pX-15 pY-15 bgc-purple-50 c-purple-500">~12%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- #Bounce Rate ==================== -->
                    <div class='col-md-3'>
                        <div class="layers bd bgc-white p-20">
                            <div class="layer w-100 mB-10">
                                <h6 class="lh-1">@lang('dashboard/page.new_pool')</h6>
                            </div>
                            <div class="layer w-100">
                                <div class="peers ai-sb fxw-nw">
                                    <div class="peer peer-greed">
                                        <span id="sparklinedash4"></span>
                                    </div>
                                    <div class="peer">
                                        <span class="d-ib lh-0 va-m fw-600 bdrs-10em pX-15 pY-15 bgc-blue-50 c-blue-500">33%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="masonry-item  w-100">
                <div class="row gap-20">
                    <div class="col-md-12">
                        <!-- #Monthly Stats ==================== -->
                        <div class="bd bgc-white">
                            <div class="layers">
                                <div class="layer w-100 pX-20 pT-20">
                                    <h6 class="lh-">@lang('dashboard/page.earning_graphs')</h6>
                                </div>
                                <div class="layer w-100 p-20">
                                    <canvas id="myChart" height="220" ></canvas>
                                    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.bundle.js"></script>

                                    <script>
                                        var ctx = document.getElementById("myChart");
                                        ctx.height = 80;
                                        const lineCtx = ctx.getContext('2d');


                                        var myChart = new Chart(lineCtx, {
                                            type: 'line',
                                            data: {
                                                labels: ["Pazartesi", "Salı", "Çarşamba", "Perşembe", "Cuma", "Cumartesi","Pazar"],
                                                datasets: [{
                                                    label: '# of Votes',
                                                    data                 : [60, 50, 70, 60, 50, 70, 60],
                                                    borderColor: [
                                                        'rgba(255,99,132,1)',
                                                    ],
                                                    borderWidth: 2
                                                },
                                                    {
                                                        label: '# of Votes',
                                                        data                 : [123, 123, 123, 123, 144, 124, 60],
                                                        borderColor: [
                                                            'rgba(255,99,132,1)',
                                                        ],
                                                        borderWidth: 2
                                                    },
                                                    {
                                                        label: '# of Votes',
                                                        data                 : [1, 54, 76, 78, 45, 34, 95],
                                                        borderColor: [
                                                            'rgba(255,99,132,1)',
                                                        ],
                                                        borderWidth: 2
                                                    }]
                                            },
                                            options: {
                                                legend: {
                                                    display: false,
                                                },
                                            }
                                        });
                                    </script>
                                </div>
                                <div class="layer bdT p-20 w-100">
                                    <div class="peers ai-c jc-c gapX-20">
                                        <div class="peer">
                                            <span class="fsz-def fw-600 mR-10 c-grey-800">10% <i class="fa fa-level-up c-green-500"></i></span>
                                            <small class="c-grey-500 fw-600">@lang('dashboard/page.zpool_change')</small>
                                        </div>
                                        <div class="peer fw-600">
                                            <span class="fsz-def fw-600 mR-10 c-grey-800">2% <i class="fa fa-level-down c-red-500"></i></span>
                                            <small class="c-grey-500 fw-600">@lang('dashboard/page.miningpoolhub_change')</small>
                                        </div>
                                        <div class="peer fw-600">
                                            <span class="fsz-def fw-600 mR-10 c-grey-800">15% <i class="fa fa-level-up c-green-500"></i></span>
                                            <small class="c-grey-500 fw-600">@lang('dashboard/page.hashrafinery_change')</small>
                                        </div>
                                        <div class="peer fw-600">
                                            <span class="fsz-def fw-600 mR-10 c-grey-800">8% <i class="fa fa-level-down c-red-500"></i></span>
                                            <small class="c-grey-500 fw-600">@lang('dashboard/page.ahashpool_change')</small>
                                        </div>
                                        <div class="peer fw-600">
                                            <span class="fsz-def fw-600 mR-10 c-grey-800">8% <i class="fa fa-level-down c-red-500"></i></span>
                                            <small class="c-grey-500 fw-600">@lang('dashboard/page.nanopool_change')</small>
                                        </div>
                                        <div class="peer fw-600">
                                            <span class="fsz-def fw-600 mR-10 c-grey-800">8% <i class="fa fa-level-down c-red-500"></i></span>
                                            <small class="c-grey-500 fw-600">@lang('dashboard/page.nicehash_change')</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
@section('title')
    @lang('dashboard/title.title')
@endsection
@section('style')
@endsection
@section('script')

@endsection