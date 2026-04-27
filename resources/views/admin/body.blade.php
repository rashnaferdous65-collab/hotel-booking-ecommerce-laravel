@php
    $stats = [
        ['icon' => 'icon-user-1', 'title' => 'New Clients', 'value' => 27, 'width' => 30, 'class' => 'dashbg-1'],
        ['icon' => 'icon-contract', 'title' => 'New Projects', 'value' => 375, 'width' => 70, 'class' => 'dashbg-2'],
        ['icon' => 'icon-paper-and-pencil', 'title' => 'New Invoices', 'value' => 140, 'width' => 55, 'class' => 'dashbg-3'],
        ['icon' => 'icon-writing-whiteboard', 'title' => 'All Projects', 'value' => 41, 'width' => 35, 'class' => 'dashbg-4'],
    ];
@endphp

<div class="page-content">
    <div class="page-header">
        <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Dashboard</h2>
        </div>
    </div>

    <section class="no-padding-top no-padding-bottom">
        <div class="container-fluid">
            <div class="row">

                @foreach($stats as $stat)
                    <div class="col-md-3 col-sm-6">
                        <div class="statistic-block block">
                            <div class="progress-details d-flex justify-content-between align-items-end">
                                <div class="title">
                                    <div class="icon"><i class="{{ $stat['icon'] }}"></i></div>
                                    <strong>{{ $stat['title'] }}</strong>
                                </div>
                                <div class="number {{ str_replace('bg', 'text', $stat['class']) }}">
                                    {{ $stat['value'] }}
                                </div>
                            </div>

                            <div class="progress progress-template">
                                <div class="progress-bar progress-bar-template {{ $stat['class'] }}"
                                     role="progressbar"
                                     style="width: {{ $stat['width'] }}%"
                                     aria-valuenow="{{ $stat['width'] }}"
                                     aria-valuemin="0"
                                     aria-valuemax="100">
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
</div>