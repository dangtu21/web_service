@extends('mainMenu')

@section('css')

@endsection

@section('content')
<div class="page-content">
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Tables</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active">Lịch sử mua hàng </li>
                </ol>
            </nav>
        </div>
        
    </div>
    <!--end breadcrumb-->
    <h6 class="mb-0 text-uppercase">Lịch sử mua hàng </h6>
    <hr>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <div id="example_wrapper" class="dataTables_wrapper dt-bootstrap5">
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="dataTables_length" id="example_length"><label>Show <select name="example_length"
                                        aria-controls="example" class="form-select form-select-sm">
                                        <option value="10">10</option>
                                        <option value="25">25</option>
                                        <option value="50">50</option>
                                        <option value="100">100</option>
                                    </select> entries</label></div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div id="example_filter" class="dataTables_filter"><label>Search:<input type="search"
                                        class="form-control form-control-sm" placeholder=""
                                        aria-controls="example"></label></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                        <table id="example" class="table table-striped table-bordered dataTable" style="width:100%"
                                role="grid" aria-describedby="example_info">
    <colgroup>
        <col>
        <col>
    </colgroup>
    <thead class="ant-table-thead">
        <tr>
            <th class=""><span class="ant-table-header-column">
                    <div><span class="ant-table-column-title">Tên</span><span class="ant-table-column-sorter"></span>
                    </div>
                </span></th>
            <th class="ant-table-align-center ant-table-row-cell-last" style="text-align: center;"><span
                    class="ant-table-header-column">
                    <div><span class="ant-table-column-title"><span><span>Trạng Thái <i
                                        aria-label="icon: question-circle" class="anticon anticon-question-circle"><svg
                                            viewBox="64 64 896 896" focusable="false" class=""
                                            data-icon="question-circle" width="1em" height="1em" fill="currentColor"
                                            aria-hidden="true">
                                            <path
                                                d="M512 64C264.6 64 64 264.6 64 512s200.6 448 448 448 448-200.6 448-448S759.4 64 512 64zm0 820c-205.4 0-372-166.6-372-372s166.6-372 372-372 372 166.6 372 372-166.6 372-372 372z">
                                            </path>
                                            <path
                                                d="M623.6 316.7C593.6 290.4 554 276 512 276s-81.6 14.5-111.6 40.7C369.2 344 352 380.7 352 420v7.6c0 4.4 3.6 8 8 8h48c4.4 0 8-3.6 8-8V420c0-44.1 43.1-80 96-80s96 35.9 96 80c0 31.1-22 59.6-56.1 72.7-21.2 8.1-39.2 22.3-52.1 40.9-13.1 19-19.9 41.8-19.9 64.9V620c0 4.4 3.6 8 8 8h48c4.4 0 8-3.6 8-8v-22.7a48.3 48.3 0 0 1 30.9-44.8c59-22.7 97.1-74.7 97.1-132.5.1-39.3-17.1-76-48.3-103.3zM472 732a40 40 0 1 0 80 0 40 40 0 1 0-80 0z">
                                            </path>
                                        </svg></i></span></span></span><span class="ant-table-column-sorter"></span>
                    </div>
                </span></th>
        </tr>
    </thead>
    <tbody class="ant-table-tbody">
        <tr class="ant-table-row ant-table-row-level-0" data-row-key="0">
            <td class="">🇻🇳65 TNG - MANGVIP</td>
            <td class="" style="text-align: center;"><span
                    class="ant-badge ant-badge-status ant-badge-not-a-wrapper"><span
                        class="ant-badge-status-dot ant-badge-status-processing"></span><span
                        class="ant-badge-status-text"></span></span></td>
        </tr>
        <tr class="ant-table-row ant-table-row-level-0" data-row-key="1">
            <td class="">🇻🇳73 HNI - MANGVIP.</td>
            <td class="" style="text-align: center;"><span
                    class="ant-badge ant-badge-status ant-badge-not-a-wrapper"><span
                        class="ant-badge-status-dot ant-badge-status-processing"></span><span
                        class="ant-badge-status-text"></span></span></td>
        </tr>
        <tr class="ant-table-row ant-table-row-level-0" data-row-key="2">
            <td class="">🇻🇳75 BMI - MANGVIP.</td>
            <td class="" style="text-align: center;"><span
                    class="ant-badge ant-badge-status ant-badge-not-a-wrapper"><span
                        class="ant-badge-status-dot ant-badge-status-processing"></span><span
                        class="ant-badge-status-text"></span></span></td>
        </tr>
        <tr class="ant-table-row ant-table-row-level-0" data-row-key="3">
            <td class="">🇻🇳77 RRY - MANGVIP.</td>
            <td class="" style="text-align: center;"><span
                    class="ant-badge ant-badge-status ant-badge-not-a-wrapper"><span
                        class="ant-badge-status-dot ant-badge-status-processing"></span><span
                        class="ant-badge-status-text"></span></span></td>
        </tr>
        <tr class="ant-table-row ant-table-row-level-0" data-row-key="4">
            <td class="">🇻🇳79 MCP - MANGVIP.</td>
            <td class="" style="text-align: center;"><span
                    class="ant-badge ant-badge-status ant-badge-not-a-wrapper"><span
                        class="ant-badge-status-dot ant-badge-status-processing"></span><span
                        class="ant-badge-status-text"></span></span></td>
        </tr>
        <tr class="ant-table-row ant-table-row-level-0" data-row-key="5">
            <td class="">🇻🇳81 MOX - MANGVIP.</td>
            <td class="" style="text-align: center;"><span
                    class="ant-badge ant-badge-status ant-badge-not-a-wrapper"><span
                        class="ant-badge-status-dot ant-badge-status-processing"></span><span
                        class="ant-badge-status-text"></span></span></td>
        </tr>
        <tr class="ant-table-row ant-table-row-level-0" data-row-key="6">
            <td class="">🇻🇳83 DNO - MANGVIP.</td>
            <td class="" style="text-align: center;"><span
                    class="ant-badge ant-badge-status ant-badge-not-a-wrapper"><span
                        class="ant-badge-status-dot ant-badge-status-processing"></span><span
                        class="ant-badge-status-text"></span></span></td>
        </tr>
        <tr class="ant-table-row ant-table-row-level-0" data-row-key="7">
            <td class="">🇻🇳85 HBI - MANGVIP.</td>
            <td class="" style="text-align: center;"><span
                    class="ant-badge ant-badge-status ant-badge-not-a-wrapper"><span
                        class="ant-badge-status-dot ant-badge-status-processing"></span><span
                        class="ant-badge-status-text"></span></span></td>
        </tr>
        <tr class="ant-table-row ant-table-row-level-0" data-row-key="8">
            <td class="">🇻🇳87 STA - MANGVIP.</td>
            <td class="" style="text-align: center;"><span
                    class="ant-badge ant-badge-status ant-badge-not-a-wrapper"><span
                        class="ant-badge-status-dot ant-badge-status-processing"></span><span
                        class="ant-badge-status-text"></span></span></td>
        </tr>
        <tr class="ant-table-row ant-table-row-level-0" data-row-key="9">
            <td class="">🇻🇳89 KCM - MANGVIP.</td>
            <td class="" style="text-align: center;"><span
                    class="ant-badge ant-badge-status ant-badge-not-a-wrapper"><span
                        class="ant-badge-status-dot ant-badge-status-processing"></span><span
                        class="ant-badge-status-text"></span></span></td>
        </tr>
        <tr class="ant-table-row ant-table-row-level-0" data-row-key="10">
            <td class="">🇻🇳91 ICO - MANGVIP.</td>
            <td class="" style="text-align: center;"><span
                    class="ant-badge ant-badge-status ant-badge-not-a-wrapper"><span
                        class="ant-badge-status-dot ant-badge-status-processing"></span><span
                        class="ant-badge-status-text"></span></span></td>
        </tr>
        <tr class="ant-table-row ant-table-row-level-0" data-row-key="11">
            <td class="">🇻🇳92 PCL - MANGVIP</td>
            <td class="" style="text-align: center;"><span
                    class="ant-badge ant-badge-status ant-badge-not-a-wrapper"><span
                        class="ant-badge-status-dot ant-badge-status-processing"></span><span
                        class="ant-badge-status-text"></span></span></td>
        </tr>
        <tr class="ant-table-row ant-table-row-level-0" data-row-key="12">
            <td class="">🇻🇳93 HPK - MANGVIP</td>
            <td class="" style="text-align: center;"><span
                    class="ant-badge ant-badge-status ant-badge-not-a-wrapper"><span
                        class="ant-badge-status-dot ant-badge-status-processing"></span><span
                        class="ant-badge-status-text"></span></span></td>
        </tr>
        <tr class="ant-table-row ant-table-row-level-0" data-row-key="13">
            <td class="">🇻🇳94 JES - MANGVIP</td>
            <td class="" style="text-align: center;"><span
                    class="ant-badge ant-badge-status ant-badge-not-a-wrapper"><span
                        class="ant-badge-status-dot ant-badge-status-processing"></span><span
                        class="ant-badge-status-text"></span></span></td>
        </tr>
        <tr class="ant-table-row ant-table-row-level-0" data-row-key="14">
            <td class="">🇻🇳95 MXE - MANGVIP</td>
            <td class="" style="text-align: center;"><span
                    class="ant-badge ant-badge-status ant-badge-not-a-wrapper"><span
                        class="ant-badge-status-dot ant-badge-status-processing"></span><span
                        class="ant-badge-status-text"></span></span></td>
        </tr>
        <tr class="ant-table-row ant-table-row-level-0" data-row-key="15">
            <td class="">🇻🇳96 VJA - MANGVIP</td>
            <td class="" style="text-align: center;"><span
                    class="ant-badge ant-badge-status ant-badge-not-a-wrapper"><span
                        class="ant-badge-status-dot ant-badge-status-processing"></span><span
                        class="ant-badge-status-text"></span></span></td>
        </tr>
        <tr class="ant-table-row ant-table-row-level-0" data-row-key="16">
            <td class="">🇻🇳97 LOF - MANGVIP</td>
            <td class="" style="text-align: center;"><span
                    class="ant-badge ant-badge-status ant-badge-not-a-wrapper"><span
                        class="ant-badge-status-dot ant-badge-status-processing"></span><span
                        class="ant-badge-status-text"></span></span></td>
        </tr>
        <tr class="ant-table-row ant-table-row-level-0" data-row-key="17">
            <td class="">🇻🇳98 VIN - MANGVIP</td>
            <td class="" style="text-align: center;"><span
                    class="ant-badge ant-badge-status ant-badge-not-a-wrapper"><span
                        class="ant-badge-status-dot ant-badge-status-processing"></span><span
                        class="ant-badge-status-text"></span></span></td>
        </tr>
        <tr class="ant-table-row ant-table-row-level-0" data-row-key="18">
            <td class="">🇻🇳99 KAI - MANGVIP</td>
            <td class="" style="text-align: center;"><span
                    class="ant-badge ant-badge-status ant-badge-not-a-wrapper"><span
                        class="ant-badge-status-dot ant-badge-status-processing"></span><span
                        class="ant-badge-status-text"></span></span></td>
        </tr>
        <tr class="ant-table-row ant-table-row-level-0" data-row-key="19">
            <td class="">🇻🇳100 CFO - MANGVIP</td>
            <td class="" style="text-align: center;"><span
                    class="ant-badge ant-badge-status ant-badge-not-a-wrapper"><span
                        class="ant-badge-status-dot ant-badge-status-processing"></span><span
                        class="ant-badge-status-text"></span></span></td>
        </tr>
        <tr class="ant-table-row ant-table-row-level-0" data-row-key="20">
            <td class="">🇻🇳101 GGC - MANGVIP</td>
            <td class="" style="text-align: center;"><span
                    class="ant-badge ant-badge-status ant-badge-not-a-wrapper"><span
                        class="ant-badge-status-dot ant-badge-status-processing"></span><span
                        class="ant-badge-status-text"></span></span></td>
        </tr>
        <tr class="ant-table-row ant-table-row-level-0" data-row-key="21">
            <td class="">🇻🇳102 PIK - MANGVIP</td>
            <td class="" style="text-align: center;"><span
                    class="ant-badge ant-badge-status ant-badge-not-a-wrapper"><span
                        class="ant-badge-status-dot ant-badge-status-processing"></span><span
                        class="ant-badge-status-text"></span></span></td>
        </tr>
        <tr class="ant-table-row ant-table-row-level-0" data-row-key="22">
            <td class="">🇻🇳103 MAC - MANGVIP</td>
            <td class="" style="text-align: center;"><span
                    class="ant-badge ant-badge-status ant-badge-not-a-wrapper"><span
                        class="ant-badge-status-dot ant-badge-status-processing"></span><span
                        class="ant-badge-status-text"></span></span></td>
        </tr>
        <tr class="ant-table-row ant-table-row-level-0" data-row-key="23">
            <td class="">🇻🇳104 CBC - MANGVIP</td>
            <td class="" style="text-align: center;"><span
                    class="ant-badge ant-badge-status ant-badge-not-a-wrapper"><span
                        class="ant-badge-status-dot ant-badge-status-processing"></span><span
                        class="ant-badge-status-text"></span></span></td>
        </tr>
        <tr class="ant-table-row ant-table-row-level-0" data-row-key="24">
            <td class="">🇻🇳105 BIG - MANGVIP</td>
            <td class="" style="text-align: center;"><span
                    class="ant-badge ant-badge-status ant-badge-not-a-wrapper"><span
                        class="ant-badge-status-dot ant-badge-status-processing"></span><span
                        class="ant-badge-status-text"></span></span></td>
        </tr>
        <tr class="ant-table-row ant-table-row-level-0" data-row-key="25">
            <td class="">🇻🇳106 SOM - MANGVIP</td>
            <td class="" style="text-align: center;"><span
                    class="ant-badge ant-badge-status ant-badge-not-a-wrapper"><span
                        class="ant-badge-status-dot ant-badge-status-processing"></span><span
                        class="ant-badge-status-text"></span></span></td>
        </tr>
        <tr class="ant-table-row ant-table-row-level-0" data-row-key="26">
            <td class="">🇻🇳112 HNO - MANGVIP</td>
            <td class="" style="text-align: center;"><span
                    class="ant-badge ant-badge-status ant-badge-not-a-wrapper"><span
                        class="ant-badge-status-dot ant-badge-status-processing"></span><span
                        class="ant-badge-status-text"></span></span></td>
        </tr>
        <tr class="ant-table-row ant-table-row-level-0" data-row-key="27">
            <td class="">🇻🇳113 HNK - MANGVIP</td>
            <td class="" style="text-align: center;"><span
                    class="ant-badge ant-badge-status ant-badge-not-a-wrapper"><span
                        class="ant-badge-status-dot ant-badge-status-processing"></span><span
                        class="ant-badge-status-text"></span></span></td>
        </tr>
        <tr class="ant-table-row ant-table-row-level-0" data-row-key="28">
            <td class="">🇻🇳114 HNA - MANGVIP</td>
            <td class="" style="text-align: center;"><span
                    class="ant-badge ant-badge-status ant-badge-not-a-wrapper"><span
                        class="ant-badge-status-dot ant-badge-status-error"></span><span
                        class="ant-badge-status-text"></span></span></td>
        </tr>
        <tr class="ant-table-row ant-table-row-level-0" data-row-key="29">
            <td class="">🇻🇳115 HNX - MANGVIP</td>
            <td class="" style="text-align: center;"><span
                    class="ant-badge ant-badge-status ant-badge-not-a-wrapper"><span
                        class="ant-badge-status-dot ant-badge-status-processing"></span><span
                        class="ant-badge-status-text"></span></span></td>
        </tr>
        <tr class="ant-table-row ant-table-row-level-0" data-row-key="30">
            <td class="">🇻🇳116 HNP - MANGVIP</td>
            <td class="" style="text-align: center;"><span
                    class="ant-badge ant-badge-status ant-badge-not-a-wrapper"><span
                        class="ant-badge-status-dot ant-badge-status-processing"></span><span
                        class="ant-badge-status-text"></span></span></td>
        </tr>
        <tr class="ant-table-row ant-table-row-level-0" data-row-key="31">
            <td class="">🇻🇳69 BGA - MANGVIP</td>
            <td class="" style="text-align: center;"><span
                    class="ant-badge ant-badge-status ant-badge-not-a-wrapper"><span
                        class="ant-badge-status-dot ant-badge-status-processing"></span><span
                        class="ant-badge-status-text"></span></span></td>
        </tr>
        <tr class="ant-table-row ant-table-row-level-0" data-row-key="32">
            <td class="">🇻🇳71 DBN - MANGVIP</td>
            <td class="" style="text-align: center;"><span
                    class="ant-badge ant-badge-status ant-badge-not-a-wrapper"><span
                        class="ant-badge-status-dot ant-badge-status-processing"></span><span
                        class="ant-badge-status-text"></span></span></td>
        </tr>
        <tr class="ant-table-row ant-table-row-level-0" data-row-key="33">
            <td class="">🇻🇳67 CMA - MANGVIP</td>
            <td class="" style="text-align: center;"><span
                    class="ant-badge ant-badge-status ant-badge-not-a-wrapper"><span
                        class="ant-badge-status-dot ant-badge-status-processing"></span><span
                        class="ant-badge-status-text"></span></span></td>
        </tr>
        <tr class="ant-table-row ant-table-row-level-0" data-row-key="34">
            <td class="">🇻🇳21 HPP-MANGVIP</td>
            <td class="" style="text-align: center;"><span
                    class="ant-badge ant-badge-status ant-badge-not-a-wrapper"><span
                        class="ant-badge-status-dot ant-badge-status-processing"></span><span
                        class="ant-badge-status-text"></span></span></td>
        </tr>
        <tr class="ant-table-row ant-table-row-level-0" data-row-key="35">
            <td class="">🇻🇳13 GBO - MANGVIP</td>
            <td class="" style="text-align: center;"><span
                    class="ant-badge ant-badge-status ant-badge-not-a-wrapper"><span
                        class="ant-badge-status-dot ant-badge-status-processing"></span><span
                        class="ant-badge-status-text"></span></span></td>
        </tr>
        <tr class="ant-table-row ant-table-row-level-0" data-row-key="36">
            <td class="">🇻🇳19 SAF - MANGVIP</td>
            <td class="" style="text-align: center;"><span
                    class="ant-badge ant-badge-status ant-badge-not-a-wrapper"><span
                        class="ant-badge-status-dot ant-badge-status-processing"></span><span
                        class="ant-badge-status-text"></span></span></td>
        </tr>
        <tr class="ant-table-row ant-table-row-level-0" data-row-key="37">
            <td class="">🇻🇳27 MOK - MANGVIP</td>
            <td class="" style="text-align: center;"><span
                    class="ant-badge ant-badge-status ant-badge-not-a-wrapper"><span
                        class="ant-badge-status-dot ant-badge-status-processing"></span><span
                        class="ant-badge-status-text"></span></span></td>
        </tr>
        <tr class="ant-table-row ant-table-row-level-0" data-row-key="38">
            <td class="">🇻🇳23 CNN-MANGVIP</td>
            <td class="" style="text-align: center;"><span
                    class="ant-badge ant-badge-status ant-badge-not-a-wrapper"><span
                        class="ant-badge-status-dot ant-badge-status-processing"></span><span
                        class="ant-badge-status-text"></span></span></td>
        </tr>
        <tr class="ant-table-row ant-table-row-level-0" data-row-key="39">
            <td class="">🇻🇳29 LFM - MANGVIP</td>
            <td class="" style="text-align: center;"><span
                    class="ant-badge ant-badge-status ant-badge-not-a-wrapper"><span
                        class="ant-badge-status-dot ant-badge-status-processing"></span><span
                        class="ant-badge-status-text"></span></span></td>
        </tr>
        <tr class="ant-table-row ant-table-row-level-0" data-row-key="40">
            <td class="">🇻🇳25 HBO-MANGVIP</td>
            <td class="" style="text-align: center;"><span
                    class="ant-badge ant-badge-status ant-badge-not-a-wrapper"><span
                        class="ant-badge-status-dot ant-badge-status-processing"></span><span
                        class="ant-badge-status-text"></span></span></td>
        </tr>
        <tr class="ant-table-row ant-table-row-level-0" data-row-key="41">
            <td class="">🇻🇳31 BBO - MANGVIP</td>
            <td class="" style="text-align: center;"><span
                    class="ant-badge ant-badge-status ant-badge-not-a-wrapper"><span
                        class="ant-badge-status-dot ant-badge-status-processing"></span><span
                        class="ant-badge-status-text"></span></span></td>
        </tr>
        <tr class="ant-table-row ant-table-row-level-0" data-row-key="42">
            <td class="">🇻🇳37 LGC - MANGVIP</td>
            <td class="" style="text-align: center;"><span
                    class="ant-badge ant-badge-status ant-badge-not-a-wrapper"><span
                        class="ant-badge-status-dot ant-badge-status-processing"></span><span
                        class="ant-badge-status-text"></span></span></td>
        </tr>
        <tr class="ant-table-row ant-table-row-level-0" data-row-key="43">
            <td class="">🇻🇳35 FBN - MANGVIP</td>
            <td class="" style="text-align: center;"><span
                    class="ant-badge ant-badge-status ant-badge-not-a-wrapper"><span
                        class="ant-badge-status-dot ant-badge-status-processing"></span><span
                        class="ant-badge-status-text"></span></span></td>
        </tr>
        <tr class="ant-table-row ant-table-row-level-0" data-row-key="44">
            <td class="">🇻🇳33 ZIK - MANGVIP</td>
            <td class="" style="text-align: center;"><span
                    class="ant-badge ant-badge-status ant-badge-not-a-wrapper"><span
                        class="ant-badge-status-dot ant-badge-status-processing"></span><span
                        class="ant-badge-status-text"></span></span></td>
        </tr>
        <tr class="ant-table-row ant-table-row-level-0" data-row-key="45">
            <td class="">🇻🇳39 BFM - MANGVIP</td>
            <td class="" style="text-align: center;"><span
                    class="ant-badge ant-badge-status ant-badge-not-a-wrapper"><span
                        class="ant-badge-status-dot ant-badge-status-processing"></span><span
                        class="ant-badge-status-text"></span></span></td>
        </tr>
        <tr class="ant-table-row ant-table-row-level-0" data-row-key="46">
            <td class="">🇻🇳41 VOM - MANGVIP</td>
            <td class="" style="text-align: center;"><span
                    class="ant-badge ant-badge-status ant-badge-not-a-wrapper"><span
                        class="ant-badge-status-dot ant-badge-status-processing"></span><span
                        class="ant-badge-status-text"></span></span></td>
        </tr>
        <tr class="ant-table-row ant-table-row-level-0" data-row-key="47">
            <td class="">🇻🇳43 SUN - MANGVIP</td>
            <td class="" style="text-align: center;"><span
                    class="ant-badge ant-badge-status ant-badge-not-a-wrapper"><span
                        class="ant-badge-status-dot ant-badge-status-processing"></span><span
                        class="ant-badge-status-text"></span></span></td>
        </tr>
        <tr class="ant-table-row ant-table-row-level-0" data-row-key="48">
            <td class="">🇻🇳45 VIF - MANGVIP</td>
            <td class="" style="text-align: center;"><span
                    class="ant-badge ant-badge-status ant-badge-not-a-wrapper"><span
                        class="ant-badge-status-dot ant-badge-status-processing"></span><span
                        class="ant-badge-status-text"></span></span></td>
        </tr>
        <tr class="ant-table-row ant-table-row-level-0" data-row-key="49">
            <td class="">🇻🇳47 DEV - MANGVIP</td>
            <td class="" style="text-align: center;"><span
                    class="ant-badge ant-badge-status ant-badge-not-a-wrapper"><span
                        class="ant-badge-status-dot ant-badge-status-processing"></span><span
                        class="ant-badge-status-text"></span></span></td>
        </tr>
        <tr class="ant-table-row ant-table-row-level-0" data-row-key="50">
            <td class="">🇻🇳27 TIK-MANGVIP</td>
            <td class="" style="text-align: center;"><span
                    class="ant-badge ant-badge-status ant-badge-not-a-wrapper"><span
                        class="ant-badge-status-dot ant-badge-status-processing"></span><span
                        class="ant-badge-status-text"></span></span></td>
        </tr>
        <tr class="ant-table-row ant-table-row-level-0" data-row-key="51">
            <td class="">🇻🇳49 PPA - MANGVIP</td>
            <td class="" style="text-align: center;"><span
                    class="ant-badge ant-badge-status ant-badge-not-a-wrapper"><span
                        class="ant-badge-status-dot ant-badge-status-processing"></span><span
                        class="ant-badge-status-text"></span></span></td>
        </tr>
        <tr class="ant-table-row ant-table-row-level-0" data-row-key="52">
            <td class="">🇻🇳55 MIA - MANGVIP</td>
            <td class="" style="text-align: center;"><span
                    class="ant-badge ant-badge-status ant-badge-not-a-wrapper"><span
                        class="ant-badge-status-dot ant-badge-status-processing"></span><span
                        class="ant-badge-status-text"></span></span></td>
        </tr>
        <tr class="ant-table-row ant-table-row-level-0" data-row-key="53">
            <td class="">🇻🇳51 LLK - MANGVIP</td>
            <td class="" style="text-align: center;"><span
                    class="ant-badge ant-badge-status ant-badge-not-a-wrapper"><span
                        class="ant-badge-status-dot ant-badge-status-processing"></span><span
                        class="ant-badge-status-text"></span></span></td>
        </tr>
        <tr class="ant-table-row ant-table-row-level-0" data-row-key="54">
            <td class="">🇻🇳59 HMI - MANGVIP</td>
            <td class="" style="text-align: center;"><span
                    class="ant-badge ant-badge-status ant-badge-not-a-wrapper"><span
                        class="ant-badge-status-dot ant-badge-status-processing"></span><span
                        class="ant-badge-status-text"></span></span></td>
        </tr>
        <tr class="ant-table-row ant-table-row-level-0" data-row-key="55">
            <td class="">🇻🇳25 TCI-MANGVIP</td>
            <td class="" style="text-align: center;"><span
                    class="ant-badge ant-badge-status ant-badge-not-a-wrapper"><span
                        class="ant-badge-status-dot ant-badge-status-processing"></span><span
                        class="ant-badge-status-text"></span></span></td>
        </tr>
        <tr class="ant-table-row ant-table-row-level-0" data-row-key="56">
            <td class="">🇻🇳61 NTA - MANGVIP</td>
            <td class="" style="text-align: center;"><span
                    class="ant-badge ant-badge-status ant-badge-not-a-wrapper"><span
                        class="ant-badge-status-dot ant-badge-status-processing"></span><span
                        class="ant-badge-status-text"></span></span></td>
        </tr>
        <tr class="ant-table-row ant-table-row-level-0" data-row-key="57">
            <td class="">🇻🇳53 VBF - MANGVIP</td>
            <td class="" style="text-align: center;"><span
                    class="ant-badge ant-badge-status ant-badge-not-a-wrapper"><span
                        class="ant-badge-status-dot ant-badge-status-processing"></span><span
                        class="ant-badge-status-text"></span></span></td>
        </tr>
        <tr class="ant-table-row ant-table-row-level-0" data-row-key="58">
            <td class="">🇻🇳57 ACM - MANGVIP</td>
            <td class="" style="text-align: center;"><span
                    class="ant-badge ant-badge-status ant-badge-not-a-wrapper"><span
                        class="ant-badge-status-dot ant-badge-status-processing"></span><span
                        class="ant-badge-status-text"></span></span></td>
        </tr>
        <tr class="ant-table-row ant-table-row-level-0" data-row-key="59">
            <td class="">🇻🇳63 MIX - MANGVIP</td>
            <td class="" style="text-align: center;"><span
                    class="ant-badge ant-badge-status ant-badge-not-a-wrapper"><span
                        class="ant-badge-status-dot ant-badge-status-processing"></span><span
                        class="ant-badge-status-text"></span></span></td>
        </tr>
    </tbody>
</table>
                            <table id="example" class="table table-striped table-bordered dataTable" style="width:100%"
                                role="grid" aria-describedby="example_info">
                                <thead>
                                    <tr role="row">
                                        <th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1"
                                            colspan="1" aria-sort="ascending"
                                            aria-label="Name: activate to sort column descending"
                                            style="width: 100.969px;">Name</th>
                                        <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                                            aria-label="Position: activate to sort column ascending"
                                            style="width: 171.406px;">Position</th>
                                        <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                                            aria-label="Office: activate to sort column ascending"
                                            style="width: 69.9688px;">Office</th>
                                        <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                                            aria-label="Age: activate to sort column ascending"
                                            style="width: 26.2812px;">Age</th>
                                        <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                                            aria-label="Start date: activate to sort column ascending"
                                            style="width: 65.9531px;">Start date</th>
                                        <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"
                                            aria-label="Salary: activate to sort column ascending"
                                            style="width: 51.4219px;">Salary</th>
                                    </tr>
                                </thead>
                                <tbody>

























































                                    <tr role="row" class="odd">
                                        <td class="sorting_1">Airi Satou</td>
                                        <td>Accountant</td>
                                        <td>Tokyo</td>
                                        <td>33</td>
                                        <td>2008/11/28</td>
                                        <td>$162,700</td>
                                    </tr>
                                    <tr role="row" class="even">
                                        <td class="sorting_1">Angelica Ramos</td>
                                        <td>Chief Executive Officer (CEO)</td>
                                        <td>London</td>
                                        <td>47</td>
                                        <td>2009/10/09</td>
                                        <td>$1,200,000</td>
                                    </tr>
                                    <tr role="row" class="odd">
                                        <td class="sorting_1">Ashton Cox</td>
                                        <td>Junior Technical Author</td>
                                        <td>San Francisco</td>
                                        <td>66</td>
                                        <td>2009/01/12</td>
                                        <td>$86,000</td>
                                    </tr>
                                    <tr role="row" class="even">
                                        <td class="sorting_1">Bradley Greer</td>
                                        <td>Software Engineer</td>
                                        <td>London</td>
                                        <td>41</td>
                                        <td>2012/10/13</td>
                                        <td>$132,000</td>
                                    </tr>
                                    <tr role="row" class="odd">
                                        <td class="sorting_1">Brenden Wagner</td>
                                        <td>Software Engineer</td>
                                        <td>San Francisco</td>
                                        <td>28</td>
                                        <td>2011/06/07</td>
                                        <td>$206,850</td>
                                    </tr>
                                    <tr role="row" class="even">
                                        <td class="sorting_1">Brielle Williamson</td>
                                        <td>Integration Specialist</td>
                                        <td>New York</td>
                                        <td>61</td>
                                        <td>2012/12/02</td>
                                        <td>$372,000</td>
                                    </tr>
                                    <tr role="row" class="odd">
                                        <td class="sorting_1">Bruno Nash</td>
                                        <td>Software Engineer</td>
                                        <td>London</td>
                                        <td>38</td>
                                        <td>2011/05/03</td>
                                        <td>$163,500</td>
                                    </tr>
                                    <tr role="row" class="even">
                                        <td class="sorting_1">Caesar Vance</td>
                                        <td>Pre-Sales Support</td>
                                        <td>New York</td>
                                        <td>21</td>
                                        <td>2011/12/12</td>
                                        <td>$106,450</td>
                                    </tr>
                                    <tr role="row" class="odd">
                                        <td class="sorting_1">Cara Stevens</td>
                                        <td>Sales Assistant</td>
                                        <td>New York</td>
                                        <td>46</td>
                                        <td>2011/12/06</td>
                                        <td>$145,600</td>
                                    </tr>
                                    <tr role="row" class="even">
                                        <td class="sorting_1">Cedric Kelly</td>
                                        <td>Senior Javascript Developer</td>
                                        <td>Edinburgh</td>
                                        <td>22</td>
                                        <td>2012/03/29</td>
                                        <td>$433,060</td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th rowspan="1" colspan="1">Name</th>
                                        <th rowspan="1" colspan="1">Position</th>
                                        <th rowspan="1" colspan="1">Office</th>
                                        <th rowspan="1" colspan="1">Age</th>
                                        <th rowspan="1" colspan="1">Start date</th>
                                        <th rowspan="1" colspan="1">Salary</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-5">
                            <div class="dataTables_info" id="example_info" role="status" aria-live="polite">Showing 1 to
                                10 of 57 entries</div>
                        </div>
                        <div class="col-sm-12 col-md-7">
                            <div class="dataTables_paginate paging_simple_numbers" id="example_paginate">
                                <ul class="pagination">
                                    <li class="paginate_button page-item previous disabled" id="example_previous"><a
                                            href="#" aria-controls="example" data-dt-idx="0" tabindex="0"
                                            class="page-link">Prev</a></li>
                                    <li class="paginate_button page-item active"><a href="#" aria-controls="example"
                                            data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                                    <li class="paginate_button page-item "><a href="#" aria-controls="example"
                                            data-dt-idx="2" tabindex="0" class="page-link">2</a></li>
                                    <li class="paginate_button page-item "><a href="#" aria-controls="example"
                                            data-dt-idx="3" tabindex="0" class="page-link">3</a></li>
                                    <li class="paginate_button page-item "><a href="#" aria-controls="example"
                                            data-dt-idx="4" tabindex="0" class="page-link">4</a></li>
                                    <li class="paginate_button page-item "><a href="#" aria-controls="example"
                                            data-dt-idx="5" tabindex="0" class="page-link">5</a></li>
                                    <li class="paginate_button page-item "><a href="#" aria-controls="example"
                                            data-dt-idx="6" tabindex="0" class="page-link">6</a></li>
                                    <li class="paginate_button page-item next" id="example_next"><a href="#"
                                            aria-controls="example" data-dt-idx="7" tabindex="0"
                                            class="page-link">Next</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection