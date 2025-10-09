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
                            <form method="POST" action="{{ route('admin.store.daily.sells') }}" class="forms-sample"
                                id="myForm">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group mb-3">
                                            <label for="date" class="form-label">Date</label>
                                            <input type="text" name="date"  class="form-control" placeholder="Today Date"
                                                id="date">
                                        </div>
                                    </div>
                                </div>
                                <h6 class="card-title">Meat Box</h6>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="regular_mb" class="form-label">Regular Meat Box</label>
                                            <input type="text" name="regular_mb"  class="form-control" placeholder="Quantity"
                                                id="regular_mb">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="special_mb" class="form-label">Special Meat Box</label>
                                            <input type="text" name="special_mb"  class="form-control" placeholder="Quantity"
                                                id="special_mb">
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-3"></div>
                                <h6 class="card-title">Momo</h6>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="chicken_momo_5" class="form-label">Chicken Momo 5pcs</label>
                                            <input type="text" name="chicken_momo_5" class="form-control"
                                                placeholder="Quantity" id="chicken_momo_5">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="sre_momo_5" class="form-label">Szechuan Momo 5pcs</label>
                                            <input type="text" name="sre_momo_5" class="form-control" placeholder="Quantity"
                                                id="sre_momo_5">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="bbq_momo_5" class="form-label">BBQ Momo 5pcs</label>
                                            <input type="text" name="bbq_momo_5" class="form-control" placeholder="Quantity"
                                                id="bbq_momo_5">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="cheese_momo_5" class="form-label">Cheese Momo 5pcs</label>
                                            <input type="text" name="cheese_momo_5" class="form-control"
                                                placeholder="Quantity" id="cheese_momo_5">
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-3"></div>
                                <h6 class="card-title">Burger</h6>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="m_burger" class="form-label">Mini Burger</label>
                                            <input type="text" name="m_burger" class="form-control" placeholder="Quantity"
                                                id="m_burger">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="r_burger" class="form-label">Regular Burger</label>
                                            <input type="text" name="r_burger" class="form-control" placeholder="Quantity"
                                                id="r_burger">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="c_burger" class="form-label">Cheese Burger</label>
                                            <input type="text" name="c_burger" class="form-control"
                                                placeholder="Quantity" id="c_burger">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="s_burger" class="form-label">Sub Burger</label>
                                            <input type="text" name="s_burger" class="form-control"
                                                placeholder="Quantity" id="s_burger">
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-3"></div>
                                <h6 class="card-title">Chow Mein</h6>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="chow_mein_11" class="form-label">Chow Mein (1:1)</label>
                                            <input type="text" name="chow_mein_11" class="form-control"
                                                placeholder="Quantity" id="chow_mein_11">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="chow_mein_12" class="form-label">Chow Mein (1:2)</label>
                                            <input type="text" name="chow_mein_12" class="form-control"
                                                placeholder="Quantity" id="chow_mein_12">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="chow_mein_13" class="form-label">Chow Mein (1:3)</label>
                                            <input type="text" name="chow_mein_13" class="form-control"
                                                placeholder="Quantity" id="chow_mein_13">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="s_chow_mein_11" class="form-label">Special Chow Mein (1:1)</label>
                                            <input type="text" name="s_chow_mein_11" class="form-control"
                                                placeholder="Quantity" id="s_chow_mein_11">
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-3"></div>
                                <h6 class="card-title">Pasta</h6>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="r_sauce_pasta" class="form-label">Red Sauce Pasta</label>
                                            <input type="text" name="r_sauce_pasta" class="form-control"
                                                placeholder="Quantity" id="r_sauce_pasta">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="w_sauce_pasta" class="form-label">White Sauce Pasta</label>
                                            <input type="text" name="w_sauce_pasta" class="form-control"
                                                placeholder="Quantity" id="w_sauce_pasta">
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-3"></div>
                                <h6 class="card-title">Soup</h6>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group mb-3">
                                            <label for="c_soup" class="form-label">Corn Soup</label>
                                            <input type="text" name="c_soup" class="form-control"
                                                placeholder="Quantity" id="c_soup">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group mb-3">
                                            <label for="t_soup" class="form-label">Thai Soup</label>
                                            <input type="text" name="t_soup" class="form-control"
                                                placeholder="Quantity" id="t_soup">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group mb-3">
                                            <label for="m_soup" class="form-label">Mashroom Soup</label>
                                            <input type="text" name="m_soup" class="form-control"
                                                placeholder="Quantity" id="m_soup">
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-3"></div>
                                <h6 class="card-title">Popcorn</h6>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group mb-3">
                                            <label for="c_pop_100" class="form-label">Chicken Popcorn (100mg)</label>
                                            <input type="text" name="c_pop_100" class="form-control"
                                                placeholder="Quantity" id="c_pop_100">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group mb-3">
                                            <label for="c_pop_200" class="form-label">Chicken Popcorn (200mg)</label>
                                            <input type="text" name="c_pop_200" class="form-control"
                                                placeholder="Quantity" id="c_pop_200">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group mb-3">
                                            <label for="c_pop_250" class="form-label">Chicken Popcorn (250mg)</label>
                                            <input type="text" name="c_pop_250"  class="form-control"
                                                placeholder="Quantity" id="c_pop_250">
                                        </div>
                                    </div>
                                </div>

                                <hr>
                                <hr>

                                <div class="mt-5"></div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group mb-3">
                                            <label for="c_l_4" class="form-label">Chicken Lolipop 4pcs</label>
                                            <input type="text" name="c_l_4" class="form-control"
                                                placeholder="Quantity" id="c_l_4">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group mb-3">
                                            <label for="c_w_4" class="form-label">Chicken Wings 4pcs</label>
                                            <input type="text" name="c_w_4" class="form-control"
                                                placeholder="Quantity" id="c_w_4">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group mb-3">
                                            <label for="c_b_4" class="form-label">Chicken BBQ Wings 4pcs</label>
                                            <input type="text" name="c_b_4" class="form-control"
                                                placeholder="Quantity" id="c_b_4">
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-3"></div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group mb-3">
                                            <label for="french_fry" class="form-label">French Fries</label>
                                            <input type="text" name="french_fry"  class="form-control"
                                                placeholder="Quantity" id="french_fry">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group mb-3">
                                            <label for="potatoe_wings" class="form-label">Potatoes Wedges</label>
                                            <input type="text" name="potatoe_wings" class="form-control"
                                                placeholder="Quantity" id="potatoe_wings">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group mb-3">
                                            <label for="k_singara" class="form-label">Koliza Singara 5pcs</label>
                                            <input type="text" name="k_singara" class="form-control"
                                                placeholder="Quantity" id="k_singara">
                                        </div>
                                    </div>
                                </div>

                                <hr>
                                <hr>

                                <div class="mt-5"></div>
                                <h6 class="card-title">Drinks</h6>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group mb-3">
                                            <label for="m_lemonade" class="form-label">Mint Lemonade</label>
                                            <input type="text" name="m_lemonade"  class="form-control"
                                                placeholder="Quantity" id="m_lemonade">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group mb-3">
                                            <label for="f_lemonade" class="form-label">Fizzy Lemonade</label>
                                            <input type="text" name="f_lemonade" class="form-control"
                                                placeholder="Quantity" id="f_lemonade">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group mb-3">
                                            <label for="lassi" class="form-label">Lassi</label>
                                            <input type="text" name="lassi" class="form-control"
                                                placeholder="Quantity" id="lassi">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group mb-3">
                                            <label for="cold_coffe" class="form-label">Cold Coffe</label>
                                            <input type="text" name="cold_coffe"  class="form-control"
                                                placeholder="Quantity" id="cold_coffe">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group mb-3">
                                            <label for="c_cold_coffe" class="form-label">Chocolate Cold Coffe</label>
                                            <input type="text" name="c_cold_coffe" class="form-control"
                                                placeholder="Quantity" id="c_cold_coffe">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group mb-3">
                                            <label for="o_cold_coffe" class="form-label">Oreo Cold Coffe</label>
                                            <input type="text" name="o_cold_coffe" class="form-control"
                                                placeholder="Quantity" id="o_cold_coffe">
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
