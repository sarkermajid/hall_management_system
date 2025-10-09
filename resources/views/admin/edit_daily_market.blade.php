@extends('admin.admin_dashboard')
@section('admin')
    <div class="page-content">
        <div class="row profile-body">
            <div class="col-md-12 col-xl-12 middle-wrapper">
                <div class="row">
                    <div class="card">
                        <div class="card-body">
                            @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <form method="POST" action="{{ route('admin.update.daily.market',['id'=>$dailyMarket->id]) }}" class="forms-sample"
                                id="myForm">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group mb-3">
                                            <label for="date" class="form-label">Date</label>
                                            <input type="text" name="date" value="{{ $dailyMarket->date }}"  class="form-control" placeholder="Today Date"
                                                id="date">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="chicken_q" class="form-label">Chicken Quantity</label>
                                            <input type="text" name="chicken_q" value="{{ $dailyMarket->chicken_q }}"  class="form-control" placeholder="Quantity"
                                                id="chicken_q">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="chicken_p" class="form-label">Chicken Price</label>
                                            <input type="text" name="chicken_p" value="{{ $dailyMarket->chicken_p }}"  class="form-control" placeholder="Price"
                                                id="chicken_p">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="tomato_sauce_q" class="form-label">Tomato Sauce Quantity</label>
                                            <input type="text" name="tomato_sauce_q" value="{{ $dailyMarket->tomato_sauce_q }}" class="form-control" placeholder="Quantity"
                                                id="tomato_sauce_q">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="tomato_sauce_p" class="form-label">Tomato Sauce Price</label>
                                            <input type="text" name="tomato_sauce_p"  value="{{ $dailyMarket->tomato_sauce_p }}" class="form-control" placeholder="Price"
                                                id="tomato_sauce_p">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="chili_sauce_q" class="form-label">Chili Sauce Quantity</label>
                                            <input type="text" name="chili_sauce_q"  value="{{ $dailyMarket->chili_sauce_q }}"  class="form-control" placeholder="Quantity"
                                                id="chili_sauce_q">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="chili_sauce_p" class="form-label">Chili Sauce Price</label>
                                            <input type="text" name="chili_sauce_p"  value="{{ $dailyMarket->chili_sauce_p }}" class="form-control" placeholder="Price"
                                                id="chili_sauce_p">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="burger_bun_q" class="form-label">Burger Bun Quantity</label>
                                            <input type="text" name="burger_bun_q" value="{{ $dailyMarket->burger_bun_q }}"  class="form-control" placeholder="Quantity"
                                                id="burger_bun_q">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="burger_bun_p" class="form-label">Burger Bun Price</label>
                                            <input type="text" name="burger_bun_p"  value="{{ $dailyMarket->burger_bun_p }}"  class="form-control" placeholder="Price"
                                                id="burger_bun_p">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="oil_q" class="form-label">Oil Quantity</label>
                                            <input type="text" name="oil_q" value="{{ $dailyMarket->oil_q }}"  class="form-control" placeholder="Quantity"
                                                id="oil_q">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="oil_p" class="form-label">Oil Price</label>
                                            <input type="text" name="oil_p" value="{{ $dailyMarket->oil_p }}" class="form-control" placeholder="Price"
                                                id="oil_p">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="milk_powder_q" class="form-label">Milk Powder Quantity</label>
                                            <input type="text" name="milk_powder_q" value="{{ $dailyMarket->milk_powder_q }}" class="form-control" placeholder="Quantity"
                                                id="milk_powder_q">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="milk_powder_p" class="form-label">Milk Powder Price</label>
                                            <input type="text" name="milk_powder_p" value="{{ $dailyMarket->milk_powder_p }}" class="form-control" placeholder="Price"
                                                id="milk_powder_p">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="chicken_powder_q" class="form-label">Chicken Powder Quantity</label>
                                            <input type="text" name="chicken_powder_q" value="{{ $dailyMarket->chicken_powder_q }}"  class="form-control" placeholder="Quantity"
                                                id="chicken_powder_q">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="chicken_powder_p" class="form-label">Chicken Powder Price</label>
                                            <input type="text" name="chicken_powder_p" value="{{ $dailyMarket->chicken_powder_p }}" class="form-control" placeholder="Price"
                                                id="chicken_powder_p">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="garam_masala_q" class="form-label">Garam Masala Quantity</label>
                                            <input type="text" name="garam_masala_q" value="{{ $dailyMarket->garam_masala_q }}" class="form-control" placeholder="Quantity"
                                                id="garam_masala_q">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="garam_masala_p" class="form-label">Garam Masala Price</label>
                                            <input type="text" name="garam_masala_p" value="{{ $dailyMarket->garam_masala_p }}" class="form-control" placeholder="Price"
                                                id="garam_masala_p">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="butter_q" class="form-label">Butter Quantity</label>
                                            <input type="text" name="butter_q" value="{{ $dailyMarket->butter_q }}"  class="form-control" placeholder="Quantity"
                                                id="butter_q">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="butter_p" class="form-label">Butter Price</label>
                                            <input type="text" name="butter_p" value="{{ $dailyMarket->butter_p }}" class="form-control" placeholder="Price"
                                                id="butter_p">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="oregano_q" class="form-label">Oregano Quantity</label>
                                            <input type="text" name="oregano_q" value="{{ $dailyMarket->oregano_q }}" class="form-control" placeholder="Quantity"
                                                id="oregano_q">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="oregano_p" class="form-label">Oregano Price</label>
                                            <input type="text" name="oregano_p" value="{{ $dailyMarket->oregano_p }}"  class="form-control" placeholder="Price"
                                                id="oregano_p">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="sugar_q" class="form-label">Sugar Quantity</label>
                                            <input type="text" name="sugar_q" value="{{ $dailyMarket->sugar_q }}"  class="form-control" placeholder="Quantity"
                                                id="sugar_q">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="sugar_p" class="form-label">Sugar Price</label>
                                            <input type="text" name="sugar_p" value="{{ $dailyMarket->sugar_p }}"  class="form-control" placeholder="Price"
                                                id="sugar_p">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="vegetable_q" class="form-label">Vegetable Quantity</label>
                                            <input type="text" name="vegetable_q" value="{{ $dailyMarket->vegetable_q }}"  class="form-control" placeholder="Quantity"
                                                id="vegetable_q">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="vegetable_p" class="form-label">Vegetable Price</label>
                                            <input type="text" name="vegetable_p" value="{{ $dailyMarket->vegetable_p }}" class="form-control" placeholder="Price"
                                                id="vegetable_p">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="fish_sauce_q" class="form-label">Fish Sauce Quantity</label>
                                            <input type="text" name="fish_sauce_q" value="{{ $dailyMarket->fish_sauce_q }}"  class="form-control" placeholder="Quantity"
                                                id="fish_sauce_q">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="fish_sauce_p" class="form-label">Fish Sauce Price</label>
                                            <input type="text" name="fish_sauce_p" value="{{ $dailyMarket->fish_sauce_p }}"  class="form-control" placeholder="Price"
                                                id="fish_sauce_p">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="bbq_sauce_q" class="form-label">BBQ Sauce Quantity</label>
                                            <input type="text" name="bbq_sauce_q" value="{{ $dailyMarket->bbq_sauce_q }}" class="form-control" placeholder="Quantity"
                                                id="bbq_sauce_q">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="bbq_sauce_p" class="form-label">BBQ Sauce Price</label>
                                            <input type="text" name="bbq_sauce_p" value="{{ $dailyMarket->bbq_sauce_p }}"  class="form-control" placeholder="Price"
                                                id="bbq_sauce_p">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="soya_sauce_q" class="form-label">Soya Sauce Quantity</label>
                                            <input type="text" name="soya_sauce_q" value="{{ $dailyMarket->soya_sauce_q }}" class="form-control" placeholder="Quantity"
                                                id="soya_sauce_q">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="soya_sauce_p" class="form-label">Soya Sauce Price</label>
                                            <input type="text" name="soya_sauce_p" value="{{ $dailyMarket->soya_sauce_p }}"  class="form-control" placeholder="Price"
                                                id="soya_sauce_p">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="cocoa_powder_q" class="form-label">Cocoa Powder Quantity</label>
                                            <input type="text" name="cocoa_powder_q" value="{{ $dailyMarket->cocoa_powder_q }}"  class="form-control" placeholder="Quantity"
                                                id="cocoa_powder_q">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="cocoa_powder_p" class="form-label">Cocoa Powder Price</label>
                                            <input type="text" name="cocoa_powder_p" value="{{ $dailyMarket->cocoa_powder_p }}" class="form-control" placeholder="Price"
                                                id="cocoa_powder_p">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="choco_syrup_q" class="form-label">Choco Syrup Quantity</label>
                                            <input type="text" name="choco_syrup_q" value="{{ $dailyMarket->choco_syrup_q }}"  class="form-control" placeholder="Quantity"
                                                id="choco_syrup_q">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="choco_syrup_p" class="form-label">Choco Syrup Price</label>
                                            <input type="text" name="choco_syrup_p" value="{{ $dailyMarket->choco_syrup_p }}" class="form-control" placeholder="Price"
                                                id="choco_syrup_p">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="gas_q" class="form-label">Gas Quantity</label>
                                            <input type="text" name="gas_q" value="{{ $dailyMarket->gas_q }}"  class="form-control" placeholder="Quantity"
                                                id="gas_q">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="gas_p" class="form-label">Gas Price</label>
                                            <input type="text" name="gas_p" value="{{ $dailyMarket->gas_p }}"  class="form-control" placeholder="Price"
                                                id="gas_p">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="electricity_bill_q" class="form-label">Electricity Unit</label>
                                            <input type="text" name="electricity_bill_q" value="{{ $dailyMarket->electricity_bill_q }}"  class="form-control" placeholder="Quantity"
                                                id="electricity_bill_q">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="electricity_bill_p" class="form-label">Electricity Bill</label>
                                            <input type="text" name="electricity_bill_p" value="{{ $dailyMarket->electricity_bill_p }}"  class="form-control" placeholder="Price"
                                                id="electricity_bill_p">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="mushroom_q" class="form-label">Mashroom Quantity</label>
                                            <input type="text" name="mushroom_q" value="{{ $dailyMarket->mushroom_q }}"  class="form-control" placeholder="Quantity"
                                                id="mushroom_q">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="mushroom_p" class="form-label">Mashroom Price</label>
                                            <input type="text" name="mushroom_p" value="{{ $dailyMarket->mushroom_p }}"  class="form-control" placeholder="Price"
                                                id="mushroom_p">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="black_olives_q" class="form-label">Black Olives Quantity</label>
                                            <input type="text" name="black_olives_q" value="{{ $dailyMarket->black_olives_q }}" class="form-control" placeholder="Quantity"
                                                id="black_olives_q">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="black_olives_p" class="form-label">Black Olives Price</label>
                                            <input type="text" name="black_olives_p" value="{{ $dailyMarket->black_olives_p }}" class="form-control" placeholder="Price"
                                                id="black_olives_p">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="sausage_q" class="form-label">Sausage Quantity</label>
                                            <input type="text" name="sausage_q" value="{{ $dailyMarket->sausage_q }}"  class="form-control" placeholder="Quantity"
                                                id="sausage_q">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="sausage_p" class="form-label">Sausage Price</label>
                                            <input type="text" name="sausage_p" value="{{ $dailyMarket->sausage_p }}" class="form-control" placeholder="Price"
                                                id="sausage_p">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="chicken_ball_q" class="form-label">Chicken Ball Quantity</label>
                                            <input type="text" name="chicken_ball_q" value="{{ $dailyMarket->chicken_ball_q }}"  class="form-control" placeholder="Quantity"
                                                id="chicken_ball_q">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="chicken_ball_p" class="form-label">Chicken Ball Price</label>
                                            <input type="text" name="chicken_ball_p" value="{{ $dailyMarket->chicken_ball_p }}" class="form-control" placeholder="Price"
                                                id="chicken_ball_p">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="momo_sheet_q" class="form-label">Momo Sheet Quantity</label>
                                            <input type="text" name="momo_sheet_q" value="{{ $dailyMarket->momo_sheet_q }}" class="form-control" placeholder="Quantity"
                                                id="momo_sheet_q">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="momo_sheet_p" class="form-label">Momo Sheet Price</label>
                                            <input type="text" name="momo_sheet_p" value="{{ $dailyMarket->momo_sheet_p }}"  class="form-control" placeholder="Price"
                                                id="momo_sheet_p">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="chawmine_q" class="form-label">Chawmine Quantity</label>
                                            <input type="text" name="chawmine_q" value="{{ $dailyMarket->chawmine_q }}"  class="form-control" placeholder="Quantity"
                                                id="chawmine_q">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="chawmine_p" class="form-label">Chawmine Price</label>
                                            <input type="text" name="chawmine_p" value="{{ $dailyMarket->chawmine_p }}"   class="form-control" placeholder="Price"
                                                id="chawmine_p">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="pasta_q" class="form-label">Pasta Quantity</label>
                                            <input type="text" name="pasta_q" value="{{ $dailyMarket->pasta_q }}"   class="form-control" placeholder="Quantity"
                                                id="pasta_q">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="pasta_p" class="form-label">Pasta Price</label>
                                            <input type="text" name="pasta_p" value="{{ $dailyMarket->pasta_p }}"   class="form-control" placeholder="Price"
                                                id="pasta_p">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="oster_q" class="form-label">Oster Quantity</label>
                                            <input type="text" name="oster_q" value="{{ $dailyMarket->oster_q }}"   class="form-control" placeholder="Quantity"
                                                id="oster_q">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="oster_p" class="form-label">Oster Price</label>
                                            <input type="text" name="oster_p" value="{{ $dailyMarket->oster_p }}"   class="form-control" placeholder="Price"
                                                id="oster_p">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="chart_q" class="form-label">Chart Quantity</label>
                                            <input type="text" name="chart_q" value="{{ $dailyMarket->chart_q }}"   class="form-control" placeholder="Quantity"
                                                id="chart_q">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="chart_p" class="form-label">Chart Price</label>
                                            <input type="text" name="chart_p" value="{{ $dailyMarket->chart_p }}"   class="form-control" placeholder="Price"
                                                id="chart_p">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="k_m_q" class="form-label">Kashmiri Red Chilli Quantity</label>
                                            <input type="text" name="k_m_q" value="{{ $dailyMarket->k_m_q }}"   class="form-control" placeholder="Quantity"
                                                id="k_m_q">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="k_m_p" class="form-label">Kashmiri Red Chilli Price</label>
                                            <input type="text" name="k_m_p" value="{{ $dailyMarket->k_m_p }}"  class="form-control" placeholder="Price"
                                                id="k_m_p">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="conflower_q" class="form-label">Conflower Quantity</label>
                                            <input type="text" name="conflower_q" value="{{ $dailyMarket->conflower_q }}"   class="form-control" placeholder="Quantity"
                                                id="conflower_q">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="conflower_p" class="form-label">Conflower Price</label>
                                            <input type="text" name="conflower_p" value="{{ $dailyMarket->conflower_p }}"  class="form-control" placeholder="Price"
                                                id="conflower_p">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="f_fry_q" class="form-label">French Fry Quantity</label>
                                            <input type="text" name="f_fry_q" value="{{ $dailyMarket->f_fry_q }}"  class="form-control" placeholder="Quantity"
                                                id="f_fry_q">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="f_fry_p" class="form-label">French Fry Price</label>
                                            <input type="text" name="f_fry_p" value="{{ $dailyMarket->f_fry_p }}"   class="form-control" placeholder="Price"
                                                id="f_fry_p">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="c_wings_q" class="form-label">Chicken Wings Quantity</label>
                                            <input type="text" name="c_wings_q"  value="{{ $dailyMarket->c_wings_q }}"  class="form-control" placeholder="Quantity"
                                                id="c_wings_q">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="c_wings_p" class="form-label">Chicken Wings Price</label>
                                            <input type="text" name="c_wings_p" value="{{ $dailyMarket->c_wings_p }}"  class="form-control" placeholder="Price"
                                                id="c_wings_p">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="potato_q" class="form-label">Potato Quantity</label>
                                            <input type="text" name="potato_q" value="{{ $dailyMarket->potato_q }}"  class="form-control" placeholder="Quantity"
                                                id="potato_q">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="potato_p" class="form-label">Potato Price</label>
                                            <input type="text" name="potato_p" value="{{ $dailyMarket->potato_p }}"   class="form-control" placeholder="Price"
                                                id="potato_p">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="vinegar_q" class="form-label">Vinegar Quantity</label>
                                            <input type="text" name="vinegar_q" value="{{ $dailyMarket->vinegar_q }}"  class="form-control" placeholder="Quantity"
                                                id="vinegar_q">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="vinegar_p" class="form-label">Vinegar Price</label>
                                            <input type="text" name="vinegar_p" value="{{ $dailyMarket->vinegar_p }}"   class="form-control" placeholder="Price"
                                                id="vinegar_p">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="salt_q" class="form-label">Salt Quantity</label>
                                            <input type="text" name="salt_q" value="{{ $dailyMarket->salt_q }}"  class="form-control" placeholder="Quantity"
                                                id="salt_q">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="salt_p" class="form-label">Salt Price</label>
                                            <input type="text" name="salt_p" value="{{ $dailyMarket->salt_p }}"   class="form-control" placeholder="Price"
                                                id="salt_p">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="c_fry_q" class="form-label">Chicken Fry Quantity</label>
                                            <input type="text" name="c_fry_q" value="{{ $dailyMarket->c_fry_q }}"  class="form-control" placeholder="Quantity"
                                                id="c_fry_q">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="c_fry_p" class="form-label">Chicken Fry Price</label>
                                            <input type="text" name="c_fry_p" value="{{ $dailyMarket->c_fry_p }}"  class="form-control" placeholder="Price"
                                                id="c_fry_p">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="c_stacp_q" class="form-label">Chicken Stacp Quantity</label>
                                            <input type="text" name="c_stacp_q" value="{{ $dailyMarket->c_stacp_q }}"   class="form-control" placeholder="Quantity"
                                                id="c_stacp_q">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="c_stacp_p" class="form-label">Chicken Stacp Price</label>
                                            <input type="text" name="c_stacp_p" value="{{ $dailyMarket->c_stacp_p }}" class="form-control" placeholder="Price"
                                                id="c_stacp_p">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="lemon_q" class="form-label">Lemon Quantity</label>
                                            <input type="text" name="lemon_q" value="{{ $dailyMarket->lemon_q }}"  class="form-control" placeholder="Quantity"
                                                id="lemon_q">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="lemon_p" class="form-label">Lemon Price</label>
                                            <input type="text" name="lemon_p" value="{{ $dailyMarket->lemon_p }}"  class="form-control" placeholder="Price"
                                                id="lemon_p">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="pudina_q" class="form-label">Pudina Quantity</label>
                                            <input type="text" name="pudina_q" value="{{ $dailyMarket->pudina_q }}" class="form-control" placeholder="Quantity"
                                                id="pudina_q">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="pudina_p" class="form-label">Pudina Price</label>
                                            <input type="text" name="pudina_p" value="{{ $dailyMarket->pudina_q }}"  class="form-control" placeholder="Price"
                                                id="pudina_p">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="doi_q" class="form-label">Doi Quantity</label>
                                            <input type="text" name="doi_q" value="{{ $dailyMarket->doi_q }}"  class="form-control" placeholder="Quantity"
                                                id="doi_q">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="doi_p" class="form-label">Doi Price</label>
                                            <input type="text" name="doi_p" value="{{ $dailyMarket->doi_p }}"  class="form-control" placeholder="Price"
                                                id="doi_p">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="transport_q" class="form-label">Transport Quantity</label>
                                            <input type="text" name="transport_q" value="{{ $dailyMarket->transport_q }}"  class="form-control" placeholder="Quantity"
                                                id="transport_q">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="transport_p" class="form-label">Transport Price</label>
                                            <input type="text" name="transport_p"  value="{{ $dailyMarket->transport_p }}" class="form-control" placeholder="Price"
                                                id="transport_p">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group mb-3">
                                            <label for="rent_p" class="form-label">Rent Bill</label>
                                            <input type="text" name="rent_p" value="{{ $dailyMarket->rent_p }}"  class="form-control" placeholder="Price"
                                                id="rent_p">
                                        </div>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary me-2">Save Changes</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
