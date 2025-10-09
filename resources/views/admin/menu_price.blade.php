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
                            <form method="POST" action="{{ route('admin.menu.price.update') }}" class="forms-sample"
                                id="myForm">
                                @csrf
                                <h6 class="card-title">Meat Box</h6>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="regular_mb" class="form-label">Regular Meat Box</label>
                                            <input type="text" name="regular_mb" value="{{ $menuPrice->regular_mb }}" class="form-control" placeholder="Price"
                                                id="regular_mb">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="special_mb" class="form-label">Special Meat Box</label>
                                            <input type="text" name="special_mb" value="{{ $menuPrice->special_mb }}" class="form-control" placeholder="Price"
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
                                            <input type="text" name="chicken_momo_5" value="{{ $menuPrice->chicken_momo_5 }}" class="form-control"
                                                placeholder="Price" id="chicken_momo_5">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="sre_momo_5" class="form-label">Szechuan Momo 5pcs</label>
                                            <input type="text" name="sre_momo_5" value="{{ $menuPrice->sre_momo_5 }}" class="form-control" placeholder="Price"
                                                id="sre_momo_5">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="bbq_momo_5" class="form-label">BBQ Momo 5pcs</label>
                                            <input type="text" name="bbq_momo_5" value="{{ $menuPrice->bbq_momo_5 }}" class="form-control" placeholder="Price"
                                                id="bbq_momo_5">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="cheese_momo_5" class="form-label">Cheese Momo 5pcs</label>
                                            <input type="text" name="cheese_momo_5" value="{{ $menuPrice->cheese_momo_5 }}" class="form-control"
                                                placeholder="Price" id="cheese_momo_5">
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-3"></div>
                                <h6 class="card-title">Burger</h6>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="m_burger" class="form-label">Mini Burger</label>
                                            <input type="text" name="m_burger" value="{{ $menuPrice->m_burger }}" class="form-control" placeholder="Price"
                                                id="m_burger">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="r_burger" class="form-label">Regular Burger</label>
                                            <input type="text" name="r_burger" value="{{ $menuPrice->r_burger }}" class="form-control" placeholder="Price"
                                                id="r_burger">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="c_burger" class="form-label">Cheese Burger</label>
                                            <input type="text" name="c_burger" value="{{ $menuPrice->c_burger }}" class="form-control"
                                                placeholder="Price" id="c_burger">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="s_burger" class="form-label">Sub Burger</label>
                                            <input type="text" name="s_burger" value="{{ $menuPrice->s_burger }}" class="form-control"
                                                placeholder="Price" id="s_burger">
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-3"></div>
                                <h6 class="card-title">Chow Mein</h6>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="chow_mein_11" class="form-label">Chow Mein (1:1)</label>
                                            <input type="text" name="chow_mein_11" value="{{ $menuPrice->chow_mein_11 }}" class="form-control"
                                                placeholder="Price" id="chow_mein_11">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="chow_mein_12" class="form-label">Chow Mein (1:2)</label>
                                            <input type="text" name="chow_mein_12" value="{{ $menuPrice->chow_mein_12 }}" class="form-control"
                                                placeholder="Price" id="chow_mein_12">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="chow_mein_13" class="form-label">Chow Mein (1:3)</label>
                                            <input type="text" name="chow_mein_13" value="{{ $menuPrice->chow_mein_13 }}" class="form-control"
                                                placeholder="Price" id="chow_mein_13">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="s_chow_mein_11" class="form-label">Special Chow Mein (1:1)</label>
                                            <input type="text" name="s_chow_mein_11" value="{{ $menuPrice->s_chow_mein_11 }}" class="form-control"
                                                placeholder="Price" id="s_chow_mein_11">
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-3"></div>
                                <h6 class="card-title">Pasta</h6>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="r_sauce_pasta" class="form-label">Red Sauce Pasta</label>
                                            <input type="text" name="r_sauce_pasta" value="{{ $menuPrice->r_sauce_pasta }}" class="form-control"
                                                placeholder="Price" id="r_sauce_pasta">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="w_sauce_pasta" class="form-label">White Sauce Pasta</label>
                                            <input type="text" name="w_sauce_pasta" value="{{ $menuPrice->w_sauce_pasta }}" class="form-control"
                                                placeholder="Price" id="w_sauce_pasta">
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-3"></div>
                                <h6 class="card-title">Soup</h6>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group mb-3">
                                            <label for="c_soup" class="form-label">Corn Soup</label>
                                            <input type="text" name="c_soup" value="{{ $menuPrice->c_soup }}" class="form-control"
                                                placeholder="Price" id="c_soup">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group mb-3">
                                            <label for="t_soup" class="form-label">Thai Soup</label>
                                            <input type="text" name="t_soup" value="{{ $menuPrice->t_soup }}" class="form-control"
                                                placeholder="Price" id="t_soup">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group mb-3">
                                            <label for="m_soup" class="form-label">Mashroom Soup</label>
                                            <input type="text" name="m_soup" value="{{ $menuPrice->m_soup }}" class="form-control"
                                                placeholder="Price" id="m_soup">
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-3"></div>
                                <h6 class="card-title">Popcorn</h6>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group mb-3">
                                            <label for="c_pop_100" class="form-label">Chicken Popcorn (100mg)</label>
                                            <input type="text" name="c_pop_100" value="{{ $menuPrice->c_pop_100 }}" class="form-control"
                                                placeholder="Price" id="c_pop_100">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group mb-3">
                                            <label for="c_pop_200" class="form-label">Chicken Popcorn (200mg)</label>
                                            <input type="text" name="c_pop_200" value="{{ $menuPrice->c_pop_200 }}" class="form-control"
                                                placeholder="Price" id="c_pop_200">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group mb-3">
                                            <label for="c_pop_250" class="form-label">Chicken Popcorn (250mg)</label>
                                            <input type="text" name="c_pop_250" value="{{ $menuPrice->c_pop_250 }}" class="form-control"
                                                placeholder="Price" id="c_pop_250">
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
                                            <input type="text" name="c_l_4" value="{{ $menuPrice->c_l_4 }}" class="form-control"
                                                placeholder="Price" id="c_l_4">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group mb-3">
                                            <label for="c_w_4" class="form-label">Chicken Wings 4pcs</label>
                                            <input type="text" name="c_w_4" value="{{ $menuPrice->c_w_4 }}" class="form-control"
                                                placeholder="Price" id="c_w_4">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group mb-3">
                                            <label for="c_b_4" class="form-label">Chicken BBQ Wings 4pcs</label>
                                            <input type="text" name="c_b_4" value="{{ $menuPrice->c_b_4 }}" class="form-control"
                                                placeholder="Price" id="c_b_4">
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-3"></div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group mb-3">
                                            <label for="french_fry" class="form-label">French Fries</label>
                                            <input type="text" name="french_fry" value="{{ $menuPrice->french_fry }}" class="form-control"
                                                placeholder="Price" id="french_fry">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group mb-3">
                                            <label for="potatoe_wings" class="form-label">Potatoes Wedges</label>
                                            <input type="text" name="potatoe_wings" value="{{ $menuPrice->potatoe_wings }}" class="form-control"
                                                placeholder="Price" id="potatoe_wings">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group mb-3">
                                            <label for="k_singara" class="form-label">Koliza Singara 5pcs</label>
                                            <input type="text" name="k_singara" value="{{ $menuPrice->k_singara }}" class="form-control"
                                                placeholder="Price" id="k_singara">
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
                                            <input type="text" name="m_lemonade" value="{{ $menuPrice->m_lemonade }}" class="form-control"
                                                placeholder="Price" id="m_lemonade">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group mb-3">
                                            <label for="f_lemonade" class="form-label">Fizzy Lemonade</label>
                                            <input type="text" name="f_lemonade" value="{{ $menuPrice->f_lemonade }}" class="form-control"
                                                placeholder="Price" id="f_lemonade">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group mb-3">
                                            <label for="lassi" class="form-label">Lassi</label>
                                            <input type="text" name="lassi" value="{{ $menuPrice->lassi }}" class="form-control"
                                                placeholder="Price" id="lassi">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group mb-3">
                                            <label for="cold_coffe" class="form-label">Cold Coffe</label>
                                            <input type="text" name="cold_coffe" value="{{ $menuPrice->cold_coffe }}" class="form-control"
                                                placeholder="Price" id="cold_coffe">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group mb-3">
                                            <label for="c_cold_coffe" class="form-label">Chocolate Cold Coffe</label>
                                            <input type="text" name="c_cold_coffe" value="{{ $menuPrice->c_cold_coffe }}" class="form-control"
                                                placeholder="Price" id="c_cold_coffe">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group mb-3">
                                            <label for="o_cold_coffe" class="form-label">Oreo Cold Coffe</label>
                                            <input type="text" name="o_cold_coffe" value="{{ $menuPrice->o_cold_coffe }}" class="form-control"
                                                placeholder="Price" id="o_cold_coffe">
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
