@extends('admin.admin_dashboard')

@section('admin')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0 font-size-18">Daily Sells</h4>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body py-5">
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <td class="payment-title"><strong>Date :</strong></td>
                                <td class="text-style">{{ $dailySell->date }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Regular Meat Box :</strong></td>
                                <td class="text-style">{{ $dailySell->regular_mb }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Special Meat Box :</strong></td>
                                <td class="text-style">{{ $dailySell->special_mb }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Chicken Momo 5pcs :</strong></td>
                                <td class="text-style">{{ $dailySell->chicken_momo_5 }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Szechuan Momo 5pcs :</strong></td>
                                <td class="text-style">{{ $dailySell->sre_momo_5 }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>BBQ Momo 5pcs :</strong></td>
                                <td class="text-style">{{ $dailySell->bbq_momo_5 }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Cheese Momo 5pcs :</strong></td>
                                <td class="text-style">{{ $dailySell->cheese_momo_5 }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Mini Burger :</strong></td>
                                <td class="text-style">{{ $dailySell->m_burger }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Regular Burger :</strong></td>
                                <td class="text-style">{{ $dailySell->r_burger }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Cheese Burger :</strong></td>
                                <td class="text-style">{{ $dailySell->c_burger }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Sub Burger :</strong></td>
                                <td class="text-style">{{ $dailySell->s_burger }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Chow Mein (1:1) :</strong></td>
                                <td class="text-style">{{ $dailySell->chow_mein_11 }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Chow Mein (1:2) :</strong></td>
                                <td class="text-style">{{ $dailySell->chow_mein_12 }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Chow Mein (1:3) :</strong></td>
                                <td class="text-style">{{ $dailySell->chow_mein_13 }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Special Chow Mein (1:1) :</strong></td>
                                <td class="text-style">{{ $dailySell->s_chow_mein_11 }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Red Sauce Pasta :</strong></td>
                                <td class="text-style">{{ $dailySell->r_sauce_pasta }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>White Sauce Pasta :</strong></td>
                                <td class="text-style">{{ $dailySell->w_sauce_pasta }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Corn Soup :</strong></td>
                                <td class="text-style">{{ $dailySell->c_soup }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Thai Soup :</strong></td>
                                <td class="text-style">{{ $dailySell->t_soup }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Mashroom Soup :</strong></td>
                                <td class="text-style">{{ $dailySell->m_soup }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Chicken Popcorn (100mg) :</strong></td>
                                <td class="text-style">{{ $dailySell->c_pop_100 }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Chicken Popcorn (200mg) :</strong></td>
                                <td class="text-style">{{ $dailySell->c_pop_200 }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Chicken Popcorn (250mg) :</strong></td>
                                <td class="text-style">{{ $dailySell->c_pop_250 }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Chicken Lolipop 4pcs :</strong></td>
                                <td class="text-style">{{ $dailySell->c_l_4 }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Chicken Wings 4pcs :</strong></td>
                                <td class="text-style">{{ $dailySell->c_w_4 }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Chicken BBQ Wings 4pcs :</strong></td>
                                <td class="text-style">{{ $dailySell->c_b_4 }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>French Fries :</strong></td>
                                <td class="text-style">{{ $dailySell->french_fry }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Potatoes Wedges :</strong></td>
                                <td class="text-style">{{ $dailySell->potatoe_wings }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Koliza Singara 5pcs :</strong></td>
                                <td class="text-style">{{ $dailySell->k_singara }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Mint Lemonade :</strong></td>
                                <td class="text-style">{{ $dailySell->m_lemonade }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Fizzy Lemonade:</strong></td>
                                <td class="text-style">{{ $dailySell->f_lemonade }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Lassi :</strong></td>
                                <td class="text-style">{{ $dailySell->lassi }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Cold Coffe :</strong></td>
                                <td class="text-style">{{ $dailySell->cold_coffe }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Chocolate Cold Coffe :</strong></td>
                                <td class="text-style">{{ $dailySell->c_cold_coffe }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Oreo Cold Coffe :</strong></td>
                                <td class="text-style">{{ $dailySell->o_cold_coffe }}</td>
                            </tr>
                            <tr>
                                <td class="payment-title"><strong>Total Sells :</strong></td>
                                <td class="text-style">{{ $dailySell->total_price }}</td>
                            </tr>
                        </tbody>

                    </table>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
@endsection
